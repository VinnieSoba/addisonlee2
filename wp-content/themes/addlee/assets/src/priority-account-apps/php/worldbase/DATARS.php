<?php

class DATARS
{

  /**
   * 
   * @var string $SRVRTID
   * @access public
   */
  public $SRVRTID;

  /**
   * 
   * @var string $GDA_ID
   * @access public
   */
  public $GDA_ID;

  /**
   * 
   * @var string $CACHE_IND
   * @access public
   */
  public $CACHE_IND;

  /**
   * 
   * @var string $PRD_DT
   * @access public
   */
  public $PRD_DT;

  /**
   * 
   * @var string $CTRY_CD
   * @access public
   */
  public $CTRY_CD;

  /**
   * 
   * @var string $MKT_DUNS_NBR
   * @access public
   */
  public $MKT_DUNS_NBR;

  /**
   * 
   * @var string $MKT_PRIM_NME
   * @access public
   */
  public $MKT_PRIM_NME;

  /**
   * 
   * @var array $MKT_TRDG_STYL
   * @access public
   */
  public $MKT_TRDG_STYL;

  /**
   * 
   * @var string $MKT_FRMR_PRIM_NME
   * @access public
   */
  public $MKT_FRMR_PRIM_NME;

  /**
   * 
   * @var string $MKT_FRMR_DUNS_NBR
   * @access public
   */
  public $MKT_FRMR_DUNS_NBR;

  /**
   * 
   * @var string $MKT_REGD_ADR_IND
   * @access public
   */
  public $MKT_REGD_ADR_IND;

  /**
   * 
   * @var array $MKT_PHYS_ADR_LINE
   * @access public
   */
  public $MKT_PHYS_ADR_LINE;

  /**
   * 
   * @var string $MKT_PHYS_POST_TOWN_TEXT
   * @access public
   */
  public $MKT_PHYS_POST_TOWN_TEXT;

  /**
   * 
   * @var string $MKT_PHYS_GEO_AREA_TEXT
   * @access public
   */
  public $MKT_PHYS_GEO_AREA_TEXT;

  /**
   * 
   * @var string $MKT_PHYS_CTRY_TEXT
   * @access public
   */
  public $MKT_PHYS_CTRY_TEXT;

  /**
   * 
   * @var string $MKT_PHYS_CITY_CD
   * @access public
   */
  public $MKT_PHYS_CITY_CD;

  /**
   * 
   * @var string $MKT_PHYS_CNTY_CD
   * @access public
   */
  public $MKT_PHYS_CNTY_CD;

  /**
   * 
   * @var string $MKT_PHYS_GEO_AREA_SHRT_CD
   * @access public
   */
  public $MKT_PHYS_GEO_AREA_SHRT_CD;

  /**
   * 
   * @var string $MKT_PHYS_GEO_AREA_CD
   * @access public
   */
  public $MKT_PHYS_GEO_AREA_CD;

  /**
   * 
   * @var string $MKT_PHYS_CTRY_CD
   * @access public
   */
  public $MKT_PHYS_CTRY_CD;

  /**
   * 
   * @var string $MKT_PHYS_POST_TOWN_CD
   * @access public
   */
  public $MKT_PHYS_POST_TOWN_CD;

  /**
   * 
   * @var string $MKT_PHYS_CONT_CD
   * @access public
   */
  public $MKT_PHYS_CONT_CD;

  /**
   * 
   * @var string $MKT_BUS_REGN_NBR_TYPE_CD
   * @access public
   */
  public $MKT_BUS_REGN_NBR_TYPE_CD;

  /**
   * 
   * @var string $MKT_BUS_REGN_NBR_TYPE
   * @access public
   */
  public $MKT_BUS_REGN_NBR_TYPE;

  /**
   * 
   * @var string $MKT_PHON_ACS_CD
   * @access public
   */
  public $MKT_PHON_ACS_CD;

  /**
   * 
   * @var string $MKT_PHON_NBR
   * @access public
   */
  public $MKT_PHON_NBR;

  /**
   * 
   * @var string $MKT_TELX_NBR
   * @access public
   */
  public $MKT_TELX_NBR;

  /**
   * 
   * @var string $MKT_FAX_NBR
   * @access public
   */
  public $MKT_FAX_NBR;

  /**
   * 
   * @var string $MKT_CTRL_IND
   * @access public
   */
  public $MKT_CTRL_IND;

  /**
   * 
   * @var string $MKT_MKTB_CD
   * @access public
   */
  public $MKT_MKTB_CD;

  /**
   * 
   * @var string $MKT_MLG_ADR_LINE
   * @access public
   */
  public $MKT_MLG_ADR_LINE;

  /**
   * 
   * @var string $MKT_MLG_POST_TOWN_TEXT
   * @access public
   */
  public $MKT_MLG_POST_TOWN_TEXT;

  /**
   * 
   * @var string $MKT_MLG_CNTY_TEXT
   * @access public
   */
  public $MKT_MLG_CNTY_TEXT;

  /**
   * 
   * @var string $MKT_MLG_GEO_AREA_TEXT
   * @access public
   */
  public $MKT_MLG_GEO_AREA_TEXT;

  /**
   * 
   * @var string $MKT_MLG_CTRY_TEXT
   * @access public
   */
  public $MKT_MLG_CTRY_TEXT;

  /**
   * 
   * @var string $MKT_MLG_CITY_CD
   * @access public
   */
  public $MKT_MLG_CITY_CD;

  /**
   * 
   * @var string $MKT_MLG_CNTY_CD
   * @access public
   */
  public $MKT_MLG_CNTY_CD;

  /**
   * 
   * @var string $MKT_MLG_GEO_AREA_SHRT_CD
   * @access public
   */
  public $MKT_MLG_GEO_AREA_SHRT_CD;

  /**
   * 
   * @var string $MKT_MLG_GEO_AREA_CD
   * @access public
   */
  public $MKT_MLG_GEO_AREA_CD;

  /**
   * 
   * @var string $MKT_MLG_CTRY_CD
   * @access public
   */
  public $MKT_MLG_CTRY_CD;

  /**
   * 
   * @var string $MKT_MLG_POST_TOWN_CD
   * @access public
   */
  public $MKT_MLG_POST_TOWN_CD;

  /**
   * 
   * @var string $MKT_MLG_CONT_CD
   * @access public
   */
  public $MKT_MLG_CONT_CD;

  /**
   * 
   * @var string $MKT_CEO_NME
   * @access public
   */
  public $MKT_CEO_NME;

  /**
   * 
   * @var string $MKT_CEO_TITL
   * @access public
   */
  public $MKT_CEO_TITL;

  /**
   * 
   * @var string $MKT_EXEC_NME
   * @access public
   */
  public $MKT_EXEC_NME;

  /**
   * 
   * @var string $MKT_LOB
   * @access public
   */
  public $MKT_LOB;

  /**
   * 
   * @var array $MKT_SIC8
   * @access public
   */
  public $MKT_SIC8;

  /**
   * 
   * @var string $MKT_LCL_SIC
   * @access public
   */
  public $MKT_LCL_SIC;

  /**
   * 
   * @var string $MKT_ACTV_IND
   * @access public
   */
  public $MKT_ACTV_IND;

  /**
   * 
   * @var string $MKT_STRT_YR
   * @access public
   */
  public $MKT_STRT_YR;

  /**
   * 
   * @var string $MKT_ANN_SALE_VOL
   * @access public
   */
  public $MKT_ANN_SALE_VOL;

  /**
   * 
   * @var string $MKT_ANN_SALE_IND
   * @access public
   */
  public $MKT_ANN_SALE_IND;

  /**
   * 
   * @var string $MKT_ANN_SALE_VOL_US
   * @access public
   */
  public $MKT_ANN_SALE_VOL_US;

  /**
   * 
   * @var string $MKT_NET_INCM
   * @access public
   */
  public $MKT_NET_INCM;

  /**
   * 
   * @var string $MKT_NET_INCM_US
   * @access public
   */
  public $MKT_NET_INCM_US;

  /**
   * 
   * @var string $MKT_NET_WRTH
   * @access public
   */
  public $MKT_NET_WRTH;

  /**
   * 
   * @var string $MKT_NET_WRTH_US
   * @access public
   */
  public $MKT_NET_WRTH_US;

  /**
   * 
   * @var string $MKT_CRCY_CD
   * @access public
   */
  public $MKT_CRCY_CD;

  /**
   * 
   * @var string $MKT_EMPL_AT_PHYS_ADR
   * @access public
   */
  public $MKT_EMPL_AT_PHYS_ADR;

  /**
   * 
   * @var string $MKT_EMPL_AT_PHYS_ADR_IND
   * @access public
   */
  public $MKT_EMPL_AT_PHYS_ADR_IND;

  /**
   * 
   * @var string $MKT_TOT_EMPL
   * @access public
   */
  public $MKT_TOT_EMPL;

  /**
   * 
   * @var string $MKT_TOT_EMPL_IND
   * @access public
   */
  public $MKT_TOT_EMPL_IND;

  /**
   * 
   * @var string $MKT_INCL_PRIN_IND
   * @access public
   */
  public $MKT_INCL_PRIN_IND;

  /**
   * 
   * @var string $MKT_IMPT_EXPT_IND
   * @access public
   */
  public $MKT_IMPT_EXPT_IND;

  /**
   * 
   * @var string $MKT_LGL_FORM
   * @access public
   */
  public $MKT_LGL_FORM;

  /**
   * 
   * @var string $MKT_OUT_BUS_IND
   * @access public
   */
  public $MKT_OUT_BUS_IND;

  /**
   * 
   * @var string $MKT_BUS_STRUC_CD
   * @access public
   */
  public $MKT_BUS_STRUC_CD;

  /**
   * 
   * @var string $MKT_SUBS_CD
   * @access public
   */
  public $MKT_SUBS_CD;

  /**
   * 
   * @var string $MKT_NIX_IND
   * @access public
   */
  public $MKT_NIX_IND;

  /**
   * 
   * @var string $MKT_STMT_DT
   * @access public
   */
  public $MKT_STMT_DT;

  /**
   * 
   * @var string $MKT_RPT_DT
   * @access public
   */
  public $MKT_RPT_DT;

  /**
   * 
   * @var string $MKT_HDQ_PNT_DUNS
   * @access public
   */
  public $MKT_HDQ_PNT_DUNS;

  /**
   * 
   * @var string $MKT_HDQ_PNT_PRIM_NME
   * @access public
   */
  public $MKT_HDQ_PNT_PRIM_NME;

  /**
   * 
   * @var string $MKT_HDQ_PNT_ADR_LINE
   * @access public
   */
  public $MKT_HDQ_PNT_ADR_LINE;

  /**
   * 
   * @var string $MKT_HDQ_PNT_POST_TOWN_TEXT
   * @access public
   */
  public $MKT_HDQ_PNT_POST_TOWN_TEXT;

  /**
   * 
   * @var string $MKT_HDQ_PNT_GEO_AREA_TEXT
   * @access public
   */
  public $MKT_HDQ_PNT_GEO_AREA_TEXT;

  /**
   * 
   * @var string $MKT_HDQ_PNT_CTRY_TEXT
   * @access public
   */
  public $MKT_HDQ_PNT_CTRY_TEXT;

  /**
   * 
   * @var string $MKT_HDQ_PNT_CITY_CD
   * @access public
   */
  public $MKT_HDQ_PNT_CITY_CD;

  /**
   * 
   * @var string $MKT_HDQ_PNT_CNTY_CD
   * @access public
   */
  public $MKT_HDQ_PNT_CNTY_CD;

  /**
   * 
   * @var string $MKT_HDQ_PNT_GEO_AREA_CD
   * @access public
   */
  public $MKT_HDQ_PNT_GEO_AREA_CD;

  /**
   * 
   * @var string $MKT_HDQ_PNT_CTRY_CD
   * @access public
   */
  public $MKT_HDQ_PNT_CTRY_CD;

  /**
   * 
   * @var string $MKT_HDQ_PNT_POST_TOWN_CD
   * @access public
   */
  public $MKT_HDQ_PNT_POST_TOWN_CD;

  /**
   * 
   * @var string $MKT_HDQ_PNT_CONT_CD
   * @access public
   */
  public $MKT_HDQ_PNT_CONT_CD;

  /**
   * 
   * @var string $MKT_DOM_ULT_PNT_DUNS
   * @access public
   */
  public $MKT_DOM_ULT_PNT_DUNS;

  /**
   * 
   * @var string $MKT_DOM_ULT_PRIM_NME
   * @access public
   */
  public $MKT_DOM_ULT_PRIM_NME;

  /**
   * 
   * @var string $MKT_DOM_ULT_ADR_LINE
   * @access public
   */
  public $MKT_DOM_ULT_ADR_LINE;

  /**
   * 
   * @var string $MKT_DOM_ULT_POST_TOWN_TEXT
   * @access public
   */
  public $MKT_DOM_ULT_POST_TOWN_TEXT;

  /**
   * 
   * @var string $MKT_DOM_ULT_GEO_AREA_TEXT
   * @access public
   */
  public $MKT_DOM_ULT_GEO_AREA_TEXT;

  /**
   * 
   * @var string $MKT_DOM_ULT_CITY_CD
   * @access public
   */
  public $MKT_DOM_ULT_CITY_CD;

  /**
   * 
   * @var string $MKT_DOM_ULT_CNTY_CD
   * @access public
   */
  public $MKT_DOM_ULT_CNTY_CD;

  /**
   * 
   * @var string $MKT_DOM_ULT_GEO_AREA_CD
   * @access public
   */
  public $MKT_DOM_ULT_GEO_AREA_CD;

  /**
   * 
   * @var string $MKT_DOM_ULT_POST_TOWN_CD
   * @access public
   */
  public $MKT_DOM_ULT_POST_TOWN_CD;

  /**
   * 
   * @var string $MKT_GLBL_ULT_PNT_IND
   * @access public
   */
  public $MKT_GLBL_ULT_PNT_IND;

  /**
   * 
   * @var string $MKT_GLBL_ULT_PNT_DUNS
   * @access public
   */
  public $MKT_GLBL_ULT_PNT_DUNS;

  /**
   * 
   * @var string $MKT_GBL_ULT_PRIM_NME
   * @access public
   */
  public $MKT_GBL_ULT_PRIM_NME;

  /**
   * 
   * @var string $MKT_GBL_ULT_ADR_LINE
   * @access public
   */
  public $MKT_GBL_ULT_ADR_LINE;

  /**
   * 
   * @var string $MKT_GBL_ULT_POST_TOWN_TEXT
   * @access public
   */
  public $MKT_GBL_ULT_POST_TOWN_TEXT;

  /**
   * 
   * @var string $MKT_GBL_ULT_GEO_AREA_TEXT
   * @access public
   */
  public $MKT_GBL_ULT_GEO_AREA_TEXT;

  /**
   * 
   * @var string $MKT_GBL_ULT_CTRY_TEXT
   * @access public
   */
  public $MKT_GBL_ULT_CTRY_TEXT;

  /**
   * 
   * @var string $MKT_GBL_ULT_CITY_CD
   * @access public
   */
  public $MKT_GBL_ULT_CITY_CD;

  /**
   * 
   * @var string $MKT_GBL_ULT_CNTY_CD
   * @access public
   */
  public $MKT_GBL_ULT_CNTY_CD;

  /**
   * 
   * @var string $MKT_GBL_ULT_GEO_AREA_CD
   * @access public
   */
  public $MKT_GBL_ULT_GEO_AREA_CD;

  /**
   * 
   * @var string $MKT_GLBL_ULT_CTRY_CD
   * @access public
   */
  public $MKT_GLBL_ULT_CTRY_CD;

  /**
   * 
   * @var string $MKT_GBL_ULT_POST_TOWN_CD
   * @access public
   */
  public $MKT_GBL_ULT_POST_TOWN_CD;

  /**
   * 
   * @var string $MKT_GBL_ULT_CONT_CD
   * @access public
   */
  public $MKT_GBL_ULT_CONT_CD;

  /**
   * 
   * @var string $MKT_GBL_FAM_MBR_NBR
   * @access public
   */
  public $MKT_GBL_FAM_MBR_NBR;

  /**
   * 
   * @var string $MKT_DIAS_CD
   * @access public
   */
  public $MKT_DIAS_CD;

  /**
   * 
   * @var string $MKT_HIER_CD
   * @access public
   */
  public $MKT_HIER_CD;

  /**
   * 
   * @var string $MKT_FAM_UPD_DT
   * @access public
   */
  public $MKT_FAM_UPD_DT;

  /**
   * 
   * @param string $SRVRTID
   * @param string $GDA_ID
   * @param string $CACHE_IND
   * @param string $PRD_DT
   * @param string $CTRY_CD
   * @param string $MKT_DUNS_NBR
   * @param string $MKT_PRIM_NME
   * @param array $MKT_TRDG_STYL
   * @param string $MKT_FRMR_PRIM_NME
   * @param string $MKT_FRMR_DUNS_NBR
   * @param string $MKT_REGD_ADR_IND
   * @param array $MKT_PHYS_ADR_LINE
   * @param string $MKT_PHYS_POST_TOWN_TEXT
   * @param string $MKT_PHYS_GEO_AREA_TEXT
   * @param string $MKT_PHYS_CTRY_TEXT
   * @param string $MKT_PHYS_CITY_CD
   * @param string $MKT_PHYS_CNTY_CD
   * @param string $MKT_PHYS_GEO_AREA_SHRT_CD
   * @param string $MKT_PHYS_GEO_AREA_CD
   * @param string $MKT_PHYS_CTRY_CD
   * @param string $MKT_PHYS_POST_TOWN_CD
   * @param string $MKT_PHYS_CONT_CD
   * @param string $MKT_BUS_REGN_NBR_TYPE_CD
   * @param string $MKT_BUS_REGN_NBR_TYPE
   * @param string $MKT_PHON_ACS_CD
   * @param string $MKT_PHON_NBR
   * @param string $MKT_TELX_NBR
   * @param string $MKT_FAX_NBR
   * @param string $MKT_CTRL_IND
   * @param string $MKT_MKTB_CD
   * @param string $MKT_MLG_ADR_LINE
   * @param string $MKT_MLG_POST_TOWN_TEXT
   * @param string $MKT_MLG_CNTY_TEXT
   * @param string $MKT_MLG_GEO_AREA_TEXT
   * @param string $MKT_MLG_CTRY_TEXT
   * @param string $MKT_MLG_CITY_CD
   * @param string $MKT_MLG_CNTY_CD
   * @param string $MKT_MLG_GEO_AREA_SHRT_CD
   * @param string $MKT_MLG_GEO_AREA_CD
   * @param string $MKT_MLG_CTRY_CD
   * @param string $MKT_MLG_POST_TOWN_CD
   * @param string $MKT_MLG_CONT_CD
   * @param string $MKT_CEO_NME
   * @param string $MKT_CEO_TITL
   * @param string $MKT_EXEC_NME
   * @param string $MKT_LOB
   * @param array $MKT_SIC8
   * @param string $MKT_LCL_SIC
   * @param string $MKT_ACTV_IND
   * @param string $MKT_STRT_YR
   * @param string $MKT_ANN_SALE_VOL
   * @param string $MKT_ANN_SALE_IND
   * @param string $MKT_ANN_SALE_VOL_US
   * @param string $MKT_NET_INCM
   * @param string $MKT_NET_INCM_US
   * @param string $MKT_NET_WRTH
   * @param string $MKT_NET_WRTH_US
   * @param string $MKT_CRCY_CD
   * @param string $MKT_EMPL_AT_PHYS_ADR
   * @param string $MKT_EMPL_AT_PHYS_ADR_IND
   * @param string $MKT_TOT_EMPL
   * @param string $MKT_TOT_EMPL_IND
   * @param string $MKT_INCL_PRIN_IND
   * @param string $MKT_IMPT_EXPT_IND
   * @param string $MKT_LGL_FORM
   * @param string $MKT_OUT_BUS_IND
   * @param string $MKT_BUS_STRUC_CD
   * @param string $MKT_SUBS_CD
   * @param string $MKT_NIX_IND
   * @param string $MKT_STMT_DT
   * @param string $MKT_RPT_DT
   * @param string $MKT_HDQ_PNT_DUNS
   * @param string $MKT_HDQ_PNT_PRIM_NME
   * @param string $MKT_HDQ_PNT_ADR_LINE
   * @param string $MKT_HDQ_PNT_POST_TOWN_TEXT
   * @param string $MKT_HDQ_PNT_GEO_AREA_TEXT
   * @param string $MKT_HDQ_PNT_CTRY_TEXT
   * @param string $MKT_HDQ_PNT_CITY_CD
   * @param string $MKT_HDQ_PNT_CNTY_CD
   * @param string $MKT_HDQ_PNT_GEO_AREA_CD
   * @param string $MKT_HDQ_PNT_CTRY_CD
   * @param string $MKT_HDQ_PNT_POST_TOWN_CD
   * @param string $MKT_HDQ_PNT_CONT_CD
   * @param string $MKT_DOM_ULT_PNT_DUNS
   * @param string $MKT_DOM_ULT_PRIM_NME
   * @param string $MKT_DOM_ULT_ADR_LINE
   * @param string $MKT_DOM_ULT_POST_TOWN_TEXT
   * @param string $MKT_DOM_ULT_GEO_AREA_TEXT
   * @param string $MKT_DOM_ULT_CITY_CD
   * @param string $MKT_DOM_ULT_CNTY_CD
   * @param string $MKT_DOM_ULT_GEO_AREA_CD
   * @param string $MKT_DOM_ULT_POST_TOWN_CD
   * @param string $MKT_GLBL_ULT_PNT_IND
   * @param string $MKT_GLBL_ULT_PNT_DUNS
   * @param string $MKT_GBL_ULT_PRIM_NME
   * @param string $MKT_GBL_ULT_ADR_LINE
   * @param string $MKT_GBL_ULT_POST_TOWN_TEXT
   * @param string $MKT_GBL_ULT_GEO_AREA_TEXT
   * @param string $MKT_GBL_ULT_CTRY_TEXT
   * @param string $MKT_GBL_ULT_CITY_CD
   * @param string $MKT_GBL_ULT_CNTY_CD
   * @param string $MKT_GBL_ULT_GEO_AREA_CD
   * @param string $MKT_GLBL_ULT_CTRY_CD
   * @param string $MKT_GBL_ULT_POST_TOWN_CD
   * @param string $MKT_GBL_ULT_CONT_CD
   * @param string $MKT_GBL_FAM_MBR_NBR
   * @param string $MKT_DIAS_CD
   * @param string $MKT_HIER_CD
   * @param string $MKT_FAM_UPD_DT
   * @access public
   */
  public function __construct($SRVRTID, $GDA_ID, $CACHE_IND, $PRD_DT, $CTRY_CD, $MKT_DUNS_NBR, $MKT_PRIM_NME, $MKT_TRDG_STYL, $MKT_FRMR_PRIM_NME, $MKT_FRMR_DUNS_NBR, $MKT_REGD_ADR_IND, $MKT_PHYS_ADR_LINE, $MKT_PHYS_POST_TOWN_TEXT, $MKT_PHYS_GEO_AREA_TEXT, $MKT_PHYS_CTRY_TEXT, $MKT_PHYS_CITY_CD, $MKT_PHYS_CNTY_CD, $MKT_PHYS_GEO_AREA_SHRT_CD, $MKT_PHYS_GEO_AREA_CD, $MKT_PHYS_CTRY_CD, $MKT_PHYS_POST_TOWN_CD, $MKT_PHYS_CONT_CD, $MKT_BUS_REGN_NBR_TYPE_CD, $MKT_BUS_REGN_NBR_TYPE, $MKT_PHON_ACS_CD, $MKT_PHON_NBR, $MKT_TELX_NBR, $MKT_FAX_NBR, $MKT_CTRL_IND, $MKT_MKTB_CD, $MKT_MLG_ADR_LINE, $MKT_MLG_POST_TOWN_TEXT, $MKT_MLG_CNTY_TEXT, $MKT_MLG_GEO_AREA_TEXT, $MKT_MLG_CTRY_TEXT, $MKT_MLG_CITY_CD, $MKT_MLG_CNTY_CD, $MKT_MLG_GEO_AREA_SHRT_CD, $MKT_MLG_GEO_AREA_CD, $MKT_MLG_CTRY_CD, $MKT_MLG_POST_TOWN_CD, $MKT_MLG_CONT_CD, $MKT_CEO_NME, $MKT_CEO_TITL, $MKT_EXEC_NME, $MKT_LOB, $MKT_SIC8, $MKT_LCL_SIC, $MKT_ACTV_IND, $MKT_STRT_YR, $MKT_ANN_SALE_VOL, $MKT_ANN_SALE_IND, $MKT_ANN_SALE_VOL_US, $MKT_NET_INCM, $MKT_NET_INCM_US, $MKT_NET_WRTH, $MKT_NET_WRTH_US, $MKT_CRCY_CD, $MKT_EMPL_AT_PHYS_ADR, $MKT_EMPL_AT_PHYS_ADR_IND, $MKT_TOT_EMPL, $MKT_TOT_EMPL_IND, $MKT_INCL_PRIN_IND, $MKT_IMPT_EXPT_IND, $MKT_LGL_FORM, $MKT_OUT_BUS_IND, $MKT_BUS_STRUC_CD, $MKT_SUBS_CD, $MKT_NIX_IND, $MKT_STMT_DT, $MKT_RPT_DT, $MKT_HDQ_PNT_DUNS, $MKT_HDQ_PNT_PRIM_NME, $MKT_HDQ_PNT_ADR_LINE, $MKT_HDQ_PNT_POST_TOWN_TEXT, $MKT_HDQ_PNT_GEO_AREA_TEXT, $MKT_HDQ_PNT_CTRY_TEXT, $MKT_HDQ_PNT_CITY_CD, $MKT_HDQ_PNT_CNTY_CD, $MKT_HDQ_PNT_GEO_AREA_CD, $MKT_HDQ_PNT_CTRY_CD, $MKT_HDQ_PNT_POST_TOWN_CD, $MKT_HDQ_PNT_CONT_CD, $MKT_DOM_ULT_PNT_DUNS, $MKT_DOM_ULT_PRIM_NME, $MKT_DOM_ULT_ADR_LINE, $MKT_DOM_ULT_POST_TOWN_TEXT, $MKT_DOM_ULT_GEO_AREA_TEXT, $MKT_DOM_ULT_CITY_CD, $MKT_DOM_ULT_CNTY_CD, $MKT_DOM_ULT_GEO_AREA_CD, $MKT_DOM_ULT_POST_TOWN_CD, $MKT_GLBL_ULT_PNT_IND, $MKT_GLBL_ULT_PNT_DUNS, $MKT_GBL_ULT_PRIM_NME, $MKT_GBL_ULT_ADR_LINE, $MKT_GBL_ULT_POST_TOWN_TEXT, $MKT_GBL_ULT_GEO_AREA_TEXT, $MKT_GBL_ULT_CTRY_TEXT, $MKT_GBL_ULT_CITY_CD, $MKT_GBL_ULT_CNTY_CD, $MKT_GBL_ULT_GEO_AREA_CD, $MKT_GLBL_ULT_CTRY_CD, $MKT_GBL_ULT_POST_TOWN_CD, $MKT_GBL_ULT_CONT_CD, $MKT_GBL_FAM_MBR_NBR, $MKT_DIAS_CD, $MKT_HIER_CD, $MKT_FAM_UPD_DT)
  {
    $this->SRVRTID = $SRVRTID;
    $this->GDA_ID = $GDA_ID;
    $this->CACHE_IND = $CACHE_IND;
    $this->PRD_DT = $PRD_DT;
    $this->CTRY_CD = $CTRY_CD;
    $this->MKT_DUNS_NBR = $MKT_DUNS_NBR;
    $this->MKT_PRIM_NME = $MKT_PRIM_NME;
    $this->MKT_TRDG_STYL = $MKT_TRDG_STYL;
    $this->MKT_FRMR_PRIM_NME = $MKT_FRMR_PRIM_NME;
    $this->MKT_FRMR_DUNS_NBR = $MKT_FRMR_DUNS_NBR;
    $this->MKT_REGD_ADR_IND = $MKT_REGD_ADR_IND;
    $this->MKT_PHYS_ADR_LINE = $MKT_PHYS_ADR_LINE;
    $this->MKT_PHYS_POST_TOWN_TEXT = $MKT_PHYS_POST_TOWN_TEXT;
    $this->MKT_PHYS_GEO_AREA_TEXT = $MKT_PHYS_GEO_AREA_TEXT;
    $this->MKT_PHYS_CTRY_TEXT = $MKT_PHYS_CTRY_TEXT;
    $this->MKT_PHYS_CITY_CD = $MKT_PHYS_CITY_CD;
    $this->MKT_PHYS_CNTY_CD = $MKT_PHYS_CNTY_CD;
    $this->MKT_PHYS_GEO_AREA_SHRT_CD = $MKT_PHYS_GEO_AREA_SHRT_CD;
    $this->MKT_PHYS_GEO_AREA_CD = $MKT_PHYS_GEO_AREA_CD;
    $this->MKT_PHYS_CTRY_CD = $MKT_PHYS_CTRY_CD;
    $this->MKT_PHYS_POST_TOWN_CD = $MKT_PHYS_POST_TOWN_CD;
    $this->MKT_PHYS_CONT_CD = $MKT_PHYS_CONT_CD;
    $this->MKT_BUS_REGN_NBR_TYPE_CD = $MKT_BUS_REGN_NBR_TYPE_CD;
    $this->MKT_BUS_REGN_NBR_TYPE = $MKT_BUS_REGN_NBR_TYPE;
    $this->MKT_PHON_ACS_CD = $MKT_PHON_ACS_CD;
    $this->MKT_PHON_NBR = $MKT_PHON_NBR;
    $this->MKT_TELX_NBR = $MKT_TELX_NBR;
    $this->MKT_FAX_NBR = $MKT_FAX_NBR;
    $this->MKT_CTRL_IND = $MKT_CTRL_IND;
    $this->MKT_MKTB_CD = $MKT_MKTB_CD;
    $this->MKT_MLG_ADR_LINE = $MKT_MLG_ADR_LINE;
    $this->MKT_MLG_POST_TOWN_TEXT = $MKT_MLG_POST_TOWN_TEXT;
    $this->MKT_MLG_CNTY_TEXT = $MKT_MLG_CNTY_TEXT;
    $this->MKT_MLG_GEO_AREA_TEXT = $MKT_MLG_GEO_AREA_TEXT;
    $this->MKT_MLG_CTRY_TEXT = $MKT_MLG_CTRY_TEXT;
    $this->MKT_MLG_CITY_CD = $MKT_MLG_CITY_CD;
    $this->MKT_MLG_CNTY_CD = $MKT_MLG_CNTY_CD;
    $this->MKT_MLG_GEO_AREA_SHRT_CD = $MKT_MLG_GEO_AREA_SHRT_CD;
    $this->MKT_MLG_GEO_AREA_CD = $MKT_MLG_GEO_AREA_CD;
    $this->MKT_MLG_CTRY_CD = $MKT_MLG_CTRY_CD;
    $this->MKT_MLG_POST_TOWN_CD = $MKT_MLG_POST_TOWN_CD;
    $this->MKT_MLG_CONT_CD = $MKT_MLG_CONT_CD;
    $this->MKT_CEO_NME = $MKT_CEO_NME;
    $this->MKT_CEO_TITL = $MKT_CEO_TITL;
    $this->MKT_EXEC_NME = $MKT_EXEC_NME;
    $this->MKT_LOB = $MKT_LOB;
    $this->MKT_SIC8 = $MKT_SIC8;
    $this->MKT_LCL_SIC = $MKT_LCL_SIC;
    $this->MKT_ACTV_IND = $MKT_ACTV_IND;
    $this->MKT_STRT_YR = $MKT_STRT_YR;
    $this->MKT_ANN_SALE_VOL = $MKT_ANN_SALE_VOL;
    $this->MKT_ANN_SALE_IND = $MKT_ANN_SALE_IND;
    $this->MKT_ANN_SALE_VOL_US = $MKT_ANN_SALE_VOL_US;
    $this->MKT_NET_INCM = $MKT_NET_INCM;
    $this->MKT_NET_INCM_US = $MKT_NET_INCM_US;
    $this->MKT_NET_WRTH = $MKT_NET_WRTH;
    $this->MKT_NET_WRTH_US = $MKT_NET_WRTH_US;
    $this->MKT_CRCY_CD = $MKT_CRCY_CD;
    $this->MKT_EMPL_AT_PHYS_ADR = $MKT_EMPL_AT_PHYS_ADR;
    $this->MKT_EMPL_AT_PHYS_ADR_IND = $MKT_EMPL_AT_PHYS_ADR_IND;
    $this->MKT_TOT_EMPL = $MKT_TOT_EMPL;
    $this->MKT_TOT_EMPL_IND = $MKT_TOT_EMPL_IND;
    $this->MKT_INCL_PRIN_IND = $MKT_INCL_PRIN_IND;
    $this->MKT_IMPT_EXPT_IND = $MKT_IMPT_EXPT_IND;
    $this->MKT_LGL_FORM = $MKT_LGL_FORM;
    $this->MKT_OUT_BUS_IND = $MKT_OUT_BUS_IND;
    $this->MKT_BUS_STRUC_CD = $MKT_BUS_STRUC_CD;
    $this->MKT_SUBS_CD = $MKT_SUBS_CD;
    $this->MKT_NIX_IND = $MKT_NIX_IND;
    $this->MKT_STMT_DT = $MKT_STMT_DT;
    $this->MKT_RPT_DT = $MKT_RPT_DT;
    $this->MKT_HDQ_PNT_DUNS = $MKT_HDQ_PNT_DUNS;
    $this->MKT_HDQ_PNT_PRIM_NME = $MKT_HDQ_PNT_PRIM_NME;
    $this->MKT_HDQ_PNT_ADR_LINE = $MKT_HDQ_PNT_ADR_LINE;
    $this->MKT_HDQ_PNT_POST_TOWN_TEXT = $MKT_HDQ_PNT_POST_TOWN_TEXT;
    $this->MKT_HDQ_PNT_GEO_AREA_TEXT = $MKT_HDQ_PNT_GEO_AREA_TEXT;
    $this->MKT_HDQ_PNT_CTRY_TEXT = $MKT_HDQ_PNT_CTRY_TEXT;
    $this->MKT_HDQ_PNT_CITY_CD = $MKT_HDQ_PNT_CITY_CD;
    $this->MKT_HDQ_PNT_CNTY_CD = $MKT_HDQ_PNT_CNTY_CD;
    $this->MKT_HDQ_PNT_GEO_AREA_CD = $MKT_HDQ_PNT_GEO_AREA_CD;
    $this->MKT_HDQ_PNT_CTRY_CD = $MKT_HDQ_PNT_CTRY_CD;
    $this->MKT_HDQ_PNT_POST_TOWN_CD = $MKT_HDQ_PNT_POST_TOWN_CD;
    $this->MKT_HDQ_PNT_CONT_CD = $MKT_HDQ_PNT_CONT_CD;
    $this->MKT_DOM_ULT_PNT_DUNS = $MKT_DOM_ULT_PNT_DUNS;
    $this->MKT_DOM_ULT_PRIM_NME = $MKT_DOM_ULT_PRIM_NME;
    $this->MKT_DOM_ULT_ADR_LINE = $MKT_DOM_ULT_ADR_LINE;
    $this->MKT_DOM_ULT_POST_TOWN_TEXT = $MKT_DOM_ULT_POST_TOWN_TEXT;
    $this->MKT_DOM_ULT_GEO_AREA_TEXT = $MKT_DOM_ULT_GEO_AREA_TEXT;
    $this->MKT_DOM_ULT_CITY_CD = $MKT_DOM_ULT_CITY_CD;
    $this->MKT_DOM_ULT_CNTY_CD = $MKT_DOM_ULT_CNTY_CD;
    $this->MKT_DOM_ULT_GEO_AREA_CD = $MKT_DOM_ULT_GEO_AREA_CD;
    $this->MKT_DOM_ULT_POST_TOWN_CD = $MKT_DOM_ULT_POST_TOWN_CD;
    $this->MKT_GLBL_ULT_PNT_IND = $MKT_GLBL_ULT_PNT_IND;
    $this->MKT_GLBL_ULT_PNT_DUNS = $MKT_GLBL_ULT_PNT_DUNS;
    $this->MKT_GBL_ULT_PRIM_NME = $MKT_GBL_ULT_PRIM_NME;
    $this->MKT_GBL_ULT_ADR_LINE = $MKT_GBL_ULT_ADR_LINE;
    $this->MKT_GBL_ULT_POST_TOWN_TEXT = $MKT_GBL_ULT_POST_TOWN_TEXT;
    $this->MKT_GBL_ULT_GEO_AREA_TEXT = $MKT_GBL_ULT_GEO_AREA_TEXT;
    $this->MKT_GBL_ULT_CTRY_TEXT = $MKT_GBL_ULT_CTRY_TEXT;
    $this->MKT_GBL_ULT_CITY_CD = $MKT_GBL_ULT_CITY_CD;
    $this->MKT_GBL_ULT_CNTY_CD = $MKT_GBL_ULT_CNTY_CD;
    $this->MKT_GBL_ULT_GEO_AREA_CD = $MKT_GBL_ULT_GEO_AREA_CD;
    $this->MKT_GLBL_ULT_CTRY_CD = $MKT_GLBL_ULT_CTRY_CD;
    $this->MKT_GBL_ULT_POST_TOWN_CD = $MKT_GBL_ULT_POST_TOWN_CD;
    $this->MKT_GBL_ULT_CONT_CD = $MKT_GBL_ULT_CONT_CD;
    $this->MKT_GBL_FAM_MBR_NBR = $MKT_GBL_FAM_MBR_NBR;
    $this->MKT_DIAS_CD = $MKT_DIAS_CD;
    $this->MKT_HIER_CD = $MKT_HIER_CD;
    $this->MKT_FAM_UPD_DT = $MKT_FAM_UPD_DT;
  }

}
