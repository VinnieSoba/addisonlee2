<?php

class MFG_SVCS
{

  /**
   * 
   * @var string $PAST_24HRS
   * @access public
   */
  public $PAST_24HRS;

  /**
   * 
   * @var string $PAST_1_TO_2_DAYS
   * @access public
   */
  public $PAST_1_TO_2_DAYS;

  /**
   * 
   * @var string $PAST_3_TO_7_DAYS
   * @access public
   */
  public $PAST_3_TO_7_DAYS;

  /**
   * 
   * @var string $PAST_8_TO_14_DAYS
   * @access public
   */
  public $PAST_8_TO_14_DAYS;

  /**
   * 
   * @var string $PAST_15_TO_30_DAYS
   * @access public
   */
  public $PAST_15_TO_30_DAYS;

  /**
   * 
   * @var string $PAST_31_TO_60_DAYS
   * @access public
   */
  public $PAST_31_TO_60_DAYS;

  /**
   * 
   * @var string $PAST_61_TO_90_DAYS
   * @access public
   */
  public $PAST_61_TO_90_DAYS;

  /**
   * 
   * @var string $PAST_91_TO_180_DAYS
   * @access public
   */
  public $PAST_91_TO_180_DAYS;

  /**
   * 
   * @var string $TOT_SRCH
   * @access public
   */
  public $TOT_SRCH;

  /**
   * 
   * @param string $PAST_24HRS
   * @param string $PAST_1_TO_2_DAYS
   * @param string $PAST_3_TO_7_DAYS
   * @param string $PAST_8_TO_14_DAYS
   * @param string $PAST_15_TO_30_DAYS
   * @param string $PAST_31_TO_60_DAYS
   * @param string $PAST_61_TO_90_DAYS
   * @param string $PAST_91_TO_180_DAYS
   * @param string $TOT_SRCH
   * @access public
   */
  public function __construct($PAST_24HRS, $PAST_1_TO_2_DAYS, $PAST_3_TO_7_DAYS, $PAST_8_TO_14_DAYS, $PAST_15_TO_30_DAYS, $PAST_31_TO_60_DAYS, $PAST_61_TO_90_DAYS, $PAST_91_TO_180_DAYS, $TOT_SRCH)
  {
    $this->PAST_24HRS = $PAST_24HRS;
    $this->PAST_1_TO_2_DAYS = $PAST_1_TO_2_DAYS;
    $this->PAST_3_TO_7_DAYS = $PAST_3_TO_7_DAYS;
    $this->PAST_8_TO_14_DAYS = $PAST_8_TO_14_DAYS;
    $this->PAST_15_TO_30_DAYS = $PAST_15_TO_30_DAYS;
    $this->PAST_31_TO_60_DAYS = $PAST_31_TO_60_DAYS;
    $this->PAST_61_TO_90_DAYS = $PAST_61_TO_90_DAYS;
    $this->PAST_91_TO_180_DAYS = $PAST_91_TO_180_DAYS;
    $this->TOT_SRCH = $TOT_SRCH;
  }

}
