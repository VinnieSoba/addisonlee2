<?php

class SECTION2
{

  /**
   * 
   * @var string $HDG
   * @access public
   */
  public $HDG;

  /**
   * 
   * @var string $BODY
   * @access public
   */
  public $BODY;

  /**
   * 
   * @param string $HDG
   * @param string $BODY
   * @access public
   */
  public function __construct($HDG, $BODY)
  {
    $this->HDG = $HDG;
    $this->BODY = $BODY;
  }

}
