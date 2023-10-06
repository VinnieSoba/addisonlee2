<?php

class SECTION
{

  /**
   * 
   * @var string $HDG
   * @access public
   */
  public $HDG;

  /**
   * 
   * @var string $FIELD
   * @access public
   */
  public $FIELD;

  /**
   * 
   * @param string $HDG
   * @param string $FIELD
   * @access public
   */
  public function __construct($HDG, $FIELD)
  {
    $this->HDG = $HDG;
    $this->FIELD = $FIELD;
  }

}
