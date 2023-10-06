<?php

class DNB_VBLTY_RATG_ENTR2
{

  /**
   * 
   * @var string $RAT_DT
   * @access public
   */
  public $RAT_DT;

  /**
   * 
   * @var string $DNB_VBLTY_RATG
   * @access public
   */
  public $DNB_VBLTY_RATG;

  /**
   * 
   * @var VBLTY_SCR2 $VBLTY_SCR
   * @access public
   */
  public $VBLTY_SCR;

  /**
   * 
   * @var PTFL_CMPA_SCR2 $PTFL_CMPA_SCR
   * @access public
   */
  public $PTFL_CMPA_SCR;

  /**
   * 
   * @var DATA_DPTH_DTL2 $DATA_DPTH_DTL
   * @access public
   */
  public $DATA_DPTH_DTL;

  /**
   * 
   * @var ORG_PFL_DTL2 $ORG_PFL_DTL
   * @access public
   */
  public $ORG_PFL_DTL;

  /**
   * 
   * @param string $RAT_DT
   * @param string $DNB_VBLTY_RATG
   * @param VBLTY_SCR2 $VBLTY_SCR
   * @param PTFL_CMPA_SCR2 $PTFL_CMPA_SCR
   * @param DATA_DPTH_DTL2 $DATA_DPTH_DTL
   * @param ORG_PFL_DTL2 $ORG_PFL_DTL
   * @access public
   */
  public function __construct($RAT_DT, $DNB_VBLTY_RATG, $VBLTY_SCR, $PTFL_CMPA_SCR, $DATA_DPTH_DTL, $ORG_PFL_DTL)
  {
    $this->RAT_DT = $RAT_DT;
    $this->DNB_VBLTY_RATG = $DNB_VBLTY_RATG;
    $this->VBLTY_SCR = $VBLTY_SCR;
    $this->PTFL_CMPA_SCR = $PTFL_CMPA_SCR;
    $this->DATA_DPTH_DTL = $DATA_DPTH_DTL;
    $this->ORG_PFL_DTL = $ORG_PFL_DTL;
  }

}
