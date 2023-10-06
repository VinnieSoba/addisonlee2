<?php

class RPT
{

  /**
   * 
   * @var string $ENQ_DUNS
   * @access public
   */
  public $ENQ_DUNS;

  /**
   * 
   * @var string $PROD
   * @access public
   */
  public $PROD;

  /**
   * 
   * @var string $DUNS_NBR
   * @access public
   */
  public $DUNS_NBR;

  /**
   * 
   * @var string $PRIM_NME
   * @access public
   */
  public $PRIM_NME;

  /**
   * 
   * @var array $TRDG_STYL
   * @access public
   */
  public $TRDG_STYL;

  /**
   * 
   * @var array $ADR_LINE
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
   * @var string $SCDY_GEO_AREA
   * @access public
   */
  public $SCDY_GEO_AREA;

  /**
   * 
   * @var string $POST_CODE
   * @access public
   */
  public $POST_CODE;

  /**
   * 
   * @var string $TLCM_NBR
   * @access public
   */
  public $TLCM_NBR;

  /**
   * 
   * @var string $BUS_REGN_NBR
   * @access public
   */
  public $BUS_REGN_NBR;

  /**
   * 
   * @var string $BUS_REGN_NBR_TYPE_CD
   * @access public
   */
  public $BUS_REGN_NBR_TYPE_CD;

  /**
   * 
   * @var string $CTRY_CD
   * @access public
   */
  public $CTRY_CD;

  /**
   * 
   * @var string $PRIM_SIC_TYPE_CD
   * @access public
   */
  public $PRIM_SIC_TYPE_CD;

  /**
   * 
   * @var string $PRIM_SIC
   * @access public
   */
  public $PRIM_SIC;

  /**
   * 
   * @var string $LCL_ACTV_CD_TYPE
   * @access public
   */
  public $LCL_ACTV_CD_TYPE;

  /**
   * 
   * @var string $LCL_ACTV_CD
   * @access public
   */
  public $LCL_ACTV_CD;

  /**
   * 
   * @var string $TOT_EMPL
   * @access public
   */
  public $TOT_EMPL;

  /**
   * 
   * @var string $TOT_EMPL_ESTD_IND
   * @access public
   */
  public $TOT_EMPL_ESTD_IND;

  /**
   * 
   * @var string $TOT_EMPL_TEXT
   * @access public
   */
  public $TOT_EMPL_TEXT;

  /**
   * 
   * @var string $STRT_YR
   * @access public
   */
  public $STRT_YR;

  /**
   * 
   * @var string $CURR_CNTL_YR
   * @access public
   */
  public $CURR_CNTL_YR;

  /**
   * 
   * @var string $INCN_YR
   * @access public
   */
  public $INCN_YR;

  /**
   * 
   * @var string $SCRD_FLNG_IND
   * @access public
   */
  public $SCRD_FLNG_IND;

  /**
   * 
   * @var string $CLM_IND
   * @access public
   */
  public $CLM_IND;

  /**
   * 
   * @var string $SUIT_JDGT_IND
   * @access public
   */
  public $SUIT_JDGT_IND;

  /**
   * 
   * @var string $OUT_BUS_IND
   * @access public
   */
  public $OUT_BUS_IND;

  /**
   * 
   * @var string $FINL_EMBT_IND
   * @access public
   */
  public $FINL_EMBT_IND;

  /**
   * 
   * @var string $SRVRTID
   * @access public
   */
  public $SRVRTID;

  /**
   * 
   * @var string $BR_IND
   * @access public
   */
  public $BR_IND;

  /**
   * 
   * @var string $LOCN_STAT
   * @access public
   */
  public $LOCN_STAT;

  /**
   * 
   * @var string $CUST_ENDR
   * @access public
   */
  public $CUST_ENDR;

  /**
   * 
   * @var string $CEO_NME
   * @access public
   */
  public $CEO_NME;

  /**
   * 
   * @var string $GBL_ULT_PNT_DUNS
   * @access public
   */
  public $GBL_ULT_PNT_DUNS;

  /**
   * 
   * @var string $TOT_PMT
   * @access public
   */
  public $TOT_PMT;

  /**
   * 
   * @var DCSN_INFO $DCSN_INFO
   * @access public
   */
  public $DCSN_INFO;

  /**
   * 
   * @var string $DNB_RATG
   * @access public
   */
  public $DNB_RATG;

  /**
   * 
   * @var string $PAYD_SCR
   * @access public
   */
  public $PAYD_SCR;

  /**
   * 
   * @var string $PAYD_NORM
   * @access public
   */
  public $PAYD_NORM;

  /**
   * 
   * @var string $PAYD_3_MO_AGO
   * @access public
   */
  public $PAYD_3_MO_AGO;

  /**
   * 
   * @var string $CRCY_CD
   * @access public
   */
  public $CRCY_CD;

  /**
   * 
   * @var string $HIGH_CR
   * @access public
   */
  public $HIGH_CR;

  /**
   * 
   * @var string $AVG_HIGH_CR
   * @access public
   */
  public $AVG_HIGH_CR;

  /**
   * 
   * @var string $MAX_CR_CRCY_CD
   * @access public
   */
  public $MAX_CR_CRCY_CD;

  /**
   * 
   * @var string $MAX_CR
   * @access public
   */
  public $MAX_CR;

  /**
   * 
   * @var string $ANN_SALE_VOL
   * @access public
   */
  public $ANN_SALE_VOL;

  /**
   * 
   * @var string $ANN_SALE_ESTD_IND
   * @access public
   */
  public $ANN_SALE_ESTD_IND;

  /**
   * 
   * @var string $ANN_SALE_CRCY_CD
   * @access public
   */
  public $ANN_SALE_CRCY_CD;

  /**
   * 
   * @var string $TANG_NET_WRTH
   * @access public
   */
  public $TANG_NET_WRTH;

  /**
   * 
   * @var string $TANG_NET_WRTH_CRCY_CD
   * @access public
   */
  public $TANG_NET_WRTH_CRCY_CD;

  /**
   * 
   * @var string $STMT_DT
   * @access public
   */
  public $STMT_DT;

  /**
   * 
   * @var string $STMT_CRCY_CD
   * @access public
   */
  public $STMT_CRCY_CD;

  /**
   * 
   * @var string $SLS
   * @access public
   */
  public $SLS;

  /**
   * 
   * @var string $NET_WRTH
   * @access public
   */
  public $NET_WRTH;

  /**
   * 
   * @var string $UBAL_IND
   * @access public
   */
  public $UBAL_IND;

  /**
   * 
   * @var string $OPRG_SPEC_EVNT_IND
   * @access public
   */
  public $OPRG_SPEC_EVNT_IND;

  /**
   * 
   * @var string $DSTR_IND
   * @access public
   */
  public $DSTR_IND;

  /**
   * 
   * @var string $LGL_FORM
   * @access public
   */
  public $LGL_FORM;

  /**
   * 
   * @var string $CRIM_IND
   * @access public
   */
  public $CRIM_IND;

  /**
   * 
   * @var string $HIST_IND
   * @access public
   */
  public $HIST_IND;

  /**
   * 
   * @var string $FINL_LGL_EVNT_IND
   * @access public
   */
  public $FINL_LGL_EVNT_IND;

  /**
   * 
   * @var DELQ_SCR_ENTR3 $DELQ_SCR_ENTR
   * @access public
   */
  public $DELQ_SCR_ENTR;

  /**
   * 
   * @var FAIL_SCR_ENTR3 $FAIL_SCR_ENTR
   * @access public
   */
  public $FAIL_SCR_ENTR;

  /**
   * 
   * @param string $ENQ_DUNS
   * @param string $PROD
   * @param string $DUNS_NBR
   * @param string $PRIM_NME
   * @param array $TRDG_STYL
   * @param array $ADR_LINE
   * @param string $POST_TOWN
   * @param string $PRIM_GEO_AREA
   * @param string $SCDY_GEO_AREA
   * @param string $POST_CODE
   * @param string $TLCM_NBR
   * @param string $BUS_REGN_NBR
   * @param string $BUS_REGN_NBR_TYPE_CD
   * @param string $CTRY_CD
   * @param string $PRIM_SIC_TYPE_CD
   * @param string $PRIM_SIC
   * @param string $LCL_ACTV_CD_TYPE
   * @param string $LCL_ACTV_CD
   * @param string $TOT_EMPL
   * @param string $TOT_EMPL_ESTD_IND
   * @param string $TOT_EMPL_TEXT
   * @param string $STRT_YR
   * @param string $CURR_CNTL_YR
   * @param string $INCN_YR
   * @param string $SCRD_FLNG_IND
   * @param string $CLM_IND
   * @param string $SUIT_JDGT_IND
   * @param string $OUT_BUS_IND
   * @param string $FINL_EMBT_IND
   * @param string $SRVRTID
   * @param string $BR_IND
   * @param string $LOCN_STAT
   * @param string $CUST_ENDR
   * @param string $CEO_NME
   * @param string $GBL_ULT_PNT_DUNS
   * @param string $TOT_PMT
   * @param DCSN_INFO $DCSN_INFO
   * @param string $DNB_RATG
   * @param string $PAYD_SCR
   * @param string $PAYD_NORM
   * @param string $PAYD_3_MO_AGO
   * @param string $CRCY_CD
   * @param string $HIGH_CR
   * @param string $AVG_HIGH_CR
   * @param string $MAX_CR_CRCY_CD
   * @param string $MAX_CR
   * @param string $ANN_SALE_VOL
   * @param string $ANN_SALE_ESTD_IND
   * @param string $ANN_SALE_CRCY_CD
   * @param string $TANG_NET_WRTH
   * @param string $TANG_NET_WRTH_CRCY_CD
   * @param string $STMT_DT
   * @param string $STMT_CRCY_CD
   * @param string $SLS
   * @param string $NET_WRTH
   * @param string $UBAL_IND
   * @param string $OPRG_SPEC_EVNT_IND
   * @param string $DSTR_IND
   * @param string $LGL_FORM
   * @param string $CRIM_IND
   * @param string $HIST_IND
   * @param string $FINL_LGL_EVNT_IND
   * @param DELQ_SCR_ENTR3 $DELQ_SCR_ENTR
   * @param FAIL_SCR_ENTR3 $FAIL_SCR_ENTR
   * @access public
   */
  public function __construct($ENQ_DUNS, $PROD, $DUNS_NBR, $PRIM_NME, $TRDG_STYL, $ADR_LINE, $POST_TOWN, $PRIM_GEO_AREA, $SCDY_GEO_AREA, $POST_CODE, $TLCM_NBR, $BUS_REGN_NBR, $BUS_REGN_NBR_TYPE_CD, $CTRY_CD, $PRIM_SIC_TYPE_CD, $PRIM_SIC, $LCL_ACTV_CD_TYPE, $LCL_ACTV_CD, $TOT_EMPL, $TOT_EMPL_ESTD_IND, $TOT_EMPL_TEXT, $STRT_YR, $CURR_CNTL_YR, $INCN_YR, $SCRD_FLNG_IND, $CLM_IND, $SUIT_JDGT_IND, $OUT_BUS_IND, $FINL_EMBT_IND, $SRVRTID, $BR_IND, $LOCN_STAT, $CUST_ENDR, $CEO_NME, $GBL_ULT_PNT_DUNS, $TOT_PMT, $DCSN_INFO, $DNB_RATG, $PAYD_SCR, $PAYD_NORM, $PAYD_3_MO_AGO, $CRCY_CD, $HIGH_CR, $AVG_HIGH_CR, $MAX_CR_CRCY_CD, $MAX_CR, $ANN_SALE_VOL, $ANN_SALE_ESTD_IND, $ANN_SALE_CRCY_CD, $TANG_NET_WRTH, $TANG_NET_WRTH_CRCY_CD, $STMT_DT, $STMT_CRCY_CD, $SLS, $NET_WRTH, $UBAL_IND, $OPRG_SPEC_EVNT_IND, $DSTR_IND, $LGL_FORM, $CRIM_IND, $HIST_IND, $FINL_LGL_EVNT_IND, $DELQ_SCR_ENTR, $FAIL_SCR_ENTR)
  {
    $this->ENQ_DUNS = $ENQ_DUNS;
    $this->PROD = $PROD;
    $this->DUNS_NBR = $DUNS_NBR;
    $this->PRIM_NME = $PRIM_NME;
    $this->TRDG_STYL = $TRDG_STYL;
    $this->ADR_LINE = $ADR_LINE;
    $this->POST_TOWN = $POST_TOWN;
    $this->PRIM_GEO_AREA = $PRIM_GEO_AREA;
    $this->SCDY_GEO_AREA = $SCDY_GEO_AREA;
    $this->POST_CODE = $POST_CODE;
    $this->TLCM_NBR = $TLCM_NBR;
    $this->BUS_REGN_NBR = $BUS_REGN_NBR;
    $this->BUS_REGN_NBR_TYPE_CD = $BUS_REGN_NBR_TYPE_CD;
    $this->CTRY_CD = $CTRY_CD;
    $this->PRIM_SIC_TYPE_CD = $PRIM_SIC_TYPE_CD;
    $this->PRIM_SIC = $PRIM_SIC;
    $this->LCL_ACTV_CD_TYPE = $LCL_ACTV_CD_TYPE;
    $this->LCL_ACTV_CD = $LCL_ACTV_CD;
    $this->TOT_EMPL = $TOT_EMPL;
    $this->TOT_EMPL_ESTD_IND = $TOT_EMPL_ESTD_IND;
    $this->TOT_EMPL_TEXT = $TOT_EMPL_TEXT;
    $this->STRT_YR = $STRT_YR;
    $this->CURR_CNTL_YR = $CURR_CNTL_YR;
    $this->INCN_YR = $INCN_YR;
    $this->SCRD_FLNG_IND = $SCRD_FLNG_IND;
    $this->CLM_IND = $CLM_IND;
    $this->SUIT_JDGT_IND = $SUIT_JDGT_IND;
    $this->OUT_BUS_IND = $OUT_BUS_IND;
    $this->FINL_EMBT_IND = $FINL_EMBT_IND;
    $this->SRVRTID = $SRVRTID;
    $this->BR_IND = $BR_IND;
    $this->LOCN_STAT = $LOCN_STAT;
    $this->CUST_ENDR = $CUST_ENDR;
    $this->CEO_NME = $CEO_NME;
    $this->GBL_ULT_PNT_DUNS = $GBL_ULT_PNT_DUNS;
    $this->TOT_PMT = $TOT_PMT;
    $this->DCSN_INFO = $DCSN_INFO;
    $this->DNB_RATG = $DNB_RATG;
    $this->PAYD_SCR = $PAYD_SCR;
    $this->PAYD_NORM = $PAYD_NORM;
    $this->PAYD_3_MO_AGO = $PAYD_3_MO_AGO;
    $this->CRCY_CD = $CRCY_CD;
    $this->HIGH_CR = $HIGH_CR;
    $this->AVG_HIGH_CR = $AVG_HIGH_CR;
    $this->MAX_CR_CRCY_CD = $MAX_CR_CRCY_CD;
    $this->MAX_CR = $MAX_CR;
    $this->ANN_SALE_VOL = $ANN_SALE_VOL;
    $this->ANN_SALE_ESTD_IND = $ANN_SALE_ESTD_IND;
    $this->ANN_SALE_CRCY_CD = $ANN_SALE_CRCY_CD;
    $this->TANG_NET_WRTH = $TANG_NET_WRTH;
    $this->TANG_NET_WRTH_CRCY_CD = $TANG_NET_WRTH_CRCY_CD;
    $this->STMT_DT = $STMT_DT;
    $this->STMT_CRCY_CD = $STMT_CRCY_CD;
    $this->SLS = $SLS;
    $this->NET_WRTH = $NET_WRTH;
    $this->UBAL_IND = $UBAL_IND;
    $this->OPRG_SPEC_EVNT_IND = $OPRG_SPEC_EVNT_IND;
    $this->DSTR_IND = $DSTR_IND;
    $this->LGL_FORM = $LGL_FORM;
    $this->CRIM_IND = $CRIM_IND;
    $this->HIST_IND = $HIST_IND;
    $this->FINL_LGL_EVNT_IND = $FINL_LGL_EVNT_IND;
    $this->DELQ_SCR_ENTR = $DELQ_SCR_ENTR;
    $this->FAIL_SCR_ENTR = $FAIL_SCR_ENTR;
  }

}
