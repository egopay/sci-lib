<?php
require(dirname(__FILE__).'/../sci/EgoPaySci.php');
try {
        
    $oEgopay = new EgoPaySci(array(
        'store_id'          => 'STORE ID',
        'store_password'    => 'STORE PASSWORD'
    ));
    
    $sPaymentHash = $oEgopay->createHash(array(
	/*
	 * Payment amount with two decimal places 
	 */
        'amount'    => '3.00',
	/*
	 * Payment currency, USD/EUR
	 */
        'currency'  => 'USD',
	/*
	 * Description of the payment, limited to 120 chars
	 */
        'description' => 'My payment',
	
	/*
	 * Optional fields
	 */
	//'fail_url'	=> '',
	//'success_url'	=> '',
	
	/*
	 * 8 Custom fields, hidden from users, limited to 100 chars.
	 * You can retrieve them only from your callback file.
	 */
	//'cf_1' => '',
	//'cf_2' => '',
	//'cf_3' => '',
	//'cf_4' => '',
	//'cf_5' => '',
	//'cf_6' => '',
	//'cf_7' => '',
	//'cf_8' => '',
    ));
    
} catch (EgoPayException $e) {
    die($e->getMessage());
}

?>
<form action="<?php echo EgoPaySci::EGOPAY_PAYMENT_URL; ?>" method="post">    
    <input type="hidden" name="hash" value="<?php echo $sPaymentHash ?>" />
    <input type="submit" value="Confirm Payment" />
</form>