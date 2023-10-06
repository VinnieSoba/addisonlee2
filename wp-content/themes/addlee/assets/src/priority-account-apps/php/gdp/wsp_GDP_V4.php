<?php

include_once('ws_OtherGDPProducts.php');
include_once('prodOrderRequest_3.php');
include_once('socCode.php');
include_once('Orders.php');
include_once('Immediate_Delivery.php');
include_once('Investigation.php');
include_once('InvestigationDelivery.php');
include_once('NotificationDelivery.php');
include_once('AdditionalFields.php');
include_once('ws_OtherGDPProductsResponse.php');
include_once('GDPResponse.php');
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
include_once('INVESTRS.php');
include_once('TEXTRS.php');
include_once('SECTION.php');
include_once('DATARS.php');
include_once('SECTION2.php');
include_once('FAIL_SCR_ENTR.php');
include_once('SCR_GRP.php');
include_once('DELQ_SCR_ENTR.php');
include_once('SCR_GRP2.php');
include_once('EMMA_SCR_ENTR.php');
include_once('SCR_GRP3.php');
include_once('DNB_VBLTY_RATG_ENTR.php');
include_once('VBLTY_SCR.php');
include_once('PTFL_CMPA_SCR.php');
include_once('DATA_DPTH_DTL.php');
include_once('ORG_PFL_DTL.php');
include_once('TRD_DATA_AVLB_DTL.php');
include_once('ORG_SZ_DTL.php');
include_once('YRS_IN_BUS_DTL.php');
include_once('SER_RAT_ENTR.php');
include_once('SCR_CMTY.php');
include_once('ws_GlobalProduct_eRam.php');
include_once('ws_GlobalProduct_eRamResponse.php');
include_once('globalProd_eramResponse.php');
include_once('DGX2.php');
include_once('SIGNONMSGSRSV12.php');
include_once('SONRS2.php');
include_once('STATUS3.php');
include_once('CREDITMSGSRSV22.php');
include_once('DATATRNRS2.php');
include_once('STATUS4.php');
include_once('DATARS2.php');
include_once('SECTION3.php');
include_once('eRAM.php');
include_once('FAIL_SCR_ENTR2.php');
include_once('SCR_GRP4.php');
include_once('DELQ_SCR_ENTR2.php');
include_once('SCR_GRP5.php');
include_once('DNB_VBLTY_RATG_ENTR2.php');
include_once('VBLTY_SCR2.php');
include_once('PTFL_CMPA_SCR2.php');
include_once('DATA_DPTH_DTL2.php');
include_once('ORG_PFL_DTL2.php');
include_once('TRD_DATA_AVLB_DTL2.php');
include_once('ORG_SZ_DTL2.php');
include_once('YRS_IN_BUS_DTL2.php');
include_once('SER_RAT_ENTR2.php');
include_once('SCR_CMTY2.php');
include_once('ws_CorporateLinkage.php');
include_once('ws_CorporateLinkageResponse.php');
include_once('CorporateLinkageResponse.php');
include_once('DGX3.php');
include_once('SIGNONMSGSRSV13.php');
include_once('SONRS3.php');
include_once('STATUS5.php');
include_once('CREDITMSGSRSV23.php');
include_once('DATATRNRS3.php');
include_once('STATUS6.php');
include_once('DATARS3.php');
include_once('SECTION4.php');
include_once('CORPORATE_LINKAGE.php');
include_once('ws_GDM.php');
include_once('ws_GDMResponse.php');
include_once('GDMResponse.php');
include_once('DGX4.php');
include_once('SIGNONMSGSRSV14.php');
include_once('SONRS4.php');
include_once('STATUS7.php');
include_once('CREDITMSGSRSV24.php');
include_once('DATATRNRS4.php');
include_once('STATUS8.php');
include_once('DATARS4.php');
include_once('RPT.php');
include_once('DCSN_INFO.php');
include_once('DELQ_SCR_ENTR3.php');
include_once('SCR_GRP6.php');
include_once('FAIL_SCR_ENTR3.php');
include_once('SCR_GRP7.php');
include_once('CUST_INP_DATA.php');
include_once('FLD_LST.php');
include_once('FLD_ATTR.php');
include_once('UPD_FLDS.php');
include_once('UPD_FLD.php');
include_once('KEY_FLDS.php');
include_once('KEY_FLD.php');
include_once('DNB_VBLTY_RATG_ENTR3.php');
include_once('VBLTY_SCR3.php');
include_once('PTFL_CMPA_SCR3.php');
include_once('DATA_DPTH_DTL3.php');
include_once('ORG_PFL_DTL3.php');
include_once('TRD_DATA_AVLB_DTL3.php');
include_once('ORG_SZ_DTL3.php');
include_once('YRS_IN_BUS_DTL3.php');
include_once('SER_RAT_ENTR3.php');
include_once('SCR_CMTY3.php');


/**
 * 
 */
class wsp_GDP_V4 extends SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ws_OtherGDPProducts' => 'ws_OtherGDPProducts',
    'prodOrderRequest_3' => 'prodOrderRequest_3',
    'socCode' => 'socCode',
    'Orders' => 'Orders',
    'Immediate_Delivery' => 'Immediate_Delivery',
    'Investigation' => 'Investigation',
    'InvestigationDelivery' => 'InvestigationDelivery',
    'NotificationDelivery' => 'NotificationDelivery',
    'AdditionalFields' => 'AdditionalFields',
    'ws_OtherGDPProductsResponse' => 'ws_OtherGDPProductsResponse',
    'GDPResponse' => 'GDPResponse',
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
    'INVESTRS' => 'INVESTRS',
    'TEXTRS' => 'TEXTRS',
    'SECTION' => 'SECTION',
    'DATARS' => 'DATARS',
    'SECTION2' => 'SECTION2',
    'FAIL_SCR_ENTR' => 'FAIL_SCR_ENTR',
    'SCR_GRP' => 'SCR_GRP',
    'DELQ_SCR_ENTR' => 'DELQ_SCR_ENTR',
    'SCR_GRP2' => 'SCR_GRP2',
    'EMMA_SCR_ENTR' => 'EMMA_SCR_ENTR',
    'SCR_GRP3' => 'SCR_GRP3',
    'DNB_VBLTY_RATG_ENTR' => 'DNB_VBLTY_RATG_ENTR',
    'VBLTY_SCR' => 'VBLTY_SCR',
    'PTFL_CMPA_SCR' => 'PTFL_CMPA_SCR',
    'DATA_DPTH_DTL' => 'DATA_DPTH_DTL',
    'ORG_PFL_DTL' => 'ORG_PFL_DTL',
    'TRD_DATA_AVLB_DTL' => 'TRD_DATA_AVLB_DTL',
    'ORG_SZ_DTL' => 'ORG_SZ_DTL',
    'YRS_IN_BUS_DTL' => 'YRS_IN_BUS_DTL',
    'SER_RAT_ENTR' => 'SER_RAT_ENTR',
    'SCR_CMTY' => 'SCR_CMTY',
    'ws_GlobalProduct_eRam' => 'ws_GlobalProduct_eRam',
    'ws_GlobalProduct_eRamResponse' => 'ws_GlobalProduct_eRamResponse',
    'globalProd_eramResponse' => 'globalProd_eramResponse',
    'DGX2' => 'DGX2',
    'SIGNONMSGSRSV12' => 'SIGNONMSGSRSV12',
    'SONRS2' => 'SONRS2',
    'STATUS3' => 'STATUS3',
    'CREDITMSGSRSV22' => 'CREDITMSGSRSV22',
    'DATATRNRS2' => 'DATATRNRS2',
    'STATUS4' => 'STATUS4',
    'DATARS2' => 'DATARS2',
    'SECTION3' => 'SECTION3',
    'eRAM' => 'eRAM',
    'FAIL_SCR_ENTR2' => 'FAIL_SCR_ENTR2',
    'SCR_GRP4' => 'SCR_GRP4',
    'DELQ_SCR_ENTR2' => 'DELQ_SCR_ENTR2',
    'SCR_GRP5' => 'SCR_GRP5',
    'DNB_VBLTY_RATG_ENTR2' => 'DNB_VBLTY_RATG_ENTR2',
    'VBLTY_SCR2' => 'VBLTY_SCR2',
    'PTFL_CMPA_SCR2' => 'PTFL_CMPA_SCR2',
    'DATA_DPTH_DTL2' => 'DATA_DPTH_DTL2',
    'ORG_PFL_DTL2' => 'ORG_PFL_DTL2',
    'TRD_DATA_AVLB_DTL2' => 'TRD_DATA_AVLB_DTL2',
    'ORG_SZ_DTL2' => 'ORG_SZ_DTL2',
    'YRS_IN_BUS_DTL2' => 'YRS_IN_BUS_DTL2',
    'SER_RAT_ENTR2' => 'SER_RAT_ENTR2',
    'SCR_CMTY2' => 'SCR_CMTY2',
    'ws_CorporateLinkage' => 'ws_CorporateLinkage',
    'ws_CorporateLinkageResponse' => 'ws_CorporateLinkageResponse',
    'CorporateLinkageResponse' => 'CorporateLinkageResponse',
    'DGX3' => 'DGX3',
    'SIGNONMSGSRSV13' => 'SIGNONMSGSRSV13',
    'SONRS3' => 'SONRS3',
    'STATUS5' => 'STATUS5',
    'CREDITMSGSRSV23' => 'CREDITMSGSRSV23',
    'DATATRNRS3' => 'DATATRNRS3',
    'STATUS6' => 'STATUS6',
    'DATARS3' => 'DATARS3',
    'SECTION4' => 'SECTION4',
    'CORPORATE_LINKAGE' => 'CORPORATE_LINKAGE',
    'ws_GDM' => 'ws_GDM',
    'ws_GDMResponse' => 'ws_GDMResponse',
    'GDMResponse' => 'GDMResponse',
    'DGX4' => 'DGX4',
    'SIGNONMSGSRSV14' => 'SIGNONMSGSRSV14',
    'SONRS4' => 'SONRS4',
    'STATUS7' => 'STATUS7',
    'CREDITMSGSRSV24' => 'CREDITMSGSRSV24',
    'DATATRNRS4' => 'DATATRNRS4',
    'STATUS8' => 'STATUS8',
    'DATARS4' => 'DATARS4',
    'RPT' => 'RPT',
    'DCSN_INFO' => 'DCSN_INFO',
    'DELQ_SCR_ENTR3' => 'DELQ_SCR_ENTR3',
    'SCR_GRP6' => 'SCR_GRP6',
    'FAIL_SCR_ENTR3' => 'FAIL_SCR_ENTR3',
    'SCR_GRP7' => 'SCR_GRP7',
    'CUST_INP_DATA' => 'CUST_INP_DATA',
    'FLD_LST' => 'FLD_LST',
    'FLD_ATTR' => 'FLD_ATTR',
    'UPD_FLDS' => 'UPD_FLDS',
    'UPD_FLD' => 'UPD_FLD',
    'KEY_FLDS' => 'KEY_FLDS',
    'KEY_FLD' => 'KEY_FLD',
    'DNB_VBLTY_RATG_ENTR3' => 'DNB_VBLTY_RATG_ENTR3',
    'VBLTY_SCR3' => 'VBLTY_SCR3',
    'PTFL_CMPA_SCR3' => 'PTFL_CMPA_SCR3',
    'DATA_DPTH_DTL3' => 'DATA_DPTH_DTL3',
    'ORG_PFL_DTL3' => 'ORG_PFL_DTL3',
    'TRD_DATA_AVLB_DTL3' => 'TRD_DATA_AVLB_DTL3',
    'ORG_SZ_DTL3' => 'ORG_SZ_DTL3',
    'YRS_IN_BUS_DTL3' => 'YRS_IN_BUS_DTL3',
    'SER_RAT_ENTR3' => 'SER_RAT_ENTR3',
    'SCR_CMTY3' => 'SCR_CMTY3');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = '../wsdl/GDP_V4.wsdl')
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
   * @param ws_CorporateLinkage $parameters
   * @access public
   */
  public function ws_CorporateLinkage(ws_CorporateLinkage $parameters)
  {
    return $this->__soapCall('ws_CorporateLinkage', array($parameters));
  }

  /**
   * 
   * @param ws_GDM $parameters
   * @access public
   */
  public function ws_GDM(ws_GDM $parameters)
  {
    return $this->__soapCall('ws_GDM', array($parameters));
  }

  /**
   * 
   * @param ws_GlobalProduct_eRam $parameters
   * @access public
   */
  public function ws_GlobalProduct_eRam(ws_GlobalProduct_eRam $parameters)
  {
    return $this->__soapCall('ws_GlobalProduct_eRam', array($parameters));
  }

  /**
   * 
   * @param ws_OtherGDPProducts $parameters
   * @access public
   */
  public function ws_OtherGDPProducts(ws_OtherGDPProducts $parameters)
  {
    return $this->__soapCall('ws_OtherGDPProducts', array($parameters));
  }

}
