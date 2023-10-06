<?php

include_once('ws_LookUp.php');
include_once('lookUpRequest.php');
include_once('socCode.php');
include_once('lookUpInput.php');
include_once('ws_LookUpResponse.php');
include_once('lookUpResponse.php');
include_once('DGX.php');
include_once('SIGNONMSGSRSV1.php');
include_once('SONRS.php');
include_once('STATUS.php');
include_once('CREDITMSGSRSV2.php');
include_once('LOOKUPTRNRS.php');
include_once('STATUS2.php');
include_once('LOOKUPRS.php');
include_once('LOOKUPRSCOMPANY.php');
include_once('MTCH_BASS.php');
include_once('MTCH_BASS_ENTR.php');
include_once('FRD_RISK_SCR.php');
include_once('STATUS3.php');
include_once('FDSLOOKUPRS.php');
include_once('SCR_RSLT_INTERPRET.php');
include_once('SRCH_PFL_CHRT.php');
include_once('FINANCIAL_SVCS.php');
include_once('SERVICES.php');
include_once('MFG_SVCS.php');
include_once('WHOLESALE_SVCS.php');
include_once('COMM_SVCS.php');
include_once('TRANSPORT_SVCS.php');
include_once('RETAIL_SVCS.php');
include_once('UTILITY_SVCS.php');
include_once('CONT_CNST_SVCS.php');
include_once('PUB_SVCS.php');
include_once('METAL_MINING_SVCS.php');
include_once('AGRICULTURAL_SVCS.php');
include_once('UCLS_SVCS.php');
include_once('LAST_SRCHS.php');
include_once('LAST_1_SRCH.php');
include_once('LAST_2_SRCH.php');
include_once('LAST_3_SRCH.php');
include_once('LAST_4_SRCH.php');
include_once('LAST_5_SRCH.php');
include_once('INFO_CONSISTENCY.php');
include_once('MOST_FREQ_1_TLCM_NBR.php');
include_once('MOST_FREQ_2_TLCM_NBR.php');
include_once('MOST_FREQ_3_TLCM_NBR.php');
include_once('MOST_FREQ_4_TLCM_NBR.php');
include_once('MOST_FREQ_5_TLCM_NBR.php');
include_once('MOST_FREQ_1_DUNS.php');
include_once('MOST_FREQ_2_DUNS.php');
include_once('MOST_FREQ_3_DUNS.php');
include_once('MOST_FREQ_4_DUNS.php');
include_once('MOST_FREQ_5_DUNS.php');
include_once('FR_IND.php');


/**
 * 
 */
class wsp_LookUp_V1 extends SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ws_LookUp' => 'ws_LookUp',
    'lookUpRequest' => 'lookUpRequest',
    'socCode' => 'socCode',
    'lookUpInput' => 'lookUpInput',
    'ws_LookUpResponse' => 'ws_LookUpResponse',
    'lookUpResponse' => 'lookUpResponse',
    'DGX' => 'DGX',
    'SIGNONMSGSRSV1' => 'SIGNONMSGSRSV1',
    'SONRS' => 'SONRS',
    'STATUS' => 'STATUS',
    'CREDITMSGSRSV2' => 'CREDITMSGSRSV2',
    'LOOKUPTRNRS' => 'LOOKUPTRNRS',
    'STATUS2' => 'STATUS2',
    'LOOKUPRS' => 'LOOKUPRS',
    'LOOKUPRSCOMPANY' => 'LOOKUPRSCOMPANY',
    'MTCH_BASS' => 'MTCH_BASS',
    'MTCH_BASS_ENTR' => 'MTCH_BASS_ENTR',
    'FRD_RISK_SCR' => 'FRD_RISK_SCR',
    'STATUS3' => 'STATUS3',
    'FDSLOOKUPRS' => 'FDSLOOKUPRS',
    'SCR_RSLT_INTERPRET' => 'SCR_RSLT_INTERPRET',
    'SRCH_PFL_CHRT' => 'SRCH_PFL_CHRT',
    'FINANCIAL_SVCS' => 'FINANCIAL_SVCS',
    'SERVICES' => 'SERVICES',
    'MFG_SVCS' => 'MFG_SVCS',
    'WHOLESALE_SVCS' => 'WHOLESALE_SVCS',
    'COMM_SVCS' => 'COMM_SVCS',
    'TRANSPORT_SVCS' => 'TRANSPORT_SVCS',
    'RETAIL_SVCS' => 'RETAIL_SVCS',
    'UTILITY_SVCS' => 'UTILITY_SVCS',
    'CONT_CNST_SVCS' => 'CONT_CNST_SVCS',
    'PUB_SVCS' => 'PUB_SVCS',
    'METAL_MINING_SVCS' => 'METAL_MINING_SVCS',
    'AGRICULTURAL_SVCS' => 'AGRICULTURAL_SVCS',
    'UCLS_SVCS' => 'UCLS_SVCS',
    'LAST_SRCHS' => 'LAST_SRCHS',
    'LAST_1_SRCH' => 'LAST_1_SRCH',
    'LAST_2_SRCH' => 'LAST_2_SRCH',
    'LAST_3_SRCH' => 'LAST_3_SRCH',
    'LAST_4_SRCH' => 'LAST_4_SRCH',
    'LAST_5_SRCH' => 'LAST_5_SRCH',
    'INFO_CONSISTENCY' => 'INFO_CONSISTENCY',
    'MOST_FREQ_1_TLCM_NBR' => 'MOST_FREQ_1_TLCM_NBR',
    'MOST_FREQ_2_TLCM_NBR' => 'MOST_FREQ_2_TLCM_NBR',
    'MOST_FREQ_3_TLCM_NBR' => 'MOST_FREQ_3_TLCM_NBR',
    'MOST_FREQ_4_TLCM_NBR' => 'MOST_FREQ_4_TLCM_NBR',
    'MOST_FREQ_5_TLCM_NBR' => 'MOST_FREQ_5_TLCM_NBR',
    'MOST_FREQ_1_DUNS' => 'MOST_FREQ_1_DUNS',
    'MOST_FREQ_2_DUNS' => 'MOST_FREQ_2_DUNS',
    'MOST_FREQ_3_DUNS' => 'MOST_FREQ_3_DUNS',
    'MOST_FREQ_4_DUNS' => 'MOST_FREQ_4_DUNS',
    'MOST_FREQ_5_DUNS' => 'MOST_FREQ_5_DUNS',
    'FR_IND' => 'FR_IND');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = '../wsdl/LookUp_V1.wsdl')
  {
    foreach(self::$classmap as $key => $value)
    {
      if(!isset($options['classmap'][$key]))
      {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param ws_LookUp $parameters
   * @access public
   */
  public function ws_LookUp(ws_LookUp $parameters)
  {
    return $this->__soapCall('ws_LookUp', array($parameters));
  }

}
