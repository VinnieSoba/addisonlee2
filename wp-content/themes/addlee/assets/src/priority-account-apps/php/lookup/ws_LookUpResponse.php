<?php

class ws_LookUpResponse
{

  /**
   * 
   * @var lookUpResponse $lookupResponse
   * @access public
   */
  public $lookupResponse;

  /**
   * 
   * @param lookUpResponse $lookupResponse
   * @access public
   */
  public function __construct($lookupResponse)
  {
    $this->lookupResponse = $lookupResponse;
  }

}
