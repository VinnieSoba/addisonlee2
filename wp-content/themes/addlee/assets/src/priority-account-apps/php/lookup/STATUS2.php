<?php

class STATUS2
{

  /**
   * 
   * @var string $SEVERITY
   * @access public
   */
  public $SEVERITY;

  /**
   * 
   * @var string $CODE
   * @access public
   */
  public $CODE;

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
   * @param string $SEVERITY
   * @param string $CODE
   * @param string $MESSAGE
   * @param string $TECH_MESSAGE
   * @param string $SUPPORT_MESSAGE
   * @access public
   */
  public function __construct($SEVERITY, $CODE, $MESSAGE, $TECH_MESSAGE, $SUPPORT_MESSAGE)
  {
    $this->SEVERITY = $SEVERITY;
    $this->CODE = $CODE;
    $this->MESSAGE = $MESSAGE;
    $this->TECH_MESSAGE = $TECH_MESSAGE;
    $this->SUPPORT_MESSAGE = $SUPPORT_MESSAGE;
  }

}
