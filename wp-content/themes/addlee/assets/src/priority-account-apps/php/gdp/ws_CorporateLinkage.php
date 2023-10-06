<?php

class ws_CorporateLinkage
{

  /**
   * 
   * @var prodOrderRequest_3 $corporateLinkageRequest
   * @access public
   */
  public $corporateLinkageRequest;

  /**
   * 
   * @param prodOrderRequest_3 $corporateLinkageRequest
   * @access public
   */
  public function __construct($corporateLinkageRequest)
  {
    $this->corporateLinkageRequest = $corporateLinkageRequest;
  }

}
