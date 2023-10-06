<?php

class LAST_SRCHS
{

  /**
   * 
   * @var LAST_1_SRCH $LAST_1_SRCH
   * @access public
   */
  public $LAST_1_SRCH;

  /**
   * 
   * @var LAST_2_SRCH $LAST_2_SRCH
   * @access public
   */
  public $LAST_2_SRCH;

  /**
   * 
   * @var LAST_3_SRCH $LAST_3_SRCH
   * @access public
   */
  public $LAST_3_SRCH;

  /**
   * 
   * @var LAST_4_SRCH $LAST_4_SRCH
   * @access public
   */
  public $LAST_4_SRCH;

  /**
   * 
   * @var LAST_5_SRCH $LAST_5_SRCH
   * @access public
   */
  public $LAST_5_SRCH;

  /**
   * 
   * @param LAST_1_SRCH $LAST_1_SRCH
   * @param LAST_2_SRCH $LAST_2_SRCH
   * @param LAST_3_SRCH $LAST_3_SRCH
   * @param LAST_4_SRCH $LAST_4_SRCH
   * @param LAST_5_SRCH $LAST_5_SRCH
   * @access public
   */
  public function __construct($LAST_1_SRCH, $LAST_2_SRCH, $LAST_3_SRCH, $LAST_4_SRCH, $LAST_5_SRCH)
  {
    $this->LAST_1_SRCH = $LAST_1_SRCH;
    $this->LAST_2_SRCH = $LAST_2_SRCH;
    $this->LAST_3_SRCH = $LAST_3_SRCH;
    $this->LAST_4_SRCH = $LAST_4_SRCH;
    $this->LAST_5_SRCH = $LAST_5_SRCH;
  }

}
