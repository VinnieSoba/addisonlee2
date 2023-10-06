<?php

class CREDITMSGSRSV2
{

  /**
   * 
   * @var PROFILERS $PROFILERS
   * @access public
   */
  public $PROFILERS;

  /**
   * 
   * @var DATATRNRS $DATATRNRS
   * @access public
   */
  public $DATATRNRS;

  /**
   * 
   * @param PROFILERS $PROFILERS
   * @param DATATRNRS $DATATRNRS
   * @access public
   */
  public function __construct($PROFILERS, $DATATRNRS)
  {
    $this->PROFILERS = $PROFILERS;
    $this->DATATRNRS = $DATATRNRS;
  }

}
