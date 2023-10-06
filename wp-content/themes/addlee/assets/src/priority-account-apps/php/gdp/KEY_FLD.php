<?php

class KEY_FLD
{

  /**
   * 
   * @var string $NME
   * @access public
   */
  public $NME;

  /**
   * 
   * @var string $VAL
   * @access public
   */
  public $VAL;

  /**
   * 
   * @param string $NME
   * @param string $VAL
   * @access public
   */
  public function __construct($NME, $VAL)
  {
    $this->NME = $NME;
    $this->VAL = $VAL;
  }

}
