<?php

class PTFL_CMPA_SCR2
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
   * @var string $MDL_SEG_DESC
   * @access public
   */
  public $MDL_SEG_DESC;

  /**
   * 
   * @var string $SEG_BD_RTE
   * @access public
   */
  public $SEG_BD_RTE;

  /**
   * 
   * @param string $CLAS_SCR
   * @param string $RSK_LVL_DESC
   * @param string $BD_RTE
   * @param string $CLAS_SCR_INCDE_PCTG
   * @param string $MDL_SEG_DESC
   * @param string $SEG_BD_RTE
   * @access public
   */
  public function __construct($CLAS_SCR, $RSK_LVL_DESC, $BD_RTE, $CLAS_SCR_INCDE_PCTG, $MDL_SEG_DESC, $SEG_BD_RTE)
  {
    $this->CLAS_SCR = $CLAS_SCR;
    $this->RSK_LVL_DESC = $RSK_LVL_DESC;
    $this->BD_RTE = $BD_RTE;
    $this->CLAS_SCR_INCDE_PCTG = $CLAS_SCR_INCDE_PCTG;
    $this->MDL_SEG_DESC = $MDL_SEG_DESC;
    $this->SEG_BD_RTE = $SEG_BD_RTE;
  }

}
