<?php

class ws_WorldBaseResponse
{

  /**
   * 
   * @var worldBaseProductsResponse $worldBaseResponse
   * @access public
   */
  public $worldBaseResponse;

  /**
   * 
   * @param worldBaseProductsResponse $worldBaseResponse
   * @access public
   */
  public function __construct($worldBaseResponse)
  {
    $this->worldBaseResponse = $worldBaseResponse;
  }

}
