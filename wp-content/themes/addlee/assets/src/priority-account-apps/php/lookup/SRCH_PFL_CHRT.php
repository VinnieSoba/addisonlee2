<?php

class SRCH_PFL_CHRT
{

  /**
   * 
   * @var FINANCIAL_SVCS $FINANCIAL_SVCS
   * @access public
   */
  public $FINANCIAL_SVCS;

  /**
   * 
   * @var SERVICES $SERVICES
   * @access public
   */
  public $SERVICES;

  /**
   * 
   * @var MFG_SVCS $MFG_SVCS
   * @access public
   */
  public $MFG_SVCS;

  /**
   * 
   * @var WHOLESALE_SVCS $WHOLESALE_SVCS
   * @access public
   */
  public $WHOLESALE_SVCS;

  /**
   * 
   * @var COMM_SVCS $COMM_SVCS
   * @access public
   */
  public $COMM_SVCS;

  /**
   * 
   * @var TRANSPORT_SVCS $TRANSPORT_SVCS
   * @access public
   */
  public $TRANSPORT_SVCS;

  /**
   * 
   * @var RETAIL_SVCS $RETAIL_SVCS
   * @access public
   */
  public $RETAIL_SVCS;

  /**
   * 
   * @var UTILITY_SVCS $UTILITY_SVCS
   * @access public
   */
  public $UTILITY_SVCS;

  /**
   * 
   * @var CONT_CNST_SVCS $CONT_CNST_SVCS
   * @access public
   */
  public $CONT_CNST_SVCS;

  /**
   * 
   * @var PUB_SVCS $PUB_SVCS
   * @access public
   */
  public $PUB_SVCS;

  /**
   * 
   * @var METAL_MINING_SVCS $METAL_MINING_SVCS
   * @access public
   */
  public $METAL_MINING_SVCS;

  /**
   * 
   * @var AGRICULTURAL_SVCS $AGRICULTURAL_SVCS
   * @access public
   */
  public $AGRICULTURAL_SVCS;

  /**
   * 
   * @var UCLS_SVCS $UCLS_SVCS
   * @access public
   */
  public $UCLS_SVCS;

  /**
   * 
   * @var string $TOT_PAST_24HRS
   * @access public
   */
  public $TOT_PAST_24HRS;

  /**
   * 
   * @var string $TOT_PAST_1_TO_2_DAYS
   * @access public
   */
  public $TOT_PAST_1_TO_2_DAYS;

  /**
   * 
   * @var string $TOT_PAST_3_TO_7_DAYS
   * @access public
   */
  public $TOT_PAST_3_TO_7_DAYS;

  /**
   * 
   * @var string $TOT_PAST_8_TO_14_DAYS
   * @access public
   */
  public $TOT_PAST_8_TO_14_DAYS;

  /**
   * 
   * @var string $TOT_PAST_15_TO_30_DAYS
   * @access public
   */
  public $TOT_PAST_15_TO_30_DAYS;

  /**
   * 
   * @var string $TOT_PAST_31_TO_60_DAYS
   * @access public
   */
  public $TOT_PAST_31_TO_60_DAYS;

  /**
   * 
   * @var string $TOT_PAST_61_TO_90_DAYS
   * @access public
   */
  public $TOT_PAST_61_TO_90_DAYS;

  /**
   * 
   * @var string $TOT_PAST_91_TO_180_DAYS
   * @access public
   */
  public $TOT_PAST_91_TO_180_DAYS;

  /**
   * 
   * @var string $CNT_TOT_SRCH
   * @access public
   */
  public $CNT_TOT_SRCH;

  /**
   * 
   * @param FINANCIAL_SVCS $FINANCIAL_SVCS
   * @param SERVICES $SERVICES
   * @param MFG_SVCS $MFG_SVCS
   * @param WHOLESALE_SVCS $WHOLESALE_SVCS
   * @param COMM_SVCS $COMM_SVCS
   * @param TRANSPORT_SVCS $TRANSPORT_SVCS
   * @param RETAIL_SVCS $RETAIL_SVCS
   * @param UTILITY_SVCS $UTILITY_SVCS
   * @param CONT_CNST_SVCS $CONT_CNST_SVCS
   * @param PUB_SVCS $PUB_SVCS
   * @param METAL_MINING_SVCS $METAL_MINING_SVCS
   * @param AGRICULTURAL_SVCS $AGRICULTURAL_SVCS
   * @param UCLS_SVCS $UCLS_SVCS
   * @param string $TOT_PAST_24HRS
   * @param string $TOT_PAST_1_TO_2_DAYS
   * @param string $TOT_PAST_3_TO_7_DAYS
   * @param string $TOT_PAST_8_TO_14_DAYS
   * @param string $TOT_PAST_15_TO_30_DAYS
   * @param string $TOT_PAST_31_TO_60_DAYS
   * @param string $TOT_PAST_61_TO_90_DAYS
   * @param string $TOT_PAST_91_TO_180_DAYS
   * @param string $CNT_TOT_SRCH
   * @access public
   */
  public function __construct($FINANCIAL_SVCS, $SERVICES, $MFG_SVCS, $WHOLESALE_SVCS, $COMM_SVCS, $TRANSPORT_SVCS, $RETAIL_SVCS, $UTILITY_SVCS, $CONT_CNST_SVCS, $PUB_SVCS, $METAL_MINING_SVCS, $AGRICULTURAL_SVCS, $UCLS_SVCS, $TOT_PAST_24HRS, $TOT_PAST_1_TO_2_DAYS, $TOT_PAST_3_TO_7_DAYS, $TOT_PAST_8_TO_14_DAYS, $TOT_PAST_15_TO_30_DAYS, $TOT_PAST_31_TO_60_DAYS, $TOT_PAST_61_TO_90_DAYS, $TOT_PAST_91_TO_180_DAYS, $CNT_TOT_SRCH)
  {
    $this->FINANCIAL_SVCS = $FINANCIAL_SVCS;
    $this->SERVICES = $SERVICES;
    $this->MFG_SVCS = $MFG_SVCS;
    $this->WHOLESALE_SVCS = $WHOLESALE_SVCS;
    $this->COMM_SVCS = $COMM_SVCS;
    $this->TRANSPORT_SVCS = $TRANSPORT_SVCS;
    $this->RETAIL_SVCS = $RETAIL_SVCS;
    $this->UTILITY_SVCS = $UTILITY_SVCS;
    $this->CONT_CNST_SVCS = $CONT_CNST_SVCS;
    $this->PUB_SVCS = $PUB_SVCS;
    $this->METAL_MINING_SVCS = $METAL_MINING_SVCS;
    $this->AGRICULTURAL_SVCS = $AGRICULTURAL_SVCS;
    $this->UCLS_SVCS = $UCLS_SVCS;
    $this->TOT_PAST_24HRS = $TOT_PAST_24HRS;
    $this->TOT_PAST_1_TO_2_DAYS = $TOT_PAST_1_TO_2_DAYS;
    $this->TOT_PAST_3_TO_7_DAYS = $TOT_PAST_3_TO_7_DAYS;
    $this->TOT_PAST_8_TO_14_DAYS = $TOT_PAST_8_TO_14_DAYS;
    $this->TOT_PAST_15_TO_30_DAYS = $TOT_PAST_15_TO_30_DAYS;
    $this->TOT_PAST_31_TO_60_DAYS = $TOT_PAST_31_TO_60_DAYS;
    $this->TOT_PAST_61_TO_90_DAYS = $TOT_PAST_61_TO_90_DAYS;
    $this->TOT_PAST_91_TO_180_DAYS = $TOT_PAST_91_TO_180_DAYS;
    $this->CNT_TOT_SRCH = $CNT_TOT_SRCH;
  }

}
