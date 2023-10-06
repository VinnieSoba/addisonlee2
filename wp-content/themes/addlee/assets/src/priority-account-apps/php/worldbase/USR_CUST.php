<?php

class USR_CUST
{

  /**
   * 
   * @var string $SUBR_NBR
   * @access public
   */
  public $SUBR_NBR;

  /**
   * 
   * @var string $DUNS_NBR
   * @access public
   */
  public $DUNS_NBR;

  /**
   * 
   * @var string $ULT_DUNS_NBR
   * @access public
   */
  public $ULT_DUNS_NBR;

  /**
   * 
   * @var string $PNT_DUNS_NBR
   * @access public
   */
  public $PNT_DUNS_NBR;

  /**
   * 
   * @var string $DEFU_DB_USR_ID
   * @access public
   */
  public $DEFU_DB_USR_ID;

  /**
   * 
   * @var string $DEFU_DB_PSWD
   * @access public
   */
  public $DEFU_DB_PSWD;

  /**
   * 
   * @var string $DELV_CO_NME
   * @access public
   */
  public $DELV_CO_NME;

  /**
   * 
   * @var string $DELV_ADR_LINE_1
   * @access public
   */
  public $DELV_ADR_LINE_1;

  /**
   * 
   * @var string $DELV_ADR_LINE_2
   * @access public
   */
  public $DELV_ADR_LINE_2;

  /**
   * 
   * @var string $DELV_ADR_LINE_3
   * @access public
   */
  public $DELV_ADR_LINE_3;

  /**
   * 
   * @var string $DELV_CITY
   * @access public
   */
  public $DELV_CITY;

  /**
   * 
   * @var string $DELV_RGN
   * @access public
   */
  public $DELV_RGN;

  /**
   * 
   * @var string $DELV_POST_CD
   * @access public
   */
  public $DELV_POST_CD;

  /**
   * 
   * @var string $DELV_CTRY_ID
   * @access public
   */
  public $DELV_CTRY_ID;

  /**
   * 
   * @var string $DELV_FAX_AREA_CD
   * @access public
   */
  public $DELV_FAX_AREA_CD;

  /**
   * 
   * @var string $DELV_FAX_NBR
   * @access public
   */
  public $DELV_FAX_NBR;

  /**
   * 
   * @var string $DELV_FAX_EXTN
   * @access public
   */
  public $DELV_FAX_EXTN;

  /**
   * 
   * @var string $DELV_REQG_NME
   * @access public
   */
  public $DELV_REQG_NME;

  /**
   * 
   * @var string $DELV_CTAC_NME
   * @access public
   */
  public $DELV_CTAC_NME;

  /**
   * 
   * @var string $DELV_CTAC_PH_AREA_CD
   * @access public
   */
  public $DELV_CTAC_PH_AREA_CD;

  /**
   * 
   * @var string $DELV_CTAC_PH_NBR
   * @access public
   */
  public $DELV_CTAC_PH_NBR;

  /**
   * 
   * @var string $DELV_CTAC_PH_EXTN
   * @access public
   */
  public $DELV_CTAC_PH_EXTN;

  /**
   * 
   * @var string $DEFU_DELV_EMAIL
   * @access public
   */
  public $DEFU_DELV_EMAIL;

  /**
   * 
   * @var string $INTERNAL_IND
   * @access public
   */
  public $INTERNAL_IND;

  /**
   * 
   * @var string $EXPIRY_DT
   * @access public
   */
  public $EXPIRY_DT;

  /**
   * 
   * @var string $LAST_CTAC_DT
   * @access public
   */
  public $LAST_CTAC_DT;

  /**
   * 
   * @param string $SUBR_NBR
   * @param string $DUNS_NBR
   * @param string $ULT_DUNS_NBR
   * @param string $PNT_DUNS_NBR
   * @param string $DEFU_DB_USR_ID
   * @param string $DEFU_DB_PSWD
   * @param string $DELV_CO_NME
   * @param string $DELV_ADR_LINE_1
   * @param string $DELV_ADR_LINE_2
   * @param string $DELV_ADR_LINE_3
   * @param string $DELV_CITY
   * @param string $DELV_RGN
   * @param string $DELV_POST_CD
   * @param string $DELV_CTRY_ID
   * @param string $DELV_FAX_AREA_CD
   * @param string $DELV_FAX_NBR
   * @param string $DELV_FAX_EXTN
   * @param string $DELV_REQG_NME
   * @param string $DELV_CTAC_NME
   * @param string $DELV_CTAC_PH_AREA_CD
   * @param string $DELV_CTAC_PH_NBR
   * @param string $DELV_CTAC_PH_EXTN
   * @param string $DEFU_DELV_EMAIL
   * @param string $INTERNAL_IND
   * @param string $EXPIRY_DT
   * @param string $LAST_CTAC_DT
   * @access public
   */
  public function __construct($SUBR_NBR, $DUNS_NBR, $ULT_DUNS_NBR, $PNT_DUNS_NBR, $DEFU_DB_USR_ID, $DEFU_DB_PSWD, $DELV_CO_NME, $DELV_ADR_LINE_1, $DELV_ADR_LINE_2, $DELV_ADR_LINE_3, $DELV_CITY, $DELV_RGN, $DELV_POST_CD, $DELV_CTRY_ID, $DELV_FAX_AREA_CD, $DELV_FAX_NBR, $DELV_FAX_EXTN, $DELV_REQG_NME, $DELV_CTAC_NME, $DELV_CTAC_PH_AREA_CD, $DELV_CTAC_PH_NBR, $DELV_CTAC_PH_EXTN, $DEFU_DELV_EMAIL, $INTERNAL_IND, $EXPIRY_DT, $LAST_CTAC_DT)
  {
    $this->SUBR_NBR = $SUBR_NBR;
    $this->DUNS_NBR = $DUNS_NBR;
    $this->ULT_DUNS_NBR = $ULT_DUNS_NBR;
    $this->PNT_DUNS_NBR = $PNT_DUNS_NBR;
    $this->DEFU_DB_USR_ID = $DEFU_DB_USR_ID;
    $this->DEFU_DB_PSWD = $DEFU_DB_PSWD;
    $this->DELV_CO_NME = $DELV_CO_NME;
    $this->DELV_ADR_LINE_1 = $DELV_ADR_LINE_1;
    $this->DELV_ADR_LINE_2 = $DELV_ADR_LINE_2;
    $this->DELV_ADR_LINE_3 = $DELV_ADR_LINE_3;
    $this->DELV_CITY = $DELV_CITY;
    $this->DELV_RGN = $DELV_RGN;
    $this->DELV_POST_CD = $DELV_POST_CD;
    $this->DELV_CTRY_ID = $DELV_CTRY_ID;
    $this->DELV_FAX_AREA_CD = $DELV_FAX_AREA_CD;
    $this->DELV_FAX_NBR = $DELV_FAX_NBR;
    $this->DELV_FAX_EXTN = $DELV_FAX_EXTN;
    $this->DELV_REQG_NME = $DELV_REQG_NME;
    $this->DELV_CTAC_NME = $DELV_CTAC_NME;
    $this->DELV_CTAC_PH_AREA_CD = $DELV_CTAC_PH_AREA_CD;
    $this->DELV_CTAC_PH_NBR = $DELV_CTAC_PH_NBR;
    $this->DELV_CTAC_PH_EXTN = $DELV_CTAC_PH_EXTN;
    $this->DEFU_DELV_EMAIL = $DEFU_DELV_EMAIL;
    $this->INTERNAL_IND = $INTERNAL_IND;
    $this->EXPIRY_DT = $EXPIRY_DT;
    $this->LAST_CTAC_DT = $LAST_CTAC_DT;
  }

}
