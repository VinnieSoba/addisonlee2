<?php

class INVESTRS
{

  /**
   * 
   * @var string $SRVTID_INV
   * @access public
   */
  public $SRVTID_INV;

  /**
   * 
   * @var string $GDA_ID_INV
   * @access public
   */
  public $GDA_ID_INV;

  /**
   * 
   * @param string $SRVTID_INV
   * @param string $GDA_ID_INV
   * @access public
   */
  public function __construct($SRVTID_INV, $GDA_ID_INV)
  {
    $this->SRVTID_INV = $SRVTID_INV;
    $this->GDA_ID_INV = $GDA_ID_INV;
  }

}
