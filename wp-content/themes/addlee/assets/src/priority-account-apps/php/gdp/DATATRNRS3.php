<?php

class DATATRNRS3
{

  /**
   * 
   * @var string $TRNUID
   * @access public
   */
  public $TRNUID;

  /**
   * 
   * @var STATUS6 $STATUS
   * @access public
   */
  public $STATUS;

  /**
   * 
   * @var DATARS3 $DATARS
   * @access public
   */
  public $DATARS;

  /**
   * 
   * @param string $TRNUID
   * @param STATUS6 $STATUS
   * @param DATARS3 $DATARS
   * @access public
   */
  public function __construct($TRNUID, $STATUS, $DATARS)
  {
    $this->TRNUID = $TRNUID;
    $this->STATUS = $STATUS;
    $this->DATARS = $DATARS;
  }

}
