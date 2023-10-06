<?php

class AdditionalFields
{

  /**
   * 
   * @var string $FieldName
   * @access public
   */
  public $FieldName;

  /**
   * 
   * @var string $FieldValue
   * @access public
   */
  public $FieldValue;

  /**
   * 
   * @param string $FieldName
   * @param string $FieldValue
   * @access public
   */
  public function __construct($FieldName, $FieldValue)
  {
    $this->FieldName = $FieldName;
    $this->FieldValue = $FieldValue;
  }

}
