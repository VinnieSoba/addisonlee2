<?php

class SONRS2
{

  /**
   * 
   * @var STATUS3 $STATUS
   * @access public
   */
  public $STATUS;

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
   * @param STATUS3 $STATUS
   * @param string $DTSERVER
   * @param string $LANGUAGE
   * @access public
   */
  public function __construct($STATUS, $DTSERVER, $LANGUAGE)
  {
    $this->STATUS = $STATUS;
    $this->DTSERVER = $DTSERVER;
    $this->LANGUAGE = $LANGUAGE;
  }

}
