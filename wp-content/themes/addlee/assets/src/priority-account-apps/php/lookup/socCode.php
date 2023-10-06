<?php

class socCode
{

  /**
   * 
   * @var string $AppId
   * @access public
   */
  public $AppId;

  /**
   * 
   * @var string $AppVer
   * @access public
   */
  public $AppVer;

  /**
   * 
   * @param string $AppId
   * @param string $AppVer
   * @access public
   */
  public function __construct($AppId, $AppVer)
  {
    $this->AppId = $AppId;
    $this->AppVer = $AppVer;
  }

}
