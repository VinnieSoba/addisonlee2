<?php

class DATATRNRS
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
   * @var DATARS $DATARS
   * @access public
   */
  public $DATARS;

  /**
   * 
   * @param string $TRNUID
   * @param STATUS2 $STATUS
   * @param DATARS $DATARS
   * @access public
   */
  public function __construct($TRNUID, $STATUS, $DATARS)
  {
    $this->TRNUID = $TRNUID;
    $this->STATUS = $STATUS;
    $this->DATARS = $DATARS;
  }

}
