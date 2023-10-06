<?php

class FRD_RISK_SCR
{

  /**
   * 
   * @var string $TRNUID
   * @access public
   */
  public $TRNUID;

  /**
   * 
   * @var STATUS3 $STATUS
   * @access public
   */
  public $STATUS;

  /**
   * 
   * @var FDSLOOKUPRS $FDSLOOKUPRS
   * @access public
   */
  public $FDSLOOKUPRS;

  /**
   * 
   * @param string $TRNUID
   * @param STATUS3 $STATUS
   * @param FDSLOOKUPRS $FDSLOOKUPRS
   * @access public
   */
  public function __construct($TRNUID, $STATUS, $FDSLOOKUPRS)
  {
    $this->TRNUID = $TRNUID;
    $this->STATUS = $STATUS;
    $this->FDSLOOKUPRS = $FDSLOOKUPRS;
  }

}
