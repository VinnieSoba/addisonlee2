<?php

class ws_GlobalProduct_eRam
{

  /**
   * 
   * @var prodOrderRequest_3 $globalProd_eRamRequest
   * @access public
   */
  public $globalProd_eRamRequest;

  /**
   * 
   * @param prodOrderRequest_3 $globalProd_eRamRequest
   * @access public
   */
  public function __construct($globalProd_eRamRequest)
  {
    $this->globalProd_eRamRequest = $globalProd_eRamRequest;
  }

}
