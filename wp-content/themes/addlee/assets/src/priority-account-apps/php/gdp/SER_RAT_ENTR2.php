<?php

class SER_RAT_ENTR2
{

  /**
   * 
   * @var string $RSK_SCR
   * @access public
   */
  public $RSK_SCR;

  /**
   * 
   * @var string $ALGM_ID
   * @access public
   */
  public $ALGM_ID;

  /**
   * 
   * @var SCR_CMTY2 $SCR_CMTY
   * @access public
   */
  public $SCR_CMTY;

  /**
   * 
   * @param string $RSK_SCR
   * @param string $ALGM_ID
   * @param SCR_CMTY2 $SCR_CMTY
   * @access public
   */
  public function __construct($RSK_SCR, $ALGM_ID, $SCR_CMTY)
  {
    $this->RSK_SCR = $RSK_SCR;
    $this->ALGM_ID = $ALGM_ID;
    $this->SCR_CMTY = $SCR_CMTY;
  }

}
