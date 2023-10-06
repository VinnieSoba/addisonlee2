<?php

class LOOKUPRSCOMPANY
{

  /**
   * 
   * @var string $ADR_LINE
   * @access public
   */
  public $ADR_LINE;

  /**
   * 
   * @var string $BR_IND
   * @access public
   */
  public $BR_IND;

  /**
   * 
   * @var string $CONF_CD
   * @access public
   */
  public $CONF_CD;

  /**
   * 
   * @var string $CTRY_CD
   * @access public
   */
  public $CTRY_CD;

  /**
   * 
   * @var string $DSR
   * @access public
   */
  public $DSR;

  /**
   * 
   * @var string $DUNS_NBR
   * @access public
   */
  public $DUNS_NBR;

  /**
   * 
   * @var string $IN_DT_IND
   * @access public
   */
  public $IN_DT_IND;

  /**
   * 
   * @var string $MTCH_GRD
   * @access public
   */
  public $MTCH_GRD;

  /**
   * 
   * @var string $NME
   * @access public
   */
  public $NME;

  /**
   * 
   * @var string $NME_PCT_GRD
   * @access public
   */
  public $NME_PCT_GRD;

  /**
   * 
   * @var string $NON_POST_TOWN
   * @access public
   */
  public $NON_POST_TOWN;

  /**
   * 
   * @var string $NON_POST_TWN_PCT_GRD
   * @access public
   */
  public $NON_POST_TWN_PCT_GRD;

  /**
   * 
   * @var string $PRIM_GEO_AREA
   * @access public
   */
  public $PRIM_GEO_AREA;

  /**
   * 
   * @var string $POST_CODE
   * @access public
   */
  public $POST_CODE;

  /**
   * 
   * @var string $POST_TOWN
   * @access public
   */
  public $POST_TOWN;

  /**
   * 
   * @var string $PO_BOX_PCT_GRD
   * @access public
   */
  public $PO_BOX_PCT_GRD;

  /**
   * 
   * @var string $PRIM_GEO_AREA_NBR_PCT_GRD
   * @access public
   */
  public $PRIM_GEO_AREA_NBR_PCT_GRD;

  /**
   * 
   * @var string $PROB_OF_ACCR
   * @access public
   */
  public $PROB_OF_ACCR;

  /**
   * 
   * @var string $STR_NBR_PCT_GRD
   * @access public
   */
  public $STR_NBR_PCT_GRD;

  /**
   * 
   * @var string $STR_NME_PCT_GRD
   * @access public
   */
  public $STR_NME_PCT_GRD;

  /**
   * 
   * @var string $SBRI_UMTC_AGN
   * @access public
   */
  public $SBRI_UMTC_AGN;

  /**
   * 
   * @var string $TLCM_NBR
   * @access public
   */
  public $TLCM_NBR;

  /**
   * 
   * @var string $TLCM_PCT_GRD
   * @access public
   */
  public $TLCM_PCT_GRD;

  /**
   * 
   * @var string $TRDG_STYL
   * @access public
   */
  public $TRDG_STYL;

  /**
   * 
   * @var MTCH_BASS $MTCH_BASS
   * @access public
   */
  public $MTCH_BASS;

  /**
   * 
   * @param string $ADR_LINE
   * @param string $BR_IND
   * @param string $CONF_CD
   * @param string $CTRY_CD
   * @param string $DSR
   * @param string $DUNS_NBR
   * @param string $IN_DT_IND
   * @param string $MTCH_GRD
   * @param string $NME
   * @param string $NME_PCT_GRD
   * @param string $NON_POST_TOWN
   * @param string $NON_POST_TWN_PCT_GRD
   * @param string $PRIM_GEO_AREA
   * @param string $POST_CODE
   * @param string $POST_TOWN
   * @param string $PO_BOX_PCT_GRD
   * @param string $PRIM_GEO_AREA_NBR_PCT_GRD
   * @param string $PROB_OF_ACCR
   * @param string $STR_NBR_PCT_GRD
   * @param string $STR_NME_PCT_GRD
   * @param string $SBRI_UMTC_AGN
   * @param string $TLCM_NBR
   * @param string $TLCM_PCT_GRD
   * @param string $TRDG_STYL
   * @param MTCH_BASS $MTCH_BASS
   * @access public
   */
  public function __construct($ADR_LINE, $BR_IND, $CONF_CD, $CTRY_CD, $DSR, $DUNS_NBR, $IN_DT_IND, $MTCH_GRD, $NME, $NME_PCT_GRD, $NON_POST_TOWN, $NON_POST_TWN_PCT_GRD, $PRIM_GEO_AREA, $POST_CODE, $POST_TOWN, $PO_BOX_PCT_GRD, $PRIM_GEO_AREA_NBR_PCT_GRD, $PROB_OF_ACCR, $STR_NBR_PCT_GRD, $STR_NME_PCT_GRD, $SBRI_UMTC_AGN, $TLCM_NBR, $TLCM_PCT_GRD, $TRDG_STYL, $MTCH_BASS)
  {
    $this->ADR_LINE = $ADR_LINE;
    $this->BR_IND = $BR_IND;
    $this->CONF_CD = $CONF_CD;
    $this->CTRY_CD = $CTRY_CD;
    $this->DSR = $DSR;
    $this->DUNS_NBR = $DUNS_NBR;
    $this->IN_DT_IND = $IN_DT_IND;
    $this->MTCH_GRD = $MTCH_GRD;
    $this->NME = $NME;
    $this->NME_PCT_GRD = $NME_PCT_GRD;
    $this->NON_POST_TOWN = $NON_POST_TOWN;
    $this->NON_POST_TWN_PCT_GRD = $NON_POST_TWN_PCT_GRD;
    $this->PRIM_GEO_AREA = $PRIM_GEO_AREA;
    $this->POST_CODE = $POST_CODE;
    $this->POST_TOWN = $POST_TOWN;
    $this->PO_BOX_PCT_GRD = $PO_BOX_PCT_GRD;
    $this->PRIM_GEO_AREA_NBR_PCT_GRD = $PRIM_GEO_AREA_NBR_PCT_GRD;
    $this->PROB_OF_ACCR = $PROB_OF_ACCR;
    $this->STR_NBR_PCT_GRD = $STR_NBR_PCT_GRD;
    $this->STR_NME_PCT_GRD = $STR_NME_PCT_GRD;
    $this->SBRI_UMTC_AGN = $SBRI_UMTC_AGN;
    $this->TLCM_NBR = $TLCM_NBR;
    $this->TLCM_PCT_GRD = $TLCM_PCT_GRD;
    $this->TRDG_STYL = $TRDG_STYL;
    $this->MTCH_BASS = $MTCH_BASS;
  }

}
