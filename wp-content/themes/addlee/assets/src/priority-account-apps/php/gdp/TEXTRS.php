<?php

class TEXTRS
{

  /**
   * 
   * @var string $TITLE
   * @access public
   */
  public $TITLE;

  /**
   * 
   * @var SECTION $SECTION
   * @access public
   */
  public $SECTION;

  /**
   * 
   * @param string $TITLE
   * @param SECTION $SECTION
   * @access public
   */
  public function __construct($TITLE, $SECTION)
  {
    $this->TITLE = $TITLE;
    $this->SECTION = $SECTION;
  }

}
