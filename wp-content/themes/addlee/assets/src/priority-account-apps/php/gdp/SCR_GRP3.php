<?php

class SCR_GRP3
{

  /**
   * 
   * @var string $ASMT_DT
   * @access public
   */
  public $ASMT_DT;

  /**
   * 
   * @var string $RAW_SCR
   * @access public
   */
  public $RAW_SCR;

  /**
   * 
   * @var string $SCR_AGE
   * @access public
   */
  public $SCR_AGE;

  /**
   * 
   * @var string $SCR_CLAS
   * @access public
   */
  public $SCR_CLAS;

  /**
   * 
   * @var array $SCR_CMTY_CD
   * @access public
   */
  public $SCR_CMTY_CD;

  /**
   * 
   * @param string $ASMT_DT
   * @param string $RAW_SCR
   * @param string $SCR_AGE
   * @param string $SCR_CLAS
   * @param array $SCR_CMTY_CD
   * @access public
   */
  public function __construct($ASMT_DT, $RAW_SCR, $SCR_AGE, $SCR_CLAS, $SCR_CMTY_CD)
  {
    $this->ASMT_DT = $ASMT_DT;
    $this->RAW_SCR = $RAW_SCR;
    $this->SCR_AGE = $SCR_AGE;
    $this->SCR_CLAS = $SCR_CLAS;
    $this->SCR_CMTY_CD = $SCR_CMTY_CD;
  }

}
