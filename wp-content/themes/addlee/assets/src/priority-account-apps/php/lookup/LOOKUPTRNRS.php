<?php

class LOOKUPTRNRS
{

  /**
   * 
   * @var string $TRNUID
   * @access public
   */
  public $TRNUID;

  /**
   * 
   * @var STATUS2 $STATUS
   * @access public
   */
  public $STATUS;

  /**
   * 
   * @var LOOKUPRS $LOOKUPRS
   * @access public
   */
  public $LOOKUPRS;

  /**
   * 
   * @var FRD_RISK_SCR $FRD_RISK_SCR
   * @access public
   */
  public $FRD_RISK_SCR;

  /**
   * 
   * @param string $TRNUID
   * @param STATUS2 $STATUS
   * @param LOOKUPRS $LOOKUPRS
   * @param FRD_RISK_SCR $FRD_RISK_SCR
   * @access public
   */
  public function __construct($TRNUID, $STATUS, $LOOKUPRS, $FRD_RISK_SCR)
  {
    $this->TRNUID = $TRNUID;
    $this->STATUS = $STATUS;
    $this->LOOKUPRS = $LOOKUPRS;
    $this->FRD_RISK_SCR = $FRD_RISK_SCR;
  }

}
