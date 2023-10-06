<?php

class ORG_SZ_DTL3
{

  /**
   * 
   * @var string $ORG_SZ_CATG_TXT
   * @access public
   */
  public $ORG_SZ_CATG_TXT;

  /**
   * 
   * @var array $ASMT_TXT
   * @access public
   */
  public $ASMT_TXT;

  /**
   * 
   * @param string $ORG_SZ_CATG_TXT
   * @param array $ASMT_TXT
   * @access public
   */
  public function __construct($ORG_SZ_CATG_TXT, $ASMT_TXT)
  {
    $this->ORG_SZ_CATG_TXT = $ORG_SZ_CATG_TXT;
    $this->ASMT_TXT = $ASMT_TXT;
  }

}
