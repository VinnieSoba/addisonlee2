<?php

class ws_GDM
{

  /**
   * 
   * @var prodOrderRequest_3 $gdmRequest
   * @access public
   */
  public $gdmRequest;

  /**
   * 
   * @param prodOrderRequest_3 $gdmRequest
   * @access public
   */
  public function __construct($gdmRequest)
  {
    $this->gdmRequest = $gdmRequest;
  }

}
