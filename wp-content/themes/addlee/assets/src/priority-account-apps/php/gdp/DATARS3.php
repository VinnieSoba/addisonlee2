<?php

class DATARS3
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
   * @var SECTION4 $SECTION
   * @access public
   */
  public $SECTION;

  /**
   * 
   * @var CORPORATE_LINKAGE $CORPORATE_LINKAGE
   * @access public
   */
  public $CORPORATE_LINKAGE;

  /**
   * 
   * @param string $SRVRTID
   * @param string $GDA_ID
   * @param string $CACHE_IND
   * @param string $PRD_DT
   * @param SECTION4 $SECTION
   * @param CORPORATE_LINKAGE $CORPORATE_LINKAGE
   * @access public
   */
  public function __construct($SRVRTID, $GDA_ID, $CACHE_IND, $PRD_DT, $SECTION, $CORPORATE_LINKAGE)
  {
    $this->SRVRTID = $SRVRTID;
    $this->GDA_ID = $GDA_ID;
    $this->CACHE_IND = $CACHE_IND;
    $this->PRD_DT = $PRD_DT;
    $this->SECTION = $SECTION;
    $this->CORPORATE_LINKAGE = $CORPORATE_LINKAGE;
  }

}
