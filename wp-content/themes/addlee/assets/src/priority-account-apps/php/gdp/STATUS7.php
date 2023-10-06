<?php

class STATUS7
{

  /**
   * 
   * @var string $CODE
   * @access public
   */
  public $CODE;

  /**
   * 
   * @var string $SEVERITY
   * @access public
   */
  public $SEVERITY;

  /**
   * 
   * @var string $MESSAGE
   * @access public
   */
  public $MESSAGE;

  /**
   * 
   * @var string $TECH_MESSAGE
   * @access public
   */
  public $TECH_MESSAGE;

  /**
   * 
   * @var string $SUPPORT_MESSAGE
   * @access public
   */
  public $SUPPORT_MESSAGE;

  /**
   * 
   * @param string $CODE
   * @param string $SEVERITY
   * @param string $MESSAGE
   * @param string $TECH_MESSAGE
   * @param string $SUPPORT_MESSAGE
   * @access public
   */
  public function __construct($CODE, $SEVERITY, $MESSAGE, $TECH_MESSAGE, $SUPPORT_MESSAGE)
  {
    $this->CODE = $CODE;
    $this->SEVERITY = $SEVERITY;
    $this->MESSAGE = $MESSAGE;
    $this->TECH_MESSAGE = $TECH_MESSAGE;
    $this->SUPPORT_MESSAGE = $SUPPORT_MESSAGE;
  }

}
