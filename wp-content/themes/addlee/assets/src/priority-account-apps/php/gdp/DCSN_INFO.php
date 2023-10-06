<?php

class DCSN_INFO
{

  /**
   * 
   * @var string $CR_DCSN
   * @access public
   */
  public $CR_DCSN;

  /**
   * 
   * @var string $DCSN_ID
   * @access public
   */
  public $DCSN_ID;

  /**
   * 
   * @var string $RPT_REQ_USERID
   * @access public
   */
  public $RPT_REQ_USERID;

  /**
   * 
   * @var string $RPT_GNRT_DT_TME
   * @access public
   */
  public $RPT_GNRT_DT_TME;

  /**
   * 
   * @var string $ACTN_MSG
   * @access public
   */
  public $ACTN_MSG;

  /**
   * 
   * @var string $INP_CRCY_CD
   * @access public
   */
  public $INP_CRCY_CD;

  /**
   * 
   * @var string $REQ_CR_AMT
   * @access public
   */
  public $REQ_CR_AMT;

  /**
   * 
   * @var string $OTSD_CR_BAL
   * @access public
   */
  public $OTSD_CR_BAL;

  /**
   * 
   * @var string $USER_DEF_1
   * @access public
   */
  public $USER_DEF_1;

  /**
   * 
   * @var string $USER_DEF_N
   * @access public
   */
  public $USER_DEF_N;

  /**
   * 
   * @var string $CR_LMT_CRCY_CD
   * @access public
   */
  public $CR_LMT_CRCY_CD;

  /**
   * 
   * @var string $CR_LMT
   * @access public
   */
  public $CR_LMT;

  /**
   * 
   * @var string $BILB_IND
   * @access public
   */
  public $BILB_IND;

  /**
   * 
   * @var string $RSK_BAND
   * @access public
   */
  public $RSK_BAND;

  /**
   * 
   * @var string $DM_AGE
   * @access public
   */
  public $DM_AGE;

  /**
   * 
   * @var string $CURR_CNTL_AGE
   * @access public
   */
  public $CURR_CNTL_AGE;

  /**
   * 
   * @var string $DM_RSK_RATG
   * @access public
   */
  public $DM_RSK_RATG;

  /**
   * 
   * @var string $DM_SIC_TYPE_CD
   * @access public
   */
  public $DM_SIC_TYPE_CD;

  /**
   * 
   * @var string $DM_SIC
   * @access public
   */
  public $DM_SIC;

  /**
   * 
   * @var string $DM_NET_WRTH
   * @access public
   */
  public $DM_NET_WRTH;

  /**
   * 
   * @var string $DM_SLS
   * @access public
   */
  public $DM_SLS;

  /**
   * 
   * @var string $CR_RULE
   * @access public
   */
  public $CR_RULE;

  /**
   * 
   * @var string $CR_RULE_VER
   * @access public
   */
  public $CR_RULE_VER;

  /**
   * 
   * @param string $CR_DCSN
   * @param string $DCSN_ID
   * @param string $RPT_REQ_USERID
   * @param string $RPT_GNRT_DT_TME
   * @param string $ACTN_MSG
   * @param string $INP_CRCY_CD
   * @param string $REQ_CR_AMT
   * @param string $OTSD_CR_BAL
   * @param string $USER_DEF_1
   * @param string $USER_DEF_N
   * @param string $CR_LMT_CRCY_CD
   * @param string $CR_LMT
   * @param string $BILB_IND
   * @param string $RSK_BAND
   * @param string $DM_AGE
   * @param string $CURR_CNTL_AGE
   * @param string $DM_RSK_RATG
   * @param string $DM_SIC_TYPE_CD
   * @param string $DM_SIC
   * @param string $DM_NET_WRTH
   * @param string $DM_SLS
   * @param string $CR_RULE
   * @param string $CR_RULE_VER
   * @access public
   */
  public function __construct($CR_DCSN, $DCSN_ID, $RPT_REQ_USERID, $RPT_GNRT_DT_TME, $ACTN_MSG, $INP_CRCY_CD, $REQ_CR_AMT, $OTSD_CR_BAL, $USER_DEF_1, $USER_DEF_N, $CR_LMT_CRCY_CD, $CR_LMT, $BILB_IND, $RSK_BAND, $DM_AGE, $CURR_CNTL_AGE, $DM_RSK_RATG, $DM_SIC_TYPE_CD, $DM_SIC, $DM_NET_WRTH, $DM_SLS, $CR_RULE, $CR_RULE_VER)
  {
    $this->CR_DCSN = $CR_DCSN;
    $this->DCSN_ID = $DCSN_ID;
    $this->RPT_REQ_USERID = $RPT_REQ_USERID;
    $this->RPT_GNRT_DT_TME = $RPT_GNRT_DT_TME;
    $this->ACTN_MSG = $ACTN_MSG;
    $this->INP_CRCY_CD = $INP_CRCY_CD;
    $this->REQ_CR_AMT = $REQ_CR_AMT;
    $this->OTSD_CR_BAL = $OTSD_CR_BAL;
    $this->USER_DEF_1 = $USER_DEF_1;
    $this->USER_DEF_N = $USER_DEF_N;
    $this->CR_LMT_CRCY_CD = $CR_LMT_CRCY_CD;
    $this->CR_LMT = $CR_LMT;
    $this->BILB_IND = $BILB_IND;
    $this->RSK_BAND = $RSK_BAND;
    $this->DM_AGE = $DM_AGE;
    $this->CURR_CNTL_AGE = $CURR_CNTL_AGE;
    $this->DM_RSK_RATG = $DM_RSK_RATG;
    $this->DM_SIC_TYPE_CD = $DM_SIC_TYPE_CD;
    $this->DM_SIC = $DM_SIC;
    $this->DM_NET_WRTH = $DM_NET_WRTH;
    $this->DM_SLS = $DM_SLS;
    $this->CR_RULE = $CR_RULE;
    $this->CR_RULE_VER = $CR_RULE_VER;
  }

}
