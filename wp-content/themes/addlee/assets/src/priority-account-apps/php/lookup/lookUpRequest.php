<?php

class lookUpRequest
{

  /**
   * 
   * @var string $UserId
   * @access public
   */
  public $UserId;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password;

  /**
   * 
   * @var string $TRNUID
   * @access public
   */
  public $TRNUID;

  /**
   * 
   * @var socCode $socCode
   * @access public
   */
  public $socCode;

  /**
   * 
   * @var lookUpInput $lookUpInput
   * @access public
   */
  public $lookUpInput;

  /**
   * 
   * @param string $UserId
   * @param string $Password
   * @param string $TRNUID
   * @param socCode $socCode
   * @param lookUpInput $lookUpInput
   * @access public
   */
  public function __construct($UserId, $Password, $TRNUID, $socCode, $lookUpInput)
  {
    $this->UserId = $UserId;
    $this->Password = $Password;
    $this->TRNUID = $TRNUID;
    $this->socCode = $socCode;
    $this->lookUpInput = $lookUpInput;
  }

}
