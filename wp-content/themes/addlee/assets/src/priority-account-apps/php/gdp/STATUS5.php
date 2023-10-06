<?php

class STATUS5
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
   * @param string $CODE
   * @param string $SEVERITY
   * @param string $MESSAGE
   * @access public
   */
  public function __construct($CODE, $SEVERITY, $MESSAGE)
  {
    $this->CODE = $CODE;
    $this->SEVERITY = $SEVERITY;
    $this->MESSAGE = $MESSAGE;
  }

}
