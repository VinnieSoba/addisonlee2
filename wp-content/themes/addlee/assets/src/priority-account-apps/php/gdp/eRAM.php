<?php

class eRAM
{

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
   * @var string $CTRY_CD
   * @access public
   */
  public $CTRY_CD;

  /**
   * 
   * @var string $TLCM_NBR
   * @access public
   */
  public $TLCM_NBR;

  /**
   * 
   * @var string $CURR_CNTL_YR
   * @access public
   */
  public $CURR_CNTL_YR;

  /**
   * 
   * @var string $TOT_EMPL
   * @access public
   */
  public $TOT_EMPL;

  /**
   * 
   * @var string $PRIM_SIC
   * @access public
   */
  public $PRIM_SIC;

  /**
   * 
   * @var string $LOCN_STAT
   * @access public
   */
  public $LOCN_STAT;

  /**
   * 
   * @var string $HQ_DUNS
   * @access public
   */
  public $HQ_DUNS;

  /**
   * 
   * @var string $HQ_NME
   * @access public
   */
  public $HQ_NME;

  /**
   * 
   * @var string $HQ_CTRY_CD
   * @access public
   */
  public $HQ_CTRY_CD;

  /**
   * 
   * @var string $LGL_FORM
   * @access public
   */
  public $LGL_FORM;

  /**
   * 
   * @var string $ADR_TENR_TYPE_CD
   * @access public
   */
  public $ADR_TENR_TYPE_CD;

  /**
   * 
   * @var string $CEO_NME
   * @access public
   */
  public $CEO_NME;

  /**
   * 
   * @var string $PAYD_SCR
   * @access public
   */
  public $PAYD_SCR;

  /**
   * 
   * @var string $PAYD_3_MO_AGO
   * @access public
   */
  public $PAYD_3_MO_AGO;

  /**
   * 
   * @var string $PAYD_NORM
   * @access public
   */
  public $PAYD_NORM;

  /**
   * 
   * @var string $AVG_HIGH_CR
   * @access public
   */
  public $AVG_HIGH_CR;

  /**
   * 
   * @var string $HIGH_CR
   * @access public
   */
  public $HIGH_CR;

  /**
   * 
   * @var string $TOT_PMT
   * @access public
   */
  public $TOT_PMT;

  /**
   * 
   * @var string $FINL_EMBT_IND
   * @access public
   */
  public $FINL_EMBT_IND;

  /**
   * 
   * @var string $OUT_BUS_IND
   * @access public
   */
  public $OUT_BUS_IND;

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
   * @var string $CASH_LIQ_ASET
   * @access public
   */
  public $CASH_LIQ_ASET;

  /**
   * 
   * @var string $ACT_REC
   * @access public
   */
  public $ACT_REC;

  /**
   * 
   * @var string $ACT_PAY
   * @access public
   */
  public $ACT_PAY;

  /**
   * 
   * @var string $STK
   * @access public
   */
  public $STK;

  /**
   * 
   * @var string $TOT_CURR_ASET
   * @access public
   */
  public $TOT_CURR_ASET;

  /**
   * 
   * @var string $TOT_CURR_LIAB
   * @access public
   */
  public $TOT_CURR_LIAB;

  /**
   * 
   * @var string $TOT_ASET
   * @access public
   */
  public $TOT_ASET;

  /**
   * 
   * @var string $TOT_LIAB
   * @access public
   */
  public $TOT_LIAB;

  /**
   * 
   * @var string $NET_WRTH
   * @access public
   */
  public $NET_WRTH;

  /**
   * 
   * @var string $ITNG_ASET
   * @access public
   */
  public $ITNG_ASET;

  /**
   * 
   * @var string $SLS
   * @access public
   */
  public $SLS;

  /**
   * 
   * @var string $NET_INCM
   * @access public
   */
  public $NET_INCM;

  /**
   * 
   * @var string $STMT_DT
   * @access public
   */
  public $STMT_DT;

  /**
   * 
   * @var string $CURR_RATO
   * @access public
   */
  public $CURR_RATO;

  /**
   * 
   * @var string $QK_RATO
   * @access public
   */
  public $QK_RATO;

  /**
   * 
   * @var string $IMPT_IND
   * @access public
   */
  public $IMPT_IND;

  /**
   * 
   * @var string $EXPT_IND
   * @access public
   */
  public $EXPT_IND;

  /**
   * 
   * @var string $DNB_RATG
   * @access public
   */
  public $DNB_RATG;

  /**
   * 
   * @var string $PNT_DUNS
   * @access public
   */
  public $PNT_DUNS;

  /**
   * 
   * @var string $PNT_CTRY_CD
   * @access public
   */
  public $PNT_CTRY_CD;

  /**
   * 
   * @var string $DOM_ULT_PNT_DUNS
   * @access public
   */
  public $DOM_ULT_PNT_DUNS;

  /**
   * 
   * @var string $DOM_ULT_PNT_NME
   * @access public
   */
  public $DOM_ULT_PNT_NME;

  /**
   * 
   * @var string $DOM_ULT_CTRY_CD
   * @access public
   */
  public $DOM_ULT_CTRY_CD;

  /**
   * 
   * @var string $GBL_ULT_PNT_DUNS
   * @access public
   */
  public $GBL_ULT_PNT_DUNS;

  /**
   * 
   * @var string $GBL_ULT_CTRY_CD
   * @access public
   */
  public $GBL_ULT_CTRY_CD;

  /**
   * 
   * @var string $GBL_ULT_PNT_NME
   * @access public
   */
  public $GBL_ULT_PNT_NME;

  /**
   * 
   * @var string $BUS_STRU
   * @access public
   */
  public $BUS_STRU;

  /**
   * 
   * @var string $CRCY_CD
   * @access public
   */
  public $CRCY_CD;

  /**
   * 
   * @var string $STMT_CRCY_CD
   * @access public
   */
  public $STMT_CRCY_CD;

  /**
   * 
   * @var array $ANN_SALE_VOL
   * @access public
   */
  public $ANN_SALE_VOL;

  /**
   * 
   * @var string $BUS_REGN_NBR
   * @access public
   */
  public $BUS_REGN_NBR;

  /**
   * 
   * @var string $CLM_IND
   * @access public
   */
  public $CLM_IND;

  /**
   * 
   * @var string $INCN_YR
   * @access public
   */
  public $INCN_YR;

  /**
   * 
   * @var string $LCL_ACTV_CD
   * @access public
   */
  public $LCL_ACTV_CD;

  /**
   * 
   * @var string $LCL_ACTV_CD_TYPE
   * @access public
   */
  public $LCL_ACTV_CD_TYPE;

  /**
   * 
   * @var string $MAX_CR
   * @access public
   */
  public $MAX_CR;

  /**
   * 
   * @var string $PNT_NME
   * @access public
   */
  public $PNT_NME;

  /**
   * 
   * @var string $PRIM_SIC_TYPE_CD
   * @access public
   */
  public $PRIM_SIC_TYPE_CD;

  /**
   * 
   * @var string $PRIN_NME
   * @access public
   */
  public $PRIN_NME;

  /**
   * 
   * @var string $STRT_YR
   * @access public
   */
  public $STRT_YR;

  /**
   * 
   * @var string $SUIT_JDGT_IND
   * @access public
   */
  public $SUIT_JDGT_IND;

  /**
   * 
   * @var array $TRDG_STYL
   * @access public
   */
  public $TRDG_STYL;

  /**
   * 
   * @var string $MAX_CR_CRCY_CD
   * @access public
   */
  public $MAX_CR_CRCY_CD;

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
   * @var string $ANN_SALE_CRCY_CD
   * @access public
   */
  public $ANN_SALE_CRCY_CD;

  /**
   * 
   * @var string $ESTD_IND
   * @access public
   */
  public $ESTD_IND;

  /**
   * 
   * @var string $FCST_IND
   * @access public
   */
  public $FCST_IND;

  /**
   * 
   * @var string $FISC_IND
   * @access public
   */
  public $FISC_IND;

  /**
   * 
   * @var string $FNAL_IND
   * @access public
   */
  public $FNAL_IND;

  /**
   * 
   * @var string $SGND_IND
   * @access public
   */
  public $SGND_IND;

  /**
   * 
   * @var string $REST_IND
   * @access public
   */
  public $REST_IND;

  /**
   * 
   * @var string $UBAL_IND
   * @access public
   */
  public $UBAL_IND;

  /**
   * 
   * @var string $AUDT_QLFN_IND
   * @access public
   */
  public $AUDT_QLFN_IND;

  /**
   * 
   * @var string $OPEN_IND
   * @access public
   */
  public $OPEN_IND;

  /**
   * 
   * @var string $PRO_FRMA_IND
   * @access public
   */
  public $PRO_FRMA_IND;

  /**
   * 
   * @var string $TRL_BAL_IND
   * @access public
   */
  public $TRL_BAL_IND;

  /**
   * 
   * @var string $AUDT_IND
   * @access public
   */
  public $AUDT_IND;

  /**
   * 
   * @var string $CONS_IND
   * @access public
   */
  public $CONS_IND;

  /**
   * 
   * @var FAIL_SCR_ENTR2 $FAIL_SCR_ENTR
   * @access public
   */
  public $FAIL_SCR_ENTR;

  /**
   * 
   * @var DELQ_SCR_ENTR2 $DELQ_SCR_ENTR
   * @access public
   */
  public $DELQ_SCR_ENTR;

  /**
   * 
   * @var DNB_VBLTY_RATG_ENTR2 $DNB_VBLTY_RATG_ENTR
   * @access public
   */
  public $DNB_VBLTY_RATG_ENTR;

  /**
   * 
   * @var SER_RAT_ENTR2 $SER_RAT_ENTR
   * @access public
   */
  public $SER_RAT_ENTR;

  /**
   * 
   * @param string $DUNS_NBR
   * @param string $PRIM_NME
   * @param array $ADR_LINE
   * @param string $POST_TOWN
   * @param string $PRIM_GEO_AREA
   * @param string $SCDY_GEO_AREA
   * @param string $POST_CODE
   * @param string $CTRY_CD
   * @param string $TLCM_NBR
   * @param string $CURR_CNTL_YR
   * @param string $TOT_EMPL
   * @param string $PRIM_SIC
   * @param string $LOCN_STAT
   * @param string $HQ_DUNS
   * @param string $HQ_NME
   * @param string $HQ_CTRY_CD
   * @param string $LGL_FORM
   * @param string $ADR_TENR_TYPE_CD
   * @param string $CEO_NME
   * @param string $PAYD_SCR
   * @param string $PAYD_3_MO_AGO
   * @param string $PAYD_NORM
   * @param string $AVG_HIGH_CR
   * @param string $HIGH_CR
   * @param string $TOT_PMT
   * @param string $FINL_EMBT_IND
   * @param string $OUT_BUS_IND
   * @param string $CRIM_IND
   * @param string $HIST_IND
   * @param string $CASH_LIQ_ASET
   * @param string $ACT_REC
   * @param string $ACT_PAY
   * @param string $STK
   * @param string $TOT_CURR_ASET
   * @param string $TOT_CURR_LIAB
   * @param string $TOT_ASET
   * @param string $TOT_LIAB
   * @param string $NET_WRTH
   * @param string $ITNG_ASET
   * @param string $SLS
   * @param string $NET_INCM
   * @param string $STMT_DT
   * @param string $CURR_RATO
   * @param string $QK_RATO
   * @param string $IMPT_IND
   * @param string $EXPT_IND
   * @param string $DNB_RATG
   * @param string $PNT_DUNS
   * @param string $PNT_CTRY_CD
   * @param string $DOM_ULT_PNT_DUNS
   * @param string $DOM_ULT_PNT_NME
   * @param string $DOM_ULT_CTRY_CD
   * @param string $GBL_ULT_PNT_DUNS
   * @param string $GBL_ULT_CTRY_CD
   * @param string $GBL_ULT_PNT_NME
   * @param string $BUS_STRU
   * @param string $CRCY_CD
   * @param string $STMT_CRCY_CD
   * @param array $ANN_SALE_VOL
   * @param string $BUS_REGN_NBR
   * @param string $CLM_IND
   * @param string $INCN_YR
   * @param string $LCL_ACTV_CD
   * @param string $LCL_ACTV_CD_TYPE
   * @param string $MAX_CR
   * @param string $PNT_NME
   * @param string $PRIM_SIC_TYPE_CD
   * @param string $PRIN_NME
   * @param string $STRT_YR
   * @param string $SUIT_JDGT_IND
   * @param array $TRDG_STYL
   * @param string $MAX_CR_CRCY_CD
   * @param string $TANG_NET_WRTH
   * @param string $TANG_NET_WRTH_CRCY_CD
   * @param string $ANN_SALE_CRCY_CD
   * @param string $ESTD_IND
   * @param string $FCST_IND
   * @param string $FISC_IND
   * @param string $FNAL_IND
   * @param string $SGND_IND
   * @param string $REST_IND
   * @param string $UBAL_IND
   * @param string $AUDT_QLFN_IND
   * @param string $OPEN_IND
   * @param string $PRO_FRMA_IND
   * @param string $TRL_BAL_IND
   * @param string $AUDT_IND
   * @param string $CONS_IND
   * @param FAIL_SCR_ENTR2 $FAIL_SCR_ENTR
   * @param DELQ_SCR_ENTR2 $DELQ_SCR_ENTR
   * @param DNB_VBLTY_RATG_ENTR2 $DNB_VBLTY_RATG_ENTR
   * @param SER_RAT_ENTR2 $SER_RAT_ENTR
   * @access public
   */
  public function __construct($DUNS_NBR, $PRIM_NME, $ADR_LINE, $POST_TOWN, $PRIM_GEO_AREA, $SCDY_GEO_AREA, $POST_CODE, $CTRY_CD, $TLCM_NBR, $CURR_CNTL_YR, $TOT_EMPL, $PRIM_SIC, $LOCN_STAT, $HQ_DUNS, $HQ_NME, $HQ_CTRY_CD, $LGL_FORM, $ADR_TENR_TYPE_CD, $CEO_NME, $PAYD_SCR, $PAYD_3_MO_AGO, $PAYD_NORM, $AVG_HIGH_CR, $HIGH_CR, $TOT_PMT, $FINL_EMBT_IND, $OUT_BUS_IND, $CRIM_IND, $HIST_IND, $CASH_LIQ_ASET, $ACT_REC, $ACT_PAY, $STK, $TOT_CURR_ASET, $TOT_CURR_LIAB, $TOT_ASET, $TOT_LIAB, $NET_WRTH, $ITNG_ASET, $SLS, $NET_INCM, $STMT_DT, $CURR_RATO, $QK_RATO, $IMPT_IND, $EXPT_IND, $DNB_RATG, $PNT_DUNS, $PNT_CTRY_CD, $DOM_ULT_PNT_DUNS, $DOM_ULT_PNT_NME, $DOM_ULT_CTRY_CD, $GBL_ULT_PNT_DUNS, $GBL_ULT_CTRY_CD, $GBL_ULT_PNT_NME, $BUS_STRU, $CRCY_CD, $STMT_CRCY_CD, $ANN_SALE_VOL, $BUS_REGN_NBR, $CLM_IND, $INCN_YR, $LCL_ACTV_CD, $LCL_ACTV_CD_TYPE, $MAX_CR, $PNT_NME, $PRIM_SIC_TYPE_CD, $PRIN_NME, $STRT_YR, $SUIT_JDGT_IND, $TRDG_STYL, $MAX_CR_CRCY_CD, $TANG_NET_WRTH, $TANG_NET_WRTH_CRCY_CD, $ANN_SALE_CRCY_CD, $ESTD_IND, $FCST_IND, $FISC_IND, $FNAL_IND, $SGND_IND, $REST_IND, $UBAL_IND, $AUDT_QLFN_IND, $OPEN_IND, $PRO_FRMA_IND, $TRL_BAL_IND, $AUDT_IND, $CONS_IND, $FAIL_SCR_ENTR, $DELQ_SCR_ENTR, $DNB_VBLTY_RATG_ENTR, $SER_RAT_ENTR)
  {
    $this->DUNS_NBR = $DUNS_NBR;
    $this->PRIM_NME = $PRIM_NME;
    $this->ADR_LINE = $ADR_LINE;
    $this->POST_TOWN = $POST_TOWN;
    $this->PRIM_GEO_AREA = $PRIM_GEO_AREA;
    $this->SCDY_GEO_AREA = $SCDY_GEO_AREA;
    $this->POST_CODE = $POST_CODE;
    $this->CTRY_CD = $CTRY_CD;
    $this->TLCM_NBR = $TLCM_NBR;
    $this->CURR_CNTL_YR = $CURR_CNTL_YR;
    $this->TOT_EMPL = $TOT_EMPL;
    $this->PRIM_SIC = $PRIM_SIC;
    $this->LOCN_STAT = $LOCN_STAT;
    $this->HQ_DUNS = $HQ_DUNS;
    $this->HQ_NME = $HQ_NME;
    $this->HQ_CTRY_CD = $HQ_CTRY_CD;
    $this->LGL_FORM = $LGL_FORM;
    $this->ADR_TENR_TYPE_CD = $ADR_TENR_TYPE_CD;
    $this->CEO_NME = $CEO_NME;
    $this->PAYD_SCR = $PAYD_SCR;
    $this->PAYD_3_MO_AGO = $PAYD_3_MO_AGO;
    $this->PAYD_NORM = $PAYD_NORM;
    $this->AVG_HIGH_CR = $AVG_HIGH_CR;
    $this->HIGH_CR = $HIGH_CR;
    $this->TOT_PMT = $TOT_PMT;
    $this->FINL_EMBT_IND = $FINL_EMBT_IND;
    $this->OUT_BUS_IND = $OUT_BUS_IND;
    $this->CRIM_IND = $CRIM_IND;
    $this->HIST_IND = $HIST_IND;
    $this->CASH_LIQ_ASET = $CASH_LIQ_ASET;
    $this->ACT_REC = $ACT_REC;
    $this->ACT_PAY = $ACT_PAY;
    $this->STK = $STK;
    $this->TOT_CURR_ASET = $TOT_CURR_ASET;
    $this->TOT_CURR_LIAB = $TOT_CURR_LIAB;
    $this->TOT_ASET = $TOT_ASET;
    $this->TOT_LIAB = $TOT_LIAB;
    $this->NET_WRTH = $NET_WRTH;
    $this->ITNG_ASET = $ITNG_ASET;
    $this->SLS = $SLS;
    $this->NET_INCM = $NET_INCM;
    $this->STMT_DT = $STMT_DT;
    $this->CURR_RATO = $CURR_RATO;
    $this->QK_RATO = $QK_RATO;
    $this->IMPT_IND = $IMPT_IND;
    $this->EXPT_IND = $EXPT_IND;
    $this->DNB_RATG = $DNB_RATG;
    $this->PNT_DUNS = $PNT_DUNS;
    $this->PNT_CTRY_CD = $PNT_CTRY_CD;
    $this->DOM_ULT_PNT_DUNS = $DOM_ULT_PNT_DUNS;
    $this->DOM_ULT_PNT_NME = $DOM_ULT_PNT_NME;
    $this->DOM_ULT_CTRY_CD = $DOM_ULT_CTRY_CD;
    $this->GBL_ULT_PNT_DUNS = $GBL_ULT_PNT_DUNS;
    $this->GBL_ULT_CTRY_CD = $GBL_ULT_CTRY_CD;
    $this->GBL_ULT_PNT_NME = $GBL_ULT_PNT_NME;
    $this->BUS_STRU = $BUS_STRU;
    $this->CRCY_CD = $CRCY_CD;
    $this->STMT_CRCY_CD = $STMT_CRCY_CD;
    $this->ANN_SALE_VOL = $ANN_SALE_VOL;
    $this->BUS_REGN_NBR = $BUS_REGN_NBR;
    $this->CLM_IND = $CLM_IND;
    $this->INCN_YR = $INCN_YR;
    $this->LCL_ACTV_CD = $LCL_ACTV_CD;
    $this->LCL_ACTV_CD_TYPE = $LCL_ACTV_CD_TYPE;
    $this->MAX_CR = $MAX_CR;
    $this->PNT_NME = $PNT_NME;
    $this->PRIM_SIC_TYPE_CD = $PRIM_SIC_TYPE_CD;
    $this->PRIN_NME = $PRIN_NME;
    $this->STRT_YR = $STRT_YR;
    $this->SUIT_JDGT_IND = $SUIT_JDGT_IND;
    $this->TRDG_STYL = $TRDG_STYL;
    $this->MAX_CR_CRCY_CD = $MAX_CR_CRCY_CD;
    $this->TANG_NET_WRTH = $TANG_NET_WRTH;
    $this->TANG_NET_WRTH_CRCY_CD = $TANG_NET_WRTH_CRCY_CD;
    $this->ANN_SALE_CRCY_CD = $ANN_SALE_CRCY_CD;
    $this->ESTD_IND = $ESTD_IND;
    $this->FCST_IND = $FCST_IND;
    $this->FISC_IND = $FISC_IND;
    $this->FNAL_IND = $FNAL_IND;
    $this->SGND_IND = $SGND_IND;
    $this->REST_IND = $REST_IND;
    $this->UBAL_IND = $UBAL_IND;
    $this->AUDT_QLFN_IND = $AUDT_QLFN_IND;
    $this->OPEN_IND = $OPEN_IND;
    $this->PRO_FRMA_IND = $PRO_FRMA_IND;
    $this->TRL_BAL_IND = $TRL_BAL_IND;
    $this->AUDT_IND = $AUDT_IND;
    $this->CONS_IND = $CONS_IND;
    $this->FAIL_SCR_ENTR = $FAIL_SCR_ENTR;
    $this->DELQ_SCR_ENTR = $DELQ_SCR_ENTR;
    $this->DNB_VBLTY_RATG_ENTR = $DNB_VBLTY_RATG_ENTR;
    $this->SER_RAT_ENTR = $SER_RAT_ENTR;
  }

}
