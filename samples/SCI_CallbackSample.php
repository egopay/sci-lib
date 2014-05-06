<?php
require(dirname(__FILE__).'/../sci/EgoPaySci.php');
try
{
    $oEgopay = new EgoPaySciCallback(array(
        'store_id'          => 'STORE ID',
        'store_password'    => 'STORE PASSWORD',
		'checksum_key'    	=> 'STORE CHECKSUM KEY',
    ));
    $aResponse = $oEgopay->getResponse($_POST);  
    
    /**
     * $aResponse = array(
     * 	'sId'        => (string), //'TEST MODE' if test mode is enabled
     *	'sDate'      => (string),
     *  'fAmount'    => (float) ,            
     *  'sCurrency'  => (string),
     *  'fFee'       => (float) , //Zero in test mode
     *  'sType'      => (string), //'TEST Store Received' in test mode
     *  'iTypeId'    => (string), //Zero in test mode
     *  'sEmail'     => (string),
     *  'sDetails'   => (string),
     *  'sStatus'    => (string), //'Completed' or 'TEST SUCCESS' in test mode
     *	 // OPTIONAL
     *  'cf_1'	     => (string),
     *  'cf_2'	     => (string),
     *  'cf_3'	     => (string),
     *  'cf_4'	     => (string),
     *  'cf_5'	     => (string),
     *  'cf_6'	     => (string),
     *  'cf_7'	     => (string),
     *  'cf_8'	     => (string),
     * 
     * );
     * 
     * Note: To check if payment was not made in test mode and is completed, 
     * you have to make sure that sStatus equals to 'Completed'
     */
    
    //@todo: check if order amount and currency is valid
    //@todo: check your order status
}
catch(EgoPayException $e)
{
    die($e->getMessage()); 
}
                