<?php

class MOST_FREQ_3_TLCM_NBR
{

  /**
   * 
   * @var string $TLCM_NBR
   * @access public
   */
  public $TLCM_NBR;

  /**
   * 
   * @var string $CNT
   * @access public
   */
  public $CNT;

  /**
   * 
   * @param string $TLCM_NBR
   * @param string $CNT
   * @access public
   */
  public function __construct($TLCM_NBR, $CNT)
  {
    $this->TLCM_NBR = $TLCM_NBR;
    $this->CNT = $CNT;
  }

}
