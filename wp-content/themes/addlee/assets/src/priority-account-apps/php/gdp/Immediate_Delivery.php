<?php

class Immediate_Delivery
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
   * @var string $Ignore_Missing_Fields
   * @access public
   */
  public $Ignore_Missing_Fields;

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
   * @var string $Not_From_Cache
   * @access public
   */
  public $Not_From_Cache;

  /**
   * 
   * @param string $Mode
   * @param string $Format
   * @param string $Rpt_Language
   * @param string $Ignore_Missing_Fields
   * @param string $Email
   * @param string $Email_Copy
   * @param string $Not_From_Cache
   * @access public
   */
  public function __construct($Mode, $Format, $Rpt_Language, $Ignore_Missing_Fields, $Email, $Email_Copy, $Not_From_Cache)
  {
    $this->Mode = $Mode;
    $this->Format = $Format;
    $this->Rpt_Language = $Rpt_Language;
    $this->Ignore_Missing_Fields = $Ignore_Missing_Fields;
    $this->Email = $Email;
    $this->Email_Copy = $Email_Copy;
    $this->Not_From_Cache = $Not_From_Cache;
  }

}
