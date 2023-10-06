<?php

class DATATRNRS2
{

  /**
   * 
   * @var string $TRNUID
   * @access public
   */
  public $TRNUID;

  /**
   * 
   * @var STATUS4 $STATUS
   * @access public
   */
  public $STATUS;

  /**
   * 
   * @var DATARS2 $DATARS
   * @access public
   */
  public $DATARS;

  /**
   * 
   * @param string $TRNUID
   * @param STATUS4 $STATUS
   * @param DATARS2 $DATARS
   * @access public
   */
  public function __construct($TRNUID, $STATUS, $DATARS)
  {
    $this->TRNUID = $TRNUID;
    $this->STATUS = $STATUS;
    $this->DATARS = $DATARS;
  }

}
