<?php

class SCR_GRP5
{

  /**
   * 
   * @var string $NATL_PCTL
   * @access public
   */
  public $NATL_PCTL;

  /**
   * 
   * @var string $SCR_OVRD_CD
   * @access public
   */
  public $SCR_OVRD_CD;

  /**
   * 
   * @var string $INDS_PCTL
   * @access public
   */
  public $INDS_PCTL;

  /**
   * 
   * @var string $SCR_CMTY_CD
   * @access public
   */
  public $SCR_CMTY_CD;

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
   * @param string $NATL_PCTL
   * @param string $SCR_OVRD_CD
   * @param string $INDS_PCTL
   * @param string $SCR_CMTY_CD
   * @param string $DEFU_INDN
   * @param string $INDS_DEFU_INDN
   * @access public
   */
  public function __construct($NATL_PCTL, $SCR_OVRD_CD, $INDS_PCTL, $SCR_CMTY_CD, $DEFU_INDN, $INDS_DEFU_INDN)
  {
    $this->NATL_PCTL = $NATL_PCTL;
    $this->SCR_OVRD_CD = $SCR_OVRD_CD;
    $this->INDS_PCTL = $INDS_PCTL;
    $this->SCR_CMTY_CD = $SCR_CMTY_CD;
    $this->DEFU_INDN = $DEFU_INDN;
    $this->INDS_DEFU_INDN = $INDS_DEFU_INDN;
  }

}
