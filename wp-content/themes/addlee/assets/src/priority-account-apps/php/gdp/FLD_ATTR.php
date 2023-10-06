<?php

class FLD_ATTR
{

  /**
   * 
   * @var string $FLD_NME
   * @access public
   */
  public $FLD_NME;

  /**
   * 
   * @var string $FLD_DESC
   * @access public
   */
  public $FLD_DESC;

  /**
   * 
   * @var string $FLD_VAL
   * @access public
   */
  public $FLD_VAL;

  /**
   * 
   * @param string $FLD_NME
   * @param string $FLD_DESC
   * @param string $FLD_VAL
   * @access public
   */
  public function __construct($FLD_NME, $FLD_DESC, $FLD_VAL)
  {
    $this->FLD_NME = $FLD_NME;
    $this->FLD_DESC = $FLD_DESC;
    $this->FLD_VAL = $FLD_VAL;
  }

}
