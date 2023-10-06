<?php

class Investigation
{

  /**
   * 
   * @var InvestigationDelivery $InvestigationDelivery
   * @access public
   */
  public $InvestigationDelivery;

  /**
   * 
   * @var NotificationDelivery $NotificationDelivery
   * @access public
   */
  public $NotificationDelivery;

  /**
   * 
   * @param InvestigationDelivery $InvestigationDelivery
   * @param NotificationDelivery $NotificationDelivery
   * @access public
   */
  public function __construct($InvestigationDelivery, $NotificationDelivery)
  {
    $this->InvestigationDelivery = $InvestigationDelivery;
    $this->NotificationDelivery = $NotificationDelivery;
  }

}
