<?php

class DATA_DPTH_DTL
{

  /**
   * 
   * @var string $DATA_DPTH_INDC
   * @access public
   */
  public $DATA_DPTH_INDC;

  /**
   * 
   * @var array $ASMT_TXT
   * @access public
   */
  public $ASMT_TXT;

  /**
   * 
   * @param string $DATA_DPTH_INDC
   * @param array $ASMT_TXT
   * @access public
   */
  public function __construct($DATA_DPTH_INDC, $ASMT_TXT)
  {
    $this->DATA_DPTH_INDC = $DATA_DPTH_INDC;
    $this->ASMT_TXT = $ASMT_TXT;
  }

}
