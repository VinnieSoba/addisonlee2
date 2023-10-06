<?php

class SCR_RSLT_INTERPRET
{

  /**
   * 
   * @var string $REQS_DATE
   * @access public
   */
  public $REQS_DATE;

  /**
   * 
   * @var string $REQS_TIME
   * @access public
   */
  public $REQS_TIME;

  /**
   * 
   * @var string $FR_SCR
   * @access public
   */
  public $FR_SCR;

  /**
   * 
   * @var string $FR_SCR_CLAS
   * @access public
   */
  public $FR_SCR_CLAS;

  /**
   * 
   * @var string $SCR_CLAS_LBL
   * @access public
   */
  public $SCR_CLAS_LBL;

  /**
   * 
   * @var string $SCR_CLAS_DESC
   * @access public
   */
  public $SCR_CLAS_DESC;

  /**
   * 
   * @var string $SCR_CLAS_PCTG_POPN
   * @access public
   */
  public $SCR_CLAS_PCTG_POPN;

  /**
   * 
   * @var string $SCR_CLAS_PCTG_FRD
   * @access public
   */
  public $SCR_CLAS_PCTG_FRD;

  /**
   * 
   * @var string $SCR_MULT_FRD_RSK
   * @access public
   */
  public $SCR_MULT_FRD_RSK;

  /**
   * 
   * @var string $REAS_1_CD
   * @access public
   */
  public $REAS_1_CD;

  /**
   * 
   * @var string $REAS_1_CD_DESC
   * @access public
   */
  public $REAS_1_CD_DESC;

  /**
   * 
   * @var string $REAS_2_CD
   * @access public
   */
  public $REAS_2_CD;

  /**
   * 
   * @var string $REAS_2_CD_DESC
   * @access public
   */
  public $REAS_2_CD_DESC;

  /**
   * 
   * @var string $REAS_3_CD
   * @access public
   */
  public $REAS_3_CD;

  /**
   * 
   * @var string $REAS_3_CD_DESC
   * @access public
   */
  public $REAS_3_CD_DESC;

  /**
   * 
   * @var string $REAS_4_CD
   * @access public
   */
  public $REAS_4_CD;

  /**
   * 
   * @var string $REAS_4_CD_DESC
   * @access public
   */
  public $REAS_4_CD_DESC;

  /**
   * 
   * @var string $MTCH_CNT
   * @access public
   */
  public $MTCH_CNT;

  /**
   * 
   * @param string $REQS_DATE
   * @param string $REQS_TIME
   * @param string $FR_SCR
   * @param string $FR_SCR_CLAS
   * @param string $SCR_CLAS_LBL
   * @param string $SCR_CLAS_DESC
   * @param string $SCR_CLAS_PCTG_POPN
   * @param string $SCR_CLAS_PCTG_FRD
   * @param string $SCR_MULT_FRD_RSK
   * @param string $REAS_1_CD
   * @param string $REAS_1_CD_DESC
   * @param string $REAS_2_CD
   * @param string $REAS_2_CD_DESC
   * @param string $REAS_3_CD
   * @param string $REAS_3_CD_DESC
   * @param string $REAS_4_CD
   * @param string $REAS_4_CD_DESC
   * @param string $MTCH_CNT
   * @access public
   */
  public function __construct($REQS_DATE, $REQS_TIME, $FR_SCR, $FR_SCR_CLAS, $SCR_CLAS_LBL, $SCR_CLAS_DESC, $SCR_CLAS_PCTG_POPN, $SCR_CLAS_PCTG_FRD, $SCR_MULT_FRD_RSK, $REAS_1_CD, $REAS_1_CD_DESC, $REAS_2_CD, $REAS_2_CD_DESC, $REAS_3_CD, $REAS_3_CD_DESC, $REAS_4_CD, $REAS_4_CD_DESC, $MTCH_CNT)
  {
    $this->REQS_DATE = $REQS_DATE;
    $this->REQS_TIME = $REQS_TIME;
    $this->FR_SCR = $FR_SCR;
    $this->FR_SCR_CLAS = $FR_SCR_CLAS;
    $this->SCR_CLAS_LBL = $SCR_CLAS_LBL;
    $this->SCR_CLAS_DESC = $SCR_CLAS_DESC;
    $this->SCR_CLAS_PCTG_POPN = $SCR_CLAS_PCTG_POPN;
    $this->SCR_CLAS_PCTG_FRD = $SCR_CLAS_PCTG_FRD;
    $this->SCR_MULT_FRD_RSK = $SCR_MULT_FRD_RSK;
    $this->REAS_1_CD = $REAS_1_CD;
    $this->REAS_1_CD_DESC = $REAS_1_CD_DESC;
    $this->REAS_2_CD = $REAS_2_CD;
    $this->REAS_2_CD_DESC = $REAS_2_CD_DESC;
    $this->REAS_3_CD = $REAS_3_CD;
    $this->REAS_3_CD_DESC = $REAS_3_CD_DESC;
    $this->REAS_4_CD = $REAS_4_CD;
    $this->REAS_4_CD_DESC = $REAS_4_CD_DESC;
    $this->MTCH_CNT = $MTCH_CNT;
  }

}
