<?php

class GDMResponse
{

  /**
   * 
   * @var DGX4 $DGX
   * @access public
   */
  public $DGX;

  /**
   * 
   * @param DGX4 $DGX
   * @access public
   */
  public function __construct($DGX)
  {
    $this->DGX = $DGX;
  }

}
