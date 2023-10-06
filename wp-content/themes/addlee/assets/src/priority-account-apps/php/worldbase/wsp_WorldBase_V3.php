<?php

include_once('ws_WorldBase.php');
include_once('prodOrderRequest_2.php');
include_once('socCode.php');
include_once('Orders.php');
include_once('Immediate_Delivery.php');
include_once('Investigation.php');
include_once('InvestigationDelivery.php');
include_once('NotificationDelivery.php');
include_once('AdditionalFields.php');
include_once('ws_WorldBaseResponse.php');
include_once('worldBaseProductsResponse.php');
include_once('DGX.php');
include_once('SIGNONMSGSRSV1.php');
include_once('SONRS.php');
include_once('STATUS.php');
include_once('CREDITMSGSRSV2.php');
include_once('PROFILERS.php');
include_once('USR_CUST.php');
include_once('USR.php');
include_once('DATATRNRS.php');
include_once('STATUS2.php');
include_once('DATARS.php');


/**
 * 
 */
class wsp_WorldBase_V3 extends SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ws_WorldBase' => 'ws_WorldBase',
    'prodOrderRequest_2' => 'prodOrderRequest_2',
    'socCode' => 'socCode',
    'Orders' => 'Orders',
    'Immediate_Delivery' => 'Immediate_Delivery',
    'Investigation' => 'Investigation',
    'InvestigationDelivery' => 'InvestigationDelivery',
    'NotificationDelivery' => 'NotificationDelivery',
    'AdditionalFields' => 'AdditionalFields',
    'ws_WorldBaseResponse' => 'ws_WorldBaseResponse',
    'worldBaseProductsResponse' => 'worldBaseProductsResponse',
    'DGX' => 'DGX',
    'SIGNONMSGSRSV1' => 'SIGNONMSGSRSV1',
    'SONRS' => 'SONRS',
    'STATUS' => 'STATUS',
    'CREDITMSGSRSV2' => 'CREDITMSGSRSV2',
    'PROFILERS' => 'PROFILERS',
    'USR_CUST' => 'USR_CUST',
    'USR' => 'USR',
    'DATATRNRS' => 'DATATRNRS',
    'STATUS2' => 'STATUS2',
    'DATARS' => 'DATARS');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = '../wsdl/WorldBase_V3.wsdl')
  {
    foreach(self::$classmap as $key => $value)
    {
      if(!isset($options['classmap'][$key]))
      {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param ws_WorldBase $parameters
   * @access public
   */
  public function ws_WorldBase(ws_WorldBase $parameters)
  {
    return $this->__soapCall('ws_WorldBase', array($parameters));
  }

}
