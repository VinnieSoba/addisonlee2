<?php

class GDPResponse
{

  /**
   * 
   * @var DGX $DGX
   * @access public
   */
  public $DGX;

  /**
   * 
   * @param DGX $DGX
   * @access public
   */
  public function __construct($DGX)
  {
    $this->DGX = $DGX;
  }

}
