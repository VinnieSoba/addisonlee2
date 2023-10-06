<?php

class DELQ_SCR_ENTR
{

  /**
   * 
   * @var SCR_GRP2 $SCR_GRP
   * @access public
   */
  public $SCR_GRP;

  /**
   * 
   * @param SCR_GRP2 $SCR_GRP
   * @access public
   */
  public function __construct($SCR_GRP)
  {
    $this->SCR_GRP = $SCR_GRP;
  }

}
