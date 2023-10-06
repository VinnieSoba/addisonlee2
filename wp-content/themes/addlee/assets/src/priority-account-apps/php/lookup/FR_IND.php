<?php

class FR_IND
{

  /**
   * 
   * @var string $HR_MISREP_DT
   * @access public
   */
  public $HR_MISREP_DT;

  /**
   * 
   * @var string $HR_MISREP_NME
   * @access public
   */
  public $HR_MISREP_NME;

  /**
   * 
   * @var string $HR_MISREP_ADR_LINE
   * @access public
   */
  public $HR_MISREP_ADR_LINE;

  /**
   * 
   * @var string $HR_MISREP_POST_TOWN
   * @access public
   */
  public $HR_MISREP_POST_TOWN;

  /**
   * 
   * @var string $HR_MISREP_PRIM_GEO_AREA
   * @access public
   */
  public $HR_MISREP_PRIM_GEO_AREA;

  /**
   * 
   * @var string $HR_MISREP_POST_CODE
   * @access public
   */
  public $HR_MISREP_POST_CODE;

  /**
   * 
   * @var string $FRD_INCDERANK
   * @access public
   */
  public $FRD_INCDERANK;

  /**
   * 
   * @var string $HR_MISREP_TLCM_NBR
   * @access public
   */
  public $HR_MISREP_TLCM_NBR;

  /**
   * 
   * @var string $ZIP_STD
   * @access public
   */
  public $ZIP_STD;

  /**
   * 
   * @var string $ADR_QLTY
   * @access public
   */
  public $ADR_QLTY;

  /**
   * 
   * @var string $ADR_RSK
   * @access public
   */
  public $ADR_RSK;

  /**
   * 
   * @var string $CNT_TLCM_ADR_RSK
   * @access public
   */
  public $CNT_TLCM_ADR_RSK;

  /**
   * 
   * @param string $HR_MISREP_DT
   * @param string $HR_MISREP_NME
   * @param string $HR_MISREP_ADR_LINE
   * @param string $HR_MISREP_POST_TOWN
   * @param string $HR_MISREP_PRIM_GEO_AREA
   * @param string $HR_MISREP_POST_CODE
   * @param string $FRD_INCDERANK
   * @param string $HR_MISREP_TLCM_NBR
   * @param string $ZIP_STD
   * @param string $ADR_QLTY
   * @param string $ADR_RSK
   * @param string $CNT_TLCM_ADR_RSK
   * @access public
   */
  public function __construct($HR_MISREP_DT, $HR_MISREP_NME, $HR_MISREP_ADR_LINE, $HR_MISREP_POST_TOWN, $HR_MISREP_PRIM_GEO_AREA, $HR_MISREP_POST_CODE, $FRD_INCDERANK, $HR_MISREP_TLCM_NBR, $ZIP_STD, $ADR_QLTY, $ADR_RSK, $CNT_TLCM_ADR_RSK)
  {
    $this->HR_MISREP_DT = $HR_MISREP_DT;
    $this->HR_MISREP_NME = $HR_MISREP_NME;
    $this->HR_MISREP_ADR_LINE = $HR_MISREP_ADR_LINE;
    $this->HR_MISREP_POST_TOWN = $HR_MISREP_POST_TOWN;
    $this->HR_MISREP_PRIM_GEO_AREA = $HR_MISREP_PRIM_GEO_AREA;
    $this->HR_MISREP_POST_CODE = $HR_MISREP_POST_CODE;
    $this->FRD_INCDERANK = $FRD_INCDERANK;
    $this->HR_MISREP_TLCM_NBR = $HR_MISREP_TLCM_NBR;
    $this->ZIP_STD = $ZIP_STD;
    $this->ADR_QLTY = $ADR_QLTY;
    $this->ADR_RSK = $ADR_RSK;
    $this->CNT_TLCM_ADR_RSK = $CNT_TLCM_ADR_RSK;
  }

}
