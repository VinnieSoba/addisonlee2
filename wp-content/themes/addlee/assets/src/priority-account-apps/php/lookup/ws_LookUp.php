<?php

class ws_LookUp
{

  /**
   * 
   * @var lookUpRequest $lookUpRequest
   * @access public
   */
  public $lookUpRequest;

  /**
   * 
   * @param lookUpRequest $lookUpRequest
   * @access public
   */
  public function __construct($lookUpRequest)
  {
    $this->lookUpRequest = $lookUpRequest;
  }

}
