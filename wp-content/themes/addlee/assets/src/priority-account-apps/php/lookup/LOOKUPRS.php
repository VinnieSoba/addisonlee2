<?php

class LOOKUPRS
{

  /**
   * 
   * @var array $LOOKUPRSCOMPANY
   * @access public
   */
  public $LOOKUPRSCOMPANY;

  /**
   * 
   * @var string $SRVTID
   * @access public
   */
  public $SRVTID;

  /**
   * 
   * @param array $LOOKUPRSCOMPANY
   * @param string $SRVTID
   * @access public
   */
  public function __construct($LOOKUPRSCOMPANY, $SRVTID)
  {
    $this->LOOKUPRSCOMPANY = $LOOKUPRSCOMPANY;
    $this->SRVTID = $SRVTID;
  }

}
