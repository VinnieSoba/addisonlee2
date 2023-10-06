<?php

class VBLTY_SCR
{

  /**
   * 
   * @var string $CLAS_SCR
   * @access public
   */
  public $CLAS_SCR;

  /**
   * 
   * @var string $RSK_LVL_DESC
   * @access public
   */
  public $RSK_LVL_DESC;

  /**
   * 
   * @var string $BD_RTE
   * @access public
   */
  public $BD_RTE;

  /**
   * 
   * @var string $CLAS_SCR_INCDE_PCTG
   * @access public
   */
  public $CLAS_SCR_INCDE_PCTG;

  /**
   * 
   * @var string $OVRL_BD_RTE
   * @access public
   */
  public $OVRL_BD_RTE;

  /**
   * 
   * @param string $CLAS_SCR
   * @param string $RSK_LVL_DESC
   * @param string $BD_RTE
   * @param string $CLAS_SCR_INCDE_PCTG
   * @param string $OVRL_BD_RTE
   * @access public
   */
  public function __construct($CLAS_SCR, $RSK_LVL_DESC, $BD_RTE, $CLAS_SCR_INCDE_PCTG, $OVRL_BD_RTE)
  {
    $this->CLAS_SCR = $CLAS_SCR;
    $this->RSK_LVL_DESC = $RSK_LVL_DESC;
    $this->BD_RTE = $BD_RTE;
    $this->CLAS_SCR_INCDE_PCTG = $CLAS_SCR_INCDE_PCTG;
    $this->OVRL_BD_RTE = $OVRL_BD_RTE;
  }

}
