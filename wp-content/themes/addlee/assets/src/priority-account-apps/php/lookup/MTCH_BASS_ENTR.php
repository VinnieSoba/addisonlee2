<?php

class MTCH_BASS_ENTR
{

  /**
   * 
   * @var string $SUBJ_TYPE_CD
   * @access public
   */
  public $SUBJ_TYPE_CD;

  /**
   * 
   * @var string $CEO_IND
   * @access public
   */
  public $CEO_IND;

  /**
   * 
   * @var string $MTCH_BASS_CD
   * @access public
   */
  public $MTCH_BASS_CD;

  /**
   * 
   * @var string $END_IND
   * @access public
   */
  public $END_IND;

  /**
   * 
   * @param string $SUBJ_TYPE_CD
   * @param string $CEO_IND
   * @param string $MTCH_BASS_CD
   * @param string $END_IND
   * @access public
   */
  public function __construct($SUBJ_TYPE_CD, $CEO_IND, $MTCH_BASS_CD, $END_IND)
  {
    $this->SUBJ_TYPE_CD = $SUBJ_TYPE_CD;
    $this->CEO_IND = $CEO_IND;
    $this->MTCH_BASS_CD = $MTCH_BASS_CD;
    $this->END_IND = $END_IND;
  }

}
