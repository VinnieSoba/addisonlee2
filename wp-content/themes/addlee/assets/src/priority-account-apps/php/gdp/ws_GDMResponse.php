<?php

class ws_GDMResponse
{

  /**
   * 
   * @var GDMResponse $gdmResponse
   * @access public
   */
  public $gdmResponse;

  /**
   * 
   * @param GDMResponse $gdmResponse
   * @access public
   */
  public function __construct($gdmResponse)
  {
    $this->gdmResponse = $gdmResponse;
  }

}
