<?php

class FDSLOOKUPRS
{

  /**
   * 
   * @var string $ALGM_ID
   * @access public
   */
  public $ALGM_ID;

  /**
   * 
   * @var string $AGN_NBR
   * @access public
   */
  public $AGN_NBR;

  /**
   * 
   * @var string $NME
   * @access public
   */
  public $NME;

  /**
   * 
   * @var string $ADR_LINE
   * @access public
   */
  public $ADR_LINE;

  /**
   * 
   * @var string $POST_TOWN
   * @access public
   */
  public $POST_TOWN;

  /**
   * 
   * @var string $PRIM_GEO_AREA
   * @access public
   */
  public $PRIM_GEO_AREA;

  /**
   * 
   * @var string $TLCM_NBR
   * @access public
   */
  public $TLCM_NBR;

  /**
   * 
   * @var string $CTRY_CD
   * @access public
   */
  public $CTRY_CD;

  /**
   * 
   * @var string $POST_CODE
   * @access public
   */
  public $POST_CODE;

  /**
   * 
   * @var SCR_RSLT_INTERPRET $SCR_RSLT_INTERPRET
   * @access public
   */
  public $SCR_RSLT_INTERPRET;

  /**
   * 
   * @var SRCH_PFL_CHRT $SRCH_PFL_CHRT
   * @access public
   */
  public $SRCH_PFL_CHRT;

  /**
   * 
   * @var LAST_SRCHS $LAST_SRCHS
   * @access public
   */
  public $LAST_SRCHS;

  /**
   * 
   * @var INFO_CONSISTENCY $INFO_CONSISTENCY
   * @access public
   */
  public $INFO_CONSISTENCY;

  /**
   * 
   * @var FR_IND $FR_IND
   * @access public
   */
  public $FR_IND;

  /**
   * 
   * @param string $ALGM_ID
   * @param string $AGN_NBR
   * @param string $NME
   * @param string $ADR_LINE
   * @param string $POST_TOWN
   * @param string $PRIM_GEO_AREA
   * @param string $TLCM_NBR
   * @param string $CTRY_CD
   * @param string $POST_CODE
   * @param SCR_RSLT_INTERPRET $SCR_RSLT_INTERPRET
   * @param SRCH_PFL_CHRT $SRCH_PFL_CHRT
   * @param LAST_SRCHS $LAST_SRCHS
   * @param INFO_CONSISTENCY $INFO_CONSISTENCY
   * @param FR_IND $FR_IND
   * @access public
   */
  public function __construct($ALGM_ID, $AGN_NBR, $NME, $ADR_LINE, $POST_TOWN, $PRIM_GEO_AREA, $TLCM_NBR, $CTRY_CD, $POST_CODE, $SCR_RSLT_INTERPRET, $SRCH_PFL_CHRT, $LAST_SRCHS, $INFO_CONSISTENCY, $FR_IND)
  {
    $this->ALGM_ID = $ALGM_ID;
    $this->AGN_NBR = $AGN_NBR;
    $this->NME = $NME;
    $this->ADR_LINE = $ADR_LINE;
    $this->POST_TOWN = $POST_TOWN;
    $this->PRIM_GEO_AREA = $PRIM_GEO_AREA;
    $this->TLCM_NBR = $TLCM_NBR;
    $this->CTRY_CD = $CTRY_CD;
    $this->POST_CODE = $POST_CODE;
    $this->SCR_RSLT_INTERPRET = $SCR_RSLT_INTERPRET;
    $this->SRCH_PFL_CHRT = $SRCH_PFL_CHRT;
    $this->LAST_SRCHS = $LAST_SRCHS;
    $this->INFO_CONSISTENCY = $INFO_CONSISTENCY;
    $this->FR_IND = $FR_IND;
  }

}
