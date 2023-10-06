<?php

class ws_WorldBase
{

  /**
   * 
   * @var prodOrderRequest_2 $worldBaseRequest
   * @access public
   */
  public $worldBaseRequest;

  /**
   * 
   * @param prodOrderRequest_2 $worldBaseRequest
   * @access public
   */
  public function __construct($worldBaseRequest)
  {
    $this->worldBaseRequest = $worldBaseRequest;
  }

}
