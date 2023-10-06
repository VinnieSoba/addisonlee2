<?php

class CorporateLinkageResponse
{

  /**
   * 
   * @var DGX3 $DGX
   * @access public
   */
  public $DGX;

  /**
   * 
   * @param DGX3 $DGX
   * @access public
   */
  public function __construct($DGX)
  {
    $this->DGX = $DGX;
  }

}
