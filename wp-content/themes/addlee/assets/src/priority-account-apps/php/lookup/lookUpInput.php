<?php

class lookUpInput
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @var string $Street_Address
   * @access public
   */
  public $Street_Address;

  /**
   * 
   * @var string $Town
   * @access public
   */
  public $Town;

  /**
   * 
   * @var string $PostTown
   * @access public
   */
  public $PostTown;

  /**
   * 
   * @var string $State_or_Region
   * @access public
   */
  public $State_or_Region;

  /**
   * 
   * @var string $Post_Code
   * @access public
   */
  public $Post_Code;

  /**
   * 
   * @var string $DnB_DUNS_Number
   * @access public
   */
  public $DnB_DUNS_Number;

  /**
   * 
   * @var string $Country_Code
   * @access public
   */
  public $Country_Code;

  /**
   * 
   * @var string $Business_Number
   * @access public
   */
  public $Business_Number;

  /**
   * 
   * @var string $Telephone_Number
   * @access public
   */
  public $Telephone_Number;

  /**
   * 
   * @var string $Reason_Code
   * @access public
   */
  public $Reason_Code;

  /**
   * 
   * @var string $Match_Type
   * @access public
   */
  public $Match_Type;

  /**
   * 
   * @var string $Max_Responses
   * @access public
   */
  public $Max_Responses;

  /**
   * 
   * @var string $File_Id
   * @access public
   */
  public $File_Id;

  /**
   * 
   * @var string $Search_Rule_Code
   * @access public
   */
  public $Search_Rule_Code;

  /**
   * 
   * @param string $Name
   * @param string $Street_Address
   * @param string $Town
   * @param string $PostTown
   * @param string $State_or_Region
   * @param string $Post_Code
   * @param string $DnB_DUNS_Number
   * @param string $Country_Code
   * @param string $Business_Number
   * @param string $Telephone_Number
   * @param string $Reason_Code
   * @param string $Match_Type
   * @param string $Max_Responses
   * @param string $File_Id
   * @param string $Search_Rule_Code
   * @access public
   */
  public function __construct($Name, $Street_Address, $Town, $PostTown, $State_or_Region, $Post_Code, $DnB_DUNS_Number, $Country_Code, $Business_Number, $Telephone_Number, $Reason_Code, $Match_Type, $Max_Responses, $File_Id, $Search_Rule_Code)
  {
    $this->Name = $Name;
    $this->Street_Address = $Street_Address;
    $this->Town = $Town;
    $this->PostTown = $PostTown;
    $this->State_or_Region = $State_or_Region;
    $this->Post_Code = $Post_Code;
    $this->DnB_DUNS_Number = $DnB_DUNS_Number;
    $this->Country_Code = $Country_Code;
    $this->Business_Number = $Business_Number;
    $this->Telephone_Number = $Telephone_Number;
    $this->Reason_Code = $Reason_Code;
    $this->Match_Type = $Match_Type;
    $this->Max_Responses = $Max_Responses;
    $this->File_Id = $File_Id;
    $this->Search_Rule_Code = $Search_Rule_Code;
  }

}
