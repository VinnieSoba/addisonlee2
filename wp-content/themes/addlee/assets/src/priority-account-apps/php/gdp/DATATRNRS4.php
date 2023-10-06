<?php

class DATATRNRS4
{

  /**
   * 
   * @var STATUS8 $STATUS
   * @access public
   */
  public $STATUS;

  /**
   * 
   * @var DATARS4 $DATARS
   * @access public
   */
  public $DATARS;

  /**
   * 
   * @param STATUS8 $STATUS
   * @param DATARS4 $DATARS
   * @access public
   */
  public function __construct($STATUS, $DATARS)
  {
    $this->STATUS = $STATUS;
    $this->DATARS = $DATARS;
  }

}
