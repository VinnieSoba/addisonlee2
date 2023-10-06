<?php

class prodOrderRequest_2
{

  /**
   * 
   * @var string $UserId
   * @access public
   */
  public $UserId;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password;

  /**
   * 
   * @var string $TRNUID
   * @access public
   */
  public $TRNUID;

  /**
   * 
   * @var string $SRVRTID
   * @access public
   */
  public $SRVRTID;

  /**
   * 
   * @var socCode $socCode
   * @access public
   */
  public $socCode;

  /**
   * 
   * @var Orders $Orders
   * @access public
   */
  public $Orders;

  /**
   * 
   * @var Immediate_Delivery $Immediate_Delivery
   * @access public
   */
  public $Immediate_Delivery;

  /**
   * 
   * @var Investigation $Investigation
   * @access public
   */
  public $Investigation;

  /**
   * 
   * @var array $AdditionalFields
   * @access public
   */
  public $AdditionalFields;

  /**
   * 
   * @param string $UserId
   * @param string $Password
   * @param string $TRNUID
   * @param string $SRVRTID
   * @param socCode $socCode
   * @param Orders $Orders
   * @param Immediate_Delivery $Immediate_Delivery
   * @param Investigation $Investigation
   * @param array $AdditionalFields
   * @access public
   */
  public function __construct($UserId, $Password, $TRNUID, $SRVRTID, $socCode, $Orders, $Immediate_Delivery, $Investigation, $AdditionalFields)
  {
    $this->UserId = $UserId;
    $this->Password = $Password;
    $this->TRNUID = $TRNUID;
    $this->SRVRTID = $SRVRTID;
    $this->socCode = $socCode;
    $this->Orders = $Orders;
    $this->Immediate_Delivery = $Immediate_Delivery;
    $this->Investigation = $Investigation;
    $this->AdditionalFields = $AdditionalFields;
  }

}
