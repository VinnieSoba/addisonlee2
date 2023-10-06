<?php

class ORG_PFL_DTL2
{

  /**
   * 
   * @var string $ORG_PFL_RAT
   * @access public
   */
  public $ORG_PFL_RAT;

  /**
   * 
   * @var string $FINL_DATA_AVIL_INDC
   * @access public
   */
  public $FINL_DATA_AVIL_INDC;

  /**
   * 
   * @var TRD_DATA_AVLB_DTL2 $TRD_DATA_AVLB_DTL
   * @access public
   */
  public $TRD_DATA_AVLB_DTL;

  /**
   * 
   * @var ORG_SZ_DTL2 $ORG_SZ_DTL
   * @access public
   */
  public $ORG_SZ_DTL;

  /**
   * 
   * @var YRS_IN_BUS_DTL2 $YRS_IN_BUS_DTL
   * @access public
   */
  public $YRS_IN_BUS_DTL;

  /**
   * 
   * @param string $ORG_PFL_RAT
   * @param string $FINL_DATA_AVIL_INDC
   * @param TRD_DATA_AVLB_DTL2 $TRD_DATA_AVLB_DTL
   * @param ORG_SZ_DTL2 $ORG_SZ_DTL
   * @param YRS_IN_BUS_DTL2 $YRS_IN_BUS_DTL
   * @access public
   */
  public function __construct($ORG_PFL_RAT, $FINL_DATA_AVIL_INDC, $TRD_DATA_AVLB_DTL, $ORG_SZ_DTL, $YRS_IN_BUS_DTL)
  {
    $this->ORG_PFL_RAT = $ORG_PFL_RAT;
    $this->FINL_DATA_AVIL_INDC = $FINL_DATA_AVIL_INDC;
    $this->TRD_DATA_AVLB_DTL = $TRD_DATA_AVLB_DTL;
    $this->ORG_SZ_DTL = $ORG_SZ_DTL;
    $this->YRS_IN_BUS_DTL = $YRS_IN_BUS_DTL;
  }

}
