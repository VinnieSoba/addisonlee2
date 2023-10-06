<?php

class CUST_INP_DATA
{

  /**
   * 
   * @var array $FLD_LST
   * @access public
   */
  public $FLD_LST;

  /**
   * 
   * @param array $FLD_LST
   * @access public
   */
  public function __construct($FLD_LST)
  {
    $this->FLD_LST = $FLD_LST;
  }

}
