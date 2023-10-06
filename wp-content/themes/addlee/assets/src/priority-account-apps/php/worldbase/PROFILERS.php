<?php

class PROFILERS
{

  /**
   * 
   * @var string $USR_ID
   * @access public
   */
  public $USR_ID;

  /**
   * 
   * @var USR_CUST $USR_CUST
   * @access public
   */
  public $USR_CUST;

  /**
   * 
   * @var USR $USR
   * @access public
   */
  public $USR;

  /**
   * 
   * @param string $USR_ID
   * @param USR_CUST $USR_CUST
   * @param USR $USR
   * @access public
   */
  public function __construct($USR_ID, $USR_CUST, $USR)
  {
    $this->USR_ID = $USR_ID;
    $this->USR_CUST = $USR_CUST;
    $this->USR = $USR;
  }

}
