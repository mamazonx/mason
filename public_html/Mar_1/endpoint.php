<?php
/**
 * Created by PhpStorm.
 * User: still
 * Date: 2/27/2018
 * Time: 2:09 PM
 */
require_once dirname(dirname(__DIR__)) . '/src/bootstrap.php';

require 'vendor/autoload.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE","phplog");

// Common setup for API credentials
$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
$merchantAuthentication->setName("YOUR_API_LOGIN_ID");
$merchantAuthentication->setTransactionKey("YOUR_TRANSACTION_KEY");
$refId = 'ref' . time();

// Create the payment data for a credit card

$creditCard = new AnetAPI\CreditCardType();
$creditCard->setCardNumber("4111111111111111" );
$creditCard->setExpirationDate( "2038-12");
$paymentOne = new AnetAPI\PaymentType();
$paymentOne->setCreditCard($creditCard);



// Create a transaction

$transactionRequestType = new AnetAPI\TransactionRequestType();
$transactionRequestType->setTransactionType("authCaptureTransaction");
$transactionRequestType->setAmount(151.51);
$transactionRequestType->setPayment($paymentOne);
$request = new AnetAPI\CreateTransactionRequest();
$request->setMerchantAuthentication($merchantAuthentication);
$request->setRefId( $refId);
$request->setTransactionRequest($transactionRequestType);
$controller = new AnetController\CreateTransactionController($request);
$response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
$body = null;
if ($response != null)

{
    $tresponse = $response->getTransactionResponse();

    if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))

    {
        $body .= "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
        $body .= "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
    }
    else
    {
        $body .= "Charge Credit Card ERROR :  Invalid response\n";
    }

}

else
{
    $body .=  "Charge Credit Card Null response returned";
}

$title = substr(__FILE__, strlen(__DIR__ . DIRECTORY_SEPARATOR), strlen(__FILE__));
include __DIR__ . '/view.php';

?>