<?php
		class Services_CallReport_70
		{

			//CallReport 7.0 SOAP class, contains working examples of most of the functions available from the CallReport 7.0 web service
			
			//set the location of the CallReport 7.0 WSDL file
			//Callcredit do not make any Service Descriptors available over the web for security reasons, please use the schemas provided on your toolkit locally, this path may differ on a Linux platform
			private $serviceDescriptor = "../wsdl/CallReport7.wsdl";
			
			private $searchParameters = array(
				'SearchDefinition' => array(
                    'yourreference' => 'Test',
					'creditrequest' => array(
						'score'	=>	1,  //Score required, default YES
						'purpose' => 'CA', //Search purpose, YOU WILL NEED TO CHANGE THIS TO YOUR SEARCH PURPOSE e.g. TV for Tenant Vet
						'autosearch' => 0, //Auto Search Address Links, default YES
						'autosearchmaximum' => 3, //Maximum addresses to autosearch, maximum 10
						'schemaversion' => '7.1', //mandatory attribute
						'datasets' => 255 //mandatory attribute, default 255
						
						//addional parameters can be added here or using the set function below.
					)
				)
			);
			
			private $changePasswordParameters = array(); //initialise the variable to be used for changing CallReport 7.0 passwords
			private $subSearchParameters = array(); //initialise the variable to be used in performing a Subsequent Search
			private $linkSearchParameters = array(); //initialise the variagle to be used in performing an Address Link Search where auto search is disabled
					
			private $soapHeader; //initialise the variable to store the SOAP header
			private $soapClient; //initialise the variable to store the SOAP client
			
			private $searchResult; //initialise the variable to store the SOAP response object
			private $changePasswordResult = array(); //initialise the variable for storing the change password result
			
			private $xmlResponseHeaders; //initialise the varialbe to store the SOAP response headers
			private $xmlResponse; //itialise the variable to store the SOAP response in XML
			private $xmlRequestHeaders; //initialise the varialbe to store the SOAP request headers
			private $xmlRequest; //itialise the variable to store the SOAP request in XML
			
			private $start; //initialise the variable to store the time the SOAP request was issued
			private $end; //initialise the variable to store the time the SOAP request was recieved

            private $ns = "urn:callcredit.co.uk/soap:callreport7";

            /**
             * @return string
             */
            public function getNameSpace()
            {
                return $this->ns;
            }

			
			//set the header based on the user credentials
			public function setHeader($company, $username, $password) 
			{

				$headerVars = array(
									'company' => $company,
									'username' => $username,
									'password' => $password
									);
				
				//set the SOAP headers using the PHP5 SOAP Extension
				$this->soapHeader = new SOAPHeader($this->ns, 'callcreditheaders', $headerVars);
			}
			
			//set the SOAP client using the PHP5 SOAP Extension
			public function setClient() 
			{
				//initialise with tracing to enable request and response XML capture and single elements as arrays instead of objects
				$this->soapClient = new SoapClient($this->serviceDescriptor, array('trace' => 1, 'features' => SOAP_SINGLE_ELEMENT_ARRAYS));
				
				//set the url to the client test site, NOTE. comment this out to target the LIVE site
				//$this->soapClient->__setLocation("https://ct.callcreditsecure.co.uk/Services/CallReport/callreport7.asmx");
				$this->soapClient->__setLocation("https://www.callcreditsecure.co.uk/Services/CallReport/CallReport7.asmx");
			}
			
			//set variables in the applicant block
			//usage: $object->setApplicatant('dob',$dob);
			public function setApplicant($tag, $value) 
			{
				$this->searchParameters['SearchDefinition']['creditrequest']['applicant'][$tag] = $value;
			}
			
			//set variables in the applicant name block
			//usage: $object->setApplicantName('forename',$forename, 'P); for a previous name (alias)
			public function setApplicantName($tag, $value, $type='C') 
			{
				if ($type  == 'P')
				{
					$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['name'][1][$tag] = $value;
				}
				else
				{
					$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['name'][0][$tag] = $value;
				}
			}
						
			//set variables in the applicant address block, the default is current but the function provides the ability to define a previous address also
			//usage (current address): $object->setApplicantAddress('abodeno', $abodeno); 
			//usage (previous address): $object->setApplicantAddress('buildingname', $buildingname,'P');
			public function setApplicantAddress($tag, $value, $type='C') 
			{
				if ($type == 'P') 
				{
					$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['address'][1][$tag] = $value;
				}
				else
				{
					$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['address'][0][$tag] = $value;
				}
			}
			
			//set variables in the applicantdemographics phone block
			//usage: $object->setApplicatantPhone('dob',$dob);
			public function setApplicantPhone($std, $number, $type, $n) 
			{
				$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['telephone'][$n]['type'] = $type;
				$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['telephone'][$n]['std'] = $std;
				$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['telephone'][$n]['number'] = $number;
			}
			
			
			//set variables in the applicantdemographics email block
			//usage: $object->setApplicatantEmail('dob',$dob);
			public function setApplicantEmail($address, $type, $n) 
			{
				$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['email'][$n]['type'] = $type;
				$this->searchParameters['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['email'][$n]['address'] = $address;
			}
			
			//set parameters in the creditrequest block
			//usage: $object->setParameter('autosearch', 1);
			public function setParameter($tag, $value) 
			{
				$this->searchParameters['SearchDefinition']['creditrequest'][$tag] = $value;
			}
						
			//useful for debugging
			public function printParameters()
			{
				echo "<pre>";
				print_r($this->searchParameters);
				echo "</pre>";
			}
			
			//perform a CallReport 7.0 search, using method 'CreditReportSearch07a'.  Please note, this search is for a Single applicant only, you may need to modify the code for Joint Applications.
			public function cr70Search() 
			{
				try 
				{				
					
					//perform the CallReport 7.0 search passing in the SOAP Headers and the Search Parameters, __soapCall stores the response from the server as an stdClass Object
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->searchResult = $this->soapClient->__soapCall('Search07a', array($this->searchParameters), null, $this->soapHeader);
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer

					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();

					$picklist = false; //initialise picklist as false
					foreach($this->searchResult->SearchResult->picklist->applicant as $applicant) //check each applicant for a picklist
					{
						if(!isset($applicant->reporttype)) //if there is no report type attribute, then this means we have a picklist
						{
							$picklist = true; //set to true
						}
					}

					if ($picklist) //then we have a picklist
					{
						return "picklist";
					}
					else //display the results
					{
						return "match";
					}
				}
				catch (SoapFault $fault)
				{
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}
			
			//get the $searchResult variable
			//usage: $object->getSearchResult();
			public function getSearchResult()
			{
				return $this->searchResult->SearchResult;
			}
			
			//get the $searchResult variable for lookups
			//usage: $object->getLookupResult();
			public function getLookupResult()
			{
				return $this->searchResult->LookupDataResult;
			}
			
			//get the $searchResult variable for system tests
			//usage: $object->getTestResult();
			public function getTestResult()
			{
				return $this->searchResult->TestResult;
			}
			
			//get the XML search result
			//usage: $object->getXMLResult();
			public function getXMLResult()
			{
				return $this->xmlResponse;
			}
			
			//reset the search parameters for use after processing a picklist
			//usage: $object->resetSearchParameters($modifiedResultObject);
			public function resetSearchParameters($modifiedResultObject)
			{
				$this->searchParameters['SearchDefinition'] = (array) $modifiedResultObject;
			}
			
			//change a CallReport 7.0 password using the 'ChangePassword06c' method
			//usage: $object->changePassword($newPass, $newPassConf);
			public function changePassword($newPass, $newPassConf)
			{
				//set the password change parameters
				$this->changePasswordParameters = array(
					'newpwd' => $newPass,
					'confirmpwd' => $newPassConf
				);
				
				try 
				{
					//call the password change method by passing in the change password parameters and the SOAP Headers
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->changePasswordResult = $this->soapClient->__soapCall('ChangePassword07a', array($this->changePasswordParameters), null, array($this->soapHeader));
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer
					
					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();
				} 
				catch (SoapFault $fault)
				{
					//echo the SOAP fault if there is one and exit the function
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}
			
			//perform a CallReport 7.0 subsequent search using the 'SubsequentCreditReportSearch07a' method
			public function subsequentSearch($guid){
				
				//set the subsequent search parameters
				$this->subSearchParameters = array(
					'SearchDefinition' => array(
						'secondaryrequest' => array(
							'schemaversion' => '7.1',
							'datasets' => 255,
							'origsrchid' => $guid
						)
					)
				);
								
				try 
				{
					//call the subsequent search method passing in the subsequent search parameters and the SOAP Headers
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->searchResult = $this->soapClient->__soapCall('SubsequentSearch07a', array($this->subSearchParameters), null, array($this->soapHeader));
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer
					
					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();
				} 
				catch (SoapFault $fault) 
				{
					//echo the SOAP fault if there is one and exit the function
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}
			
			//perform a CallReport 7.0 address link search ussing the 'AddressLinkSearch07a' method
			public function addLinkSearch($guid, $linkid){
				
				//set the address link search parameters
				$this->linkSearchParameters = array(
					'SearchDefinition' => array(
						'linkrequest' => array(
							'schemaversion' => '7.1',
							'datasets' => 255,
							'origsrchid' => $guid,
							'navlinkid' => $linkid
						)
					)
				);
								
				try 
				{
					//call the addres link search method passing in the address link search parameters and the SOAP Headers
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->searchResult = $this->soapClient->__soapCall('AddressLinkSearch07a', array($this->linkSearchParameters), null, array($this->soapHeader));
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer
					
					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();
				}
				catch (SoapFault $fault)
				{	
					//echo the SOAP fault if there is one and exit the function
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}
			
			//perform a CallReport 7.0 associate link search ussing the 'AssociateLinkSearch07a' method
			public function assocLinkSearch($guid, $linkid){
				
				//set the address link search parameters
				$this->linkSearchParameters = array(
					'SearchDefinition' => array(
						'linkrequest' => array(
							'schemaversion' => '7.1',
							'datasets' => 255,
							'origsrchid' => $guid,
							'navlinkid' => $linkid
						)
					)
				);
								
				try 
				{
					//call the addres link search method passing in the address link search parameters and the SOAP Headers
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->searchResult = $this->soapClient->__soapCall('AssociateLinkSearch07a', array($this->linkSearchParameters), null, array($this->soapHeader));
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer
					
					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();
				}
				catch (SoapFault $fault)
				{
					//echo the SOAP fault if there is one and exit the function
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}
			
			//perform a CallReport 7.0 data lookup using the 'LookupData07a' method
			public function lookupData(){

				try 
				{
					//call the lookup data method passing in the table id and the SOAP Headers
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->searchResult = $this->soapClient->__soapCall('LookupData07a', array(), null, array($this->soapHeader));
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer
					
					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();
				} 
				catch (SoapFault $fault) 
				{
					//echo the SOAP fault if there is one and exit the function
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}
			
			//perform a Test 7.0 service poll using the 'Test07a' method
			//NOTE, this method does not currently require user logon credentials
			public function testService(){							
				
				try 
				{
					//call the test search method passing in the nothing and the SOAP Headers
					$this->start = (float) array_sum(explode(' ',microtime())); //start the timer
					$this->searchResult = $this->soapClient->Test07a();
					$this->end = (float) array_sum(explode(' ',microtime())); //stop the timer
					
					//store the SOAP request and reponse for debugging
					$this->xmlResponse = $this->soapClient->__getLastResponse();
					$this->xmlResponseHeaders = $this->soapClient->__getLastResponseHeaders();
					$this->xmlRequest = $this->soapClient->__getLastRequest();
					$this->xmlRequestHeaders = $this->soapClient->__getLastRequestHeaders();
				} 
				catch (SoapFault $fault) 
				{
					//echo the SOAP fault if there is one and exit the function
					die('<form><textarea rows="20" cols="80">'.$this->soapClient->__getLastResponse().'</textarea></form>');
				}
			}

			//display the result of a password change
			public function changePasswordResult()
			{
				if ($this->changePasswordResult->pwdchanged == 1)
				{
					echo "Password Changed Successfully.";
				}
				else
				{
					echo "There was an error with your request, please try again.";
				}
			}

			//display the search results
			//this functions output both the return XML from the CallReport web service and the PHP Object.  You can either interogate the object directly OR apply your own XSLT on to the raw XML.
			public function displaySearchResults() {
			
?>
				<br /><h5 class="subtitle">DEBUG Outputs</h5>
				<p><?php echo "Search duration: ". sprintf("%.4f", ($this->end-$this->start))." seconds"; ?></p>
				<p><form>STD Class Object (this enables you to interigate a sample output object for the fields you want to display):<br /><textarea rows="20" cols="80"><?php print_r($this->searchResult); ?></textarea><br /><br />Soap Request Headers:<br /><textarea rows="10" cols="50"><?php echo htmlentities($this->xmlRequestHeaders); ?></textarea><br /><br />Soap Request:<br /><textarea rows="20" cols="80"><?php echo htmlentities($this->xmlRequest); ?></textarea><br /><br />Soap Response Headers:<br /><textarea rows="10" cols="50"><?php echo htmlentities($this->xmlResponseHeaders); ?></textarea><br /><br />Soap Response:<br /><textarea rows="20" cols="80"><?php echo htmlentities($this->xmlResponse); ?></textarea></form></p>
<?php
			}
						
		}
?>