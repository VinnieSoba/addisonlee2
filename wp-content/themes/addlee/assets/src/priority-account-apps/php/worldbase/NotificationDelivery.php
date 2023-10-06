<?php

class NotificationDelivery
{

  /**
   * 
   * @var string $Mode
   * @access public
   */
  public $Mode;

  /**
   * 
   * @var string $Format
   * @access public
   */
  public $Format;

  /**
   * 
   * @var string $Rpt_Language
   * @access public
   */
  public $Rpt_Language;

  /**
   * 
   * @var string $Email
   * @access public
   */
  public $Email;

  /**
   * 
   * @var string $Email_Copy
   * @access public
   */
  public $Email_Copy;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @var string $Business_Num
   * @access public
   */
  public $Business_Num;

  /**
   * 
   * @var string $Business_Num_Type
   * @access public
   */
  public $Business_Num_Type;

  /**
   * 
   * @var string $Phone
   * @access public
   */
  public $Phone;

  /**
   * 
   * @var string $Address_Line1
   * @access public
   */
  public $Address_Line1;

  /**
   * 
   * @var string $Address_Line2
   * @access public
   */
  public $Address_Line2;

  /**
   * 
   * @var string $Town
   * @access public
   */
  public $Town;

  /**
   * 
   * @var string $State_or_Province
   * @access public
   */
  public $State_or_Province;

  /**
   * 
   * @var string $Postal_Code
   * @access public
   */
  public $Postal_Code;

  /**
   * 
   * @param string $Mode
   * @param string $Format
   * @param string $Rpt_Language
   * @param string $Email
   * @param string $Email_Copy
   * @param string $Name
   * @param string $Business_Num
   * @param string $Business_Num_Type
   * @param string $Phone
   * @param string $Address_Line1
   * @param string $Address_Line2
   * @param string $Town
   * @param string $State_or_Province
   * @param string $Postal_Code
   * @access public
   */
  public function __construct($Mode, $Format, $Rpt_Language, $Email, $Email_Copy, $Name, $Business_Num, $Business_Num_Type, $Phone, $Address_Line1, $Address_Line2, $Town, $State_or_Province, $Postal_Code)
  {
    $this->Mode = $Mode;
    $this->Format = $Format;
    $this->Rpt_Language = $Rpt_Language;
    $this->Email = $Email;
    $this->Email_Copy = $Email_Copy;
    $this->Name = $Name;
    $this->Business_Num = $Business_Num;
    $this->Business_Num_Type = $Business_Num_Type;
    $this->Phone = $Phone;
    $this->Address_Line1 = $Address_Line1;
    $this->Address_Line2 = $Address_Line2;
    $this->Town = $Town;
    $this->State_or_Province = $State_or_Province;
    $this->Postal_Code = $Postal_Code;
  }

}
