<?php

class DATARS2
{

  /**
   * 
   * @var string $SRVRTID
   * @access public
   */
  public $SRVRTID;

  /**
   * 
   * @var string $GDA_ID
   * @access public
   */
  public $GDA_ID;

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
   * @var SECTION3 $SECTION
   * @access public
   */
  public $SECTION;

  /**
   * 
   * @var eRAM $eRAM
   * @access public
   */
  public $eRAM;

  /**
   * 
   * @param string $SRVRTID
   * @param string $GDA_ID
   * @param string $CACHE_IND
   * @param string $PRD_DT
   * @param SECTION3 $SECTION
   * @param eRAM $eRAM
   * @access public
   */
  public function __construct($SRVRTID, $GDA_ID, $CACHE_IND, $PRD_DT, $SECTION, $eRAM)
  {
    $this->SRVRTID = $SRVRTID;
    $this->GDA_ID = $GDA_ID;
    $this->CACHE_IND = $CACHE_IND;
    $this->PRD_DT = $PRD_DT;
    $this->SECTION = $SECTION;
    $this->eRAM = $eRAM;
  }

}
