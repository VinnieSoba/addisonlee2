<?php

class MTCH_BASS
{

  /**
   * 
   * @var array $MTCH_BASS_ENTR
   * @access public
   */
  public $MTCH_BASS_ENTR;

  /**
   * 
   * @var string $MTCH_CNT
   * @access public
   */
  public $MTCH_CNT;

  /**
   * 
   * @param array $MTCH_BASS_ENTR
   * @param string $MTCH_CNT
   * @access public
   */
  public function __construct($MTCH_BASS_ENTR, $MTCH_CNT)
  {
    $this->MTCH_BASS_ENTR = $MTCH_BASS_ENTR;
    $this->MTCH_CNT = $MTCH_CNT;
  }

}
