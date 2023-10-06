<?php

class InvestigationDelivery
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
   * @var string $Service
   * @access public
   */
  public $Service;

  /**
   * 
   * @var string $Cust_Request
   * @access public
   */
  public $Cust_Request;

  /**
   * 
   * @param string $Mode
   * @param string $Format
   * @param string $Rpt_Language
   * @param string $Email
   * @param string $Email_Copy
   * @param string $Service
   * @param string $Cust_Request
   * @access public
   */
  public function __construct($Mode, $Format, $Rpt_Language, $Email, $Email_Copy, $Service, $Cust_Request)
  {
    $this->Mode = $Mode;
    $this->Format = $Format;
    $this->Rpt_Language = $Rpt_Language;
    $this->Email = $Email;
    $this->Email_Copy = $Email_Copy;
    $this->Service = $Service;
    $this->Cust_Request = $Cust_Request;
  }

}
