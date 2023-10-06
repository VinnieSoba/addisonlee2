<?php

class TRD_DATA_AVLB_DTL2
{

  /**
   * 
   * @var string $TRD_DATA_AVIL_INDC
   * @access public
   */
  public $TRD_DATA_AVIL_INDC;

  /**
   * 
   * @var array $ASMT_TXT
   * @access public
   */
  public $ASMT_TXT;

  /**
   * 
   * @param string $TRD_DATA_AVIL_INDC
   * @param array $ASMT_TXT
   * @access public
   */
  public function __construct($TRD_DATA_AVIL_INDC, $ASMT_TXT)
  {
    $this->TRD_DATA_AVIL_INDC = $TRD_DATA_AVIL_INDC;
    $this->ASMT_TXT = $ASMT_TXT;
  }

}
