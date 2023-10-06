<?php

class LAST_3_SRCH
{

  /**
   * 
   * @var string $DATE
   * @access public
   */
  public $DATE;

  /**
   * 
   * @var string $TIME
   * @access public
   */
  public $TIME;

  /**
   * 
   * @var string $SIC
   * @access public
   */
  public $SIC;

  /**
   * 
   * @var string $INDS_CTGY
   * @access public
   */
  public $INDS_CTGY;

  /**
   * 
   * @param string $DATE
   * @param string $TIME
   * @param string $SIC
   * @param string $INDS_CTGY
   * @access public
   */
  public function __construct($DATE, $TIME, $SIC, $INDS_CTGY)
  {
    $this->DATE = $DATE;
    $this->TIME = $TIME;
    $this->SIC = $SIC;
    $this->INDS_CTGY = $INDS_CTGY;
  }

}
