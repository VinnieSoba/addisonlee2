<?php

class USR
{

  /**
   * 
   * @var string $DB_USR_ID
   * @access public
   */
  public $DB_USR_ID;

  /**
   * 
   * @var string $DB_PSWD
   * @access public
   */
  public $DB_PSWD;

  /**
   * 
   * @var string $DEFU_ENDR
   * @access public
   */
  public $DEFU_ENDR;

  /**
   * 
   * @var string $DEFU_BILG_REF_1
   * @access public
   */
  public $DEFU_BILG_REF_1;

  /**
   * 
   * @var string $DEFU_BILG_REF_2
   * @access public
   */
  public $DEFU_BILG_REF_2;

  /**
   * 
   * @var string $USR_NME
   * @access public
   */
  public $USR_NME;

  /**
   * 
   * @var string $DELV_NME
   * @access public
   */
  public $DELV_NME;

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
   * @var string $DELV_EMAIL
   * @access public
   */
  public $DELV_EMAIL;

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
   * @var string $CTAC_PH_AREA_CD
   * @access public
   */
  public $CTAC_PH_AREA_CD;

  /**
   * 
   * @var string $CTAC_PH_NBR
   * @access public
   */
  public $CTAC_PH_NBR;

  /**
   * 
   * @var string $CTAC_PH_EXTN
   * @access public
   */
  public $CTAC_PH_EXTN;

  /**
   * 
   * @var string $USR_STAT
   * @access public
   */
  public $USR_STAT;

  /**
   * 
   * @var string $USR_LVL
   * @access public
   */
  public $USR_LVL;

  /**
   * 
   * @var string $EXPIRY_DT
   * @access public
   */
  public $EXPIRY_DT;

  /**
   * 
   * @var string $TEST_USER
   * @access public
   */
  public $TEST_USER;

  /**
   * 
   * @var string $LAST_CTAC_DT
   * @access public
   */
  public $LAST_CTAC_DT;

  /**
   * 
   * @param string $DB_USR_ID
   * @param string $DB_PSWD
   * @param string $DEFU_ENDR
   * @param string $DEFU_BILG_REF_1
   * @param string $DEFU_BILG_REF_2
   * @param string $USR_NME
   * @param string $DELV_NME
   * @param string $DELV_ADR_LINE_1
   * @param string $DELV_ADR_LINE_2
   * @param string $DELV_ADR_LINE_3
   * @param string $DELV_CITY
   * @param string $DELV_RGN
   * @param string $DELV_POST_CD
   * @param string $DELV_CTRY_ID
   * @param string $DELV_EMAIL
   * @param string $DELV_FAX_AREA_CD
   * @param string $DELV_FAX_NBR
   * @param string $DELV_FAX_EXTN
   * @param string $CTAC_PH_AREA_CD
   * @param string $CTAC_PH_NBR
   * @param string $CTAC_PH_EXTN
   * @param string $USR_STAT
   * @param string $USR_LVL
   * @param string $EXPIRY_DT
   * @param string $TEST_USER
   * @param string $LAST_CTAC_DT
   * @access public
   */
  public function __construct($DB_USR_ID, $DB_PSWD, $DEFU_ENDR, $DEFU_BILG_REF_1, $DEFU_BILG_REF_2, $USR_NME, $DELV_NME, $DELV_ADR_LINE_1, $DELV_ADR_LINE_2, $DELV_ADR_LINE_3, $DELV_CITY, $DELV_RGN, $DELV_POST_CD, $DELV_CTRY_ID, $DELV_EMAIL, $DELV_FAX_AREA_CD, $DELV_FAX_NBR, $DELV_FAX_EXTN, $CTAC_PH_AREA_CD, $CTAC_PH_NBR, $CTAC_PH_EXTN, $USR_STAT, $USR_LVL, $EXPIRY_DT, $TEST_USER, $LAST_CTAC_DT)
  {
    $this->DB_USR_ID = $DB_USR_ID;
    $this->DB_PSWD = $DB_PSWD;
    $this->DEFU_ENDR = $DEFU_ENDR;
    $this->DEFU_BILG_REF_1 = $DEFU_BILG_REF_1;
    $this->DEFU_BILG_REF_2 = $DEFU_BILG_REF_2;
    $this->USR_NME = $USR_NME;
    $this->DELV_NME = $DELV_NME;
    $this->DELV_ADR_LINE_1 = $DELV_ADR_LINE_1;
    $this->DELV_ADR_LINE_2 = $DELV_ADR_LINE_2;
    $this->DELV_ADR_LINE_3 = $DELV_ADR_LINE_3;
    $this->DELV_CITY = $DELV_CITY;
    $this->DELV_RGN = $DELV_RGN;
    $this->DELV_POST_CD = $DELV_POST_CD;
    $this->DELV_CTRY_ID = $DELV_CTRY_ID;
    $this->DELV_EMAIL = $DELV_EMAIL;
    $this->DELV_FAX_AREA_CD = $DELV_FAX_AREA_CD;
    $this->DELV_FAX_NBR = $DELV_FAX_NBR;
    $this->DELV_FAX_EXTN = $DELV_FAX_EXTN;
    $this->CTAC_PH_AREA_CD = $CTAC_PH_AREA_CD;
    $this->CTAC_PH_NBR = $CTAC_PH_NBR;
    $this->CTAC_PH_EXTN = $CTAC_PH_EXTN;
    $this->USR_STAT = $USR_STAT;
    $this->USR_LVL = $USR_LVL;
    $this->EXPIRY_DT = $EXPIRY_DT;
    $this->TEST_USER = $TEST_USER;
    $this->LAST_CTAC_DT = $LAST_CTAC_DT;
  }

}
