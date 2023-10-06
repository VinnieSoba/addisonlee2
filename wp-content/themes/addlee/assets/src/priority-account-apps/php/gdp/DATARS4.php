<?php

class DATARS4
{

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
   * @var string $SRVRTID
   * @access public
   */
  public $SRVRTID;

  /**
   * 
   * @var RPT $RPT
   * @access public
   */
  public $RPT;

  /**
   * 
   * @var CUST_INP_DATA $CUST_INP_DATA
   * @access public
   */
  public $CUST_INP_DATA;

  /**
   * 
   * @var UPD_FLDS $UPD_FLDS
   * @access public
   */
  public $UPD_FLDS;

  /**
   * 
   * @var KEY_FLDS $KEY_FLDS
   * @access public
   */
  public $KEY_FLDS;

  /**
   * 
   * @var DNB_VBLTY_RATG_ENTR3 $DNB_VBLTY_RATG_ENTR
   * @access public
   */
  public $DNB_VBLTY_RATG_ENTR;

  /**
   * 
   * @var SER_RAT_ENTR3 $SER_RAT_ENTR
   * @access public
   */
  public $SER_RAT_ENTR;

  /**
   * 
   * @param string $CACHE_IND
   * @param string $PRD_DT
   * @param string $SRVRTID
   * @param RPT $RPT
   * @param CUST_INP_DATA $CUST_INP_DATA
   * @param UPD_FLDS $UPD_FLDS
   * @param KEY_FLDS $KEY_FLDS
   * @param DNB_VBLTY_RATG_ENTR3 $DNB_VBLTY_RATG_ENTR
   * @param SER_RAT_ENTR3 $SER_RAT_ENTR
   * @access public
   */
  public function __construct($CACHE_IND, $PRD_DT, $SRVRTID, $RPT, $CUST_INP_DATA, $UPD_FLDS, $KEY_FLDS, $DNB_VBLTY_RATG_ENTR, $SER_RAT_ENTR)
  {
    $this->CACHE_IND = $CACHE_IND;
    $this->PRD_DT = $PRD_DT;
    $this->SRVRTID = $SRVRTID;
    $this->RPT = $RPT;
    $this->CUST_INP_DATA = $CUST_INP_DATA;
    $this->UPD_FLDS = $UPD_FLDS;
    $this->KEY_FLDS = $KEY_FLDS;
    $this->DNB_VBLTY_RATG_ENTR = $DNB_VBLTY_RATG_ENTR;
    $this->SER_RAT_ENTR = $SER_RAT_ENTR;
  }

}
