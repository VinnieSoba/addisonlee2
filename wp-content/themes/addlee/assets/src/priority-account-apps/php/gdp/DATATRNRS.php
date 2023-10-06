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
   * @var INVESTRS $INVESTRS
   * @access public
   */
  public $INVESTRS;

  /**
   * 
   * @var TEXTRS $TEXTRS
   * @access public
   */
  public $TEXTRS;

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
   * @param INVESTRS $INVESTRS
   * @param TEXTRS $TEXTRS
   * @param DATARS $DATARS
   * @access public
   */
  public function __construct($TRNUID, $STATUS, $INVESTRS, $TEXTRS, $DATARS)
  {
    $this->TRNUID = $TRNUID;
    $this->STATUS = $STATUS;
    $this->INVESTRS = $INVESTRS;
    $this->TEXTRS = $TEXTRS;
    $this->DATARS = $DATARS;
  }

}
