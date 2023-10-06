<?php

class SONRS4
{

  /**
   * 
   * @var STATUS7 $STATUS
   * @access public
   */
  public $STATUS;

  /**
   * 
   * @var string $APPID
   * @access public
   */
  public $APPID;

  /**
   * 
   * @var string $DTSERVER
   * @access public
   */
  public $DTSERVER;

  /**
   * 
   * @var string $LANGUAGE
   * @access public
   */
  public $LANGUAGE;

  /**
   * 
   * @param STATUS7 $STATUS
   * @param string $APPID
   * @param string $DTSERVER
   * @param string $LANGUAGE
   * @access public
   */
  public function __construct($STATUS, $APPID, $DTSERVER, $LANGUAGE)
  {
    $this->STATUS = $STATUS;
    $this->APPID = $APPID;
    $this->DTSERVER = $DTSERVER;
    $this->LANGUAGE = $LANGUAGE;
  }

}
