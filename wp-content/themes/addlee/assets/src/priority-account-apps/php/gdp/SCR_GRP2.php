<?php

class SCR_GRP2
{

  /**
   * 
   * @var string $ASMT_DT
   * @access public
   */
  public $ASMT_DT;

  /**
   * 
   * @var string $DEFU_INDN
   * @access public
   */
  public $DEFU_INDN;

  /**
   * 
   * @var string $INDS_DEFU_INDN
   * @access public
   */
  public $INDS_DEFU_INDN;

  /**
   * 
   * @var string $INDS_NORM
   * @access public
   */
  public $INDS_NORM;

  /**
   * 
   * @var string $INDS_PCTL
   * @access public
   */
  public $INDS_PCTL;

  /**
   * 
   * @var string $NATL_PCTL
   * @access public
   */
  public $NATL_PCTL;

  /**
   * 
   * @var string $ALGM_ID
   * @access public
   */
  public $ALGM_ID;

  /**
   * 
   * @var string $SCR
   * @access public
   */
  public $SCR;

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
   * @var string $SCR_OVRD_CD
   * @access public
   */
  public $SCR_OVRD_CD;

  /**
   * 
   * @var string $SCR_SLOW_PMT_PCTG
   * @access public
   */
  public $SCR_SLOW_PMT_PCTG;

  /**
   * 
   * @param string $ASMT_DT
   * @param string $DEFU_INDN
   * @param string $INDS_DEFU_INDN
   * @param string $INDS_NORM
   * @param string $INDS_PCTL
   * @param string $NATL_PCTL
   * @param string $ALGM_ID
   * @param string $SCR
   * @param string $SCR_AGE
   * @param string $SCR_CLAS
   * @param array $SCR_CMTY_CD
   * @param string $SCR_OVRD_CD
   * @param string $SCR_SLOW_PMT_PCTG
   * @access public
   */
  public function __construct($ASMT_DT, $DEFU_INDN, $INDS_DEFU_INDN, $INDS_NORM, $INDS_PCTL, $NATL_PCTL, $ALGM_ID, $SCR, $SCR_AGE, $SCR_CLAS, $SCR_CMTY_CD, $SCR_OVRD_CD, $SCR_SLOW_PMT_PCTG)
  {
    $this->ASMT_DT = $ASMT_DT;
    $this->DEFU_INDN = $DEFU_INDN;
    $this->INDS_DEFU_INDN = $INDS_DEFU_INDN;
    $this->INDS_NORM = $INDS_NORM;
    $this->INDS_PCTL = $INDS_PCTL;
    $this->NATL_PCTL = $NATL_PCTL;
    $this->ALGM_ID = $ALGM_ID;
    $this->SCR = $SCR;
    $this->SCR_AGE = $SCR_AGE;
    $this->SCR_CLAS = $SCR_CLAS;
    $this->SCR_CMTY_CD = $SCR_CMTY_CD;
    $this->SCR_OVRD_CD = $SCR_OVRD_CD;
    $this->SCR_SLOW_PMT_PCTG = $SCR_SLOW_PMT_PCTG;
  }

}
