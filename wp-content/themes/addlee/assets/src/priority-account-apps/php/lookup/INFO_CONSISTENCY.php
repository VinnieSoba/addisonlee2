<?php

class INFO_CONSISTENCY
{

  /**
   * 
   * @var MOST_FREQ_1_TLCM_NBR $MOST_FREQ_1_TLCM_NBR
   * @access public
   */
  public $MOST_FREQ_1_TLCM_NBR;

  /**
   * 
   * @var MOST_FREQ_2_TLCM_NBR $MOST_FREQ_2_TLCM_NBR
   * @access public
   */
  public $MOST_FREQ_2_TLCM_NBR;

  /**
   * 
   * @var MOST_FREQ_3_TLCM_NBR $MOST_FREQ_3_TLCM_NBR
   * @access public
   */
  public $MOST_FREQ_3_TLCM_NBR;

  /**
   * 
   * @var MOST_FREQ_4_TLCM_NBR $MOST_FREQ_4_TLCM_NBR
   * @access public
   */
  public $MOST_FREQ_4_TLCM_NBR;

  /**
   * 
   * @var MOST_FREQ_5_TLCM_NBR $MOST_FREQ_5_TLCM_NBR
   * @access public
   */
  public $MOST_FREQ_5_TLCM_NBR;

  /**
   * 
   * @var string $CNT_NO_TLCM_NBR
   * @access public
   */
  public $CNT_NO_TLCM_NBR;

  /**
   * 
   * @var string $CNT_OTHER_TLCM_NBR
   * @access public
   */
  public $CNT_OTHER_TLCM_NBR;

  /**
   * 
   * @var MOST_FREQ_1_DUNS $MOST_FREQ_1_DUNS
   * @access public
   */
  public $MOST_FREQ_1_DUNS;

  /**
   * 
   * @var MOST_FREQ_2_DUNS $MOST_FREQ_2_DUNS
   * @access public
   */
  public $MOST_FREQ_2_DUNS;

  /**
   * 
   * @var MOST_FREQ_3_DUNS $MOST_FREQ_3_DUNS
   * @access public
   */
  public $MOST_FREQ_3_DUNS;

  /**
   * 
   * @var MOST_FREQ_4_DUNS $MOST_FREQ_4_DUNS
   * @access public
   */
  public $MOST_FREQ_4_DUNS;

  /**
   * 
   * @var MOST_FREQ_5_DUNS $MOST_FREQ_5_DUNS
   * @access public
   */
  public $MOST_FREQ_5_DUNS;

  /**
   * 
   * @var string $CNT_NO_DUNS
   * @access public
   */
  public $CNT_NO_DUNS;

  /**
   * 
   * @var string $CNT_OTHER_DUNS
   * @access public
   */
  public $CNT_OTHER_DUNS;

  /**
   * 
   * @var string $HIST_SRCH_FR_RSK
   * @access public
   */
  public $HIST_SRCH_FR_RSK;

  /**
   * 
   * @param MOST_FREQ_1_TLCM_NBR $MOST_FREQ_1_TLCM_NBR
   * @param MOST_FREQ_2_TLCM_NBR $MOST_FREQ_2_TLCM_NBR
   * @param MOST_FREQ_3_TLCM_NBR $MOST_FREQ_3_TLCM_NBR
   * @param MOST_FREQ_4_TLCM_NBR $MOST_FREQ_4_TLCM_NBR
   * @param MOST_FREQ_5_TLCM_NBR $MOST_FREQ_5_TLCM_NBR
   * @param string $CNT_NO_TLCM_NBR
   * @param string $CNT_OTHER_TLCM_NBR
   * @param MOST_FREQ_1_DUNS $MOST_FREQ_1_DUNS
   * @param MOST_FREQ_2_DUNS $MOST_FREQ_2_DUNS
   * @param MOST_FREQ_3_DUNS $MOST_FREQ_3_DUNS
   * @param MOST_FREQ_4_DUNS $MOST_FREQ_4_DUNS
   * @param MOST_FREQ_5_DUNS $MOST_FREQ_5_DUNS
   * @param string $CNT_NO_DUNS
   * @param string $CNT_OTHER_DUNS
   * @param string $HIST_SRCH_FR_RSK
   * @access public
   */
  public function __construct($MOST_FREQ_1_TLCM_NBR, $MOST_FREQ_2_TLCM_NBR, $MOST_FREQ_3_TLCM_NBR, $MOST_FREQ_4_TLCM_NBR, $MOST_FREQ_5_TLCM_NBR, $CNT_NO_TLCM_NBR, $CNT_OTHER_TLCM_NBR, $MOST_FREQ_1_DUNS, $MOST_FREQ_2_DUNS, $MOST_FREQ_3_DUNS, $MOST_FREQ_4_DUNS, $MOST_FREQ_5_DUNS, $CNT_NO_DUNS, $CNT_OTHER_DUNS, $HIST_SRCH_FR_RSK)
  {
    $this->MOST_FREQ_1_TLCM_NBR = $MOST_FREQ_1_TLCM_NBR;
    $this->MOST_FREQ_2_TLCM_NBR = $MOST_FREQ_2_TLCM_NBR;
    $this->MOST_FREQ_3_TLCM_NBR = $MOST_FREQ_3_TLCM_NBR;
    $this->MOST_FREQ_4_TLCM_NBR = $MOST_FREQ_4_TLCM_NBR;
    $this->MOST_FREQ_5_TLCM_NBR = $MOST_FREQ_5_TLCM_NBR;
    $this->CNT_NO_TLCM_NBR = $CNT_NO_TLCM_NBR;
    $this->CNT_OTHER_TLCM_NBR = $CNT_OTHER_TLCM_NBR;
    $this->MOST_FREQ_1_DUNS = $MOST_FREQ_1_DUNS;
    $this->MOST_FREQ_2_DUNS = $MOST_FREQ_2_DUNS;
    $this->MOST_FREQ_3_DUNS = $MOST_FREQ_3_DUNS;
    $this->MOST_FREQ_4_DUNS = $MOST_FREQ_4_DUNS;
    $this->MOST_FREQ_5_DUNS = $MOST_FREQ_5_DUNS;
    $this->CNT_NO_DUNS = $CNT_NO_DUNS;
    $this->CNT_OTHER_DUNS = $CNT_OTHER_DUNS;
    $this->HIST_SRCH_FR_RSK = $HIST_SRCH_FR_RSK;
  }

}
