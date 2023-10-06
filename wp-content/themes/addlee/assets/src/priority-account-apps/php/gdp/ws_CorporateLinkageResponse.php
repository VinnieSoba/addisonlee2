<?php

class ws_CorporateLinkageResponse
{

  /**
   * 
   * @var CorporateLinkageResponse $corporateLinkageResponse
   * @access public
   */
  public $corporateLinkageResponse;

  /**
   * 
   * @param CorporateLinkageResponse $corporateLinkageResponse
   * @access public
   */
  public function __construct($corporateLinkageResponse)
  {
    $this->corporateLinkageResponse = $corporateLinkageResponse;
  }

}
