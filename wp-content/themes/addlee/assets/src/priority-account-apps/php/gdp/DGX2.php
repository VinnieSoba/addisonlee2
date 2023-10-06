<?php

class DGX2
{

  /**
   * 
   * @var SIGNONMSGSRSV12 $SIGNONMSGSRSV1
   * @access public
   */
  public $SIGNONMSGSRSV1;

  /**
   * 
   * @var CREDITMSGSRSV22 $CREDITMSGSRSV2
   * @access public
   */
  public $CREDITMSGSRSV2;

  /**
   * 
   * @param SIGNONMSGSRSV12 $SIGNONMSGSRSV1
   * @param CREDITMSGSRSV22 $CREDITMSGSRSV2
   * @access public
   */
  public function __construct($SIGNONMSGSRSV1, $CREDITMSGSRSV2)
  {
    $this->SIGNONMSGSRSV1 = $SIGNONMSGSRSV1;
    $this->CREDITMSGSRSV2 = $CREDITMSGSRSV2;
  }

}
