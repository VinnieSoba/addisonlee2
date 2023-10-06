<?php

class Orders
{

  /**
   * 
   * @var string $User_Language
   * @access public
   */
  public $User_Language;

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
   * @var string $Trade_Up_Indicator
   * @access public
   */
  public $Trade_Up_Indicator;

  /**
   * 
   * @var string $Product
   * @access public
   */
  public $Product;

  /**
   * 
   * @var string $Product_Type
   * @access public
   */
  public $Product_Type;

  /**
   * 
   * @var string $Reason_Code
   * @access public
   */
  public $Reason_Code;

  /**
   * 
   * @var string $FileId
   * @access public
   */
  public $FileId;

  /**
   * 
   * @var string $SBRI_Unmatched_AGN
   * @access public
   */
  public $SBRI_Unmatched_AGN;

  /**
   * 
   * @var string $Char_Set_Override
   * @access public
   */
  public $Char_Set_Override;

  /**
   * 
   * @param string $User_Language
   * @param string $DnB_DUNS_Number
   * @param string $Country_Code
   * @param string $Trade_Up_Indicator
   * @param string $Product
   * @param string $Product_Type
   * @param string $Reason_Code
   * @param string $FileId
   * @param string $SBRI_Unmatched_AGN
   * @param string $Char_Set_Override
   * @access public
   */
  public function __construct($User_Language, $DnB_DUNS_Number, $Country_Code, $Trade_Up_Indicator, $Product, $Product_Type, $Reason_Code, $FileId, $SBRI_Unmatched_AGN, $Char_Set_Override)
  {
    $this->User_Language = $User_Language;
    $this->DnB_DUNS_Number = $DnB_DUNS_Number;
    $this->Country_Code = $Country_Code;
    $this->Trade_Up_Indicator = $Trade_Up_Indicator;
    $this->Product = $Product;
    $this->Product_Type = $Product_Type;
    $this->Reason_Code = $Reason_Code;
    $this->FileId = $FileId;
    $this->SBRI_Unmatched_AGN = $SBRI_Unmatched_AGN;
    $this->Char_Set_Override = $Char_Set_Override;
  }

}
