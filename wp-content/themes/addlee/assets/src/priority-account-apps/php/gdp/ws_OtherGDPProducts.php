<?php

class ws_OtherGDPProducts
{

  /**
   * 
   * @var prodOrderRequest_3 $GDPRequest
   * @access public
   */
  public $GDPRequest;

  /**
   * 
   * @param prodOrderRequest_3 $GDPRequest
   * @access public
   */
  public function __construct($GDPRequest)
  {
    $this->GDPRequest = $GDPRequest;
  }

}
