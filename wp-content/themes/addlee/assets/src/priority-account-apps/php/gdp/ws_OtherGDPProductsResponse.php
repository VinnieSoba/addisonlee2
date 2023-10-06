<?php

class ws_OtherGDPProductsResponse
{

  /**
   * 
   * @var GDPResponse $GDPResponse
   * @access public
   */
  public $GDPResponse;

  /**
   * 
   * @param GDPResponse $GDPResponse
   * @access public
   */
  public function __construct($GDPResponse)
  {
    $this->GDPResponse = $GDPResponse;
  }

}
