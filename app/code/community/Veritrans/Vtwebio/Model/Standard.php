<?php
/**
 * Veritrans VT Web Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtweb_Model_Standard
 * @author     Kisman Hong, plihplih.com
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtweb_PaymentController class
 */
class Veritrans_Vtwebio_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'vtwebio';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'vtwebio/form';
	protected $_infoBlockType = 'vtwebio/info';
	
	// call to redirectAction function at Veritrans_Vtweb_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('vtwebio/payment/redirect', array('_secure' => true));
	}
}
?>