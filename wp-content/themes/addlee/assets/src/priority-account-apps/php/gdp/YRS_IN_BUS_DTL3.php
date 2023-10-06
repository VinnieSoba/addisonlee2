<?php

class YRS_IN_BUS_DTL3
{

  /**
   * 
   * @var string $YRS_IN_BUS_CATG_TXT
   * @access public
   */
  public $YRS_IN_BUS_CATG_TXT;

  /**
   * 
   * @var array $ASMT_TXT
   * @access public
   */
  public $ASMT_TXT;

  /**
   * 
   * @param string $YRS_IN_BUS_CATG_TXT
   * @param array $ASMT_TXT
   * @access public
   */
  public function __construct($YRS_IN_BUS_CATG_TXT, $ASMT_TXT)
  {
    $this->YRS_IN_BUS_CATG_TXT = $YRS_IN_BUS_CATG_TXT;
    $this->ASMT_TXT = $ASMT_TXT;
  }

}
