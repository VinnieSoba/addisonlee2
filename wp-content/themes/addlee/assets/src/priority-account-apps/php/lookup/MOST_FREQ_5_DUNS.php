<?php

class MOST_FREQ_5_DUNS
{

  /**
   * 
   * @var string $DUNS_NBR
   * @access public
   */
  public $DUNS_NBR;

  /**
   * 
   * @var string $CNT
   * @access public
   */
  public $CNT;

  /**
   * 
   * @param string $DUNS_NBR
   * @param string $CNT
   * @access public
   */
  public function __construct($DUNS_NBR, $CNT)
  {
    $this->DUNS_NBR = $DUNS_NBR;
    $this->CNT = $CNT;
  }

}
