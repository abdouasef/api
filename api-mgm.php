<?php
if (isset($_GET['email'])) {
	//herukoc1@tuta.io

	if ($_GET['email']=="") {
	$err = array('message' =>'err email');

	echo json_encode($err);
	die();
}


  $email = $_GET['email'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://secure.moneygram.com/rest/register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"transactionType\":\"MONEY_TRANSFER\",\"sender\":{\"firstName\":\"laila\",\"middleName\":\"\",\"lastName\":\"laila\",\"secondLastName\":\"\",\"phoneNumber\":\"0754284224\",\"phoneType\":\"HOME\",\"email\":\"".$email."\",\"dateOfBirth\":\"1992-02-01\",\"country\":\"FRA\",\"promoSmsOptIn\":false,\"operationalSmsOptIn\":false,\"registrationIdInfo\":{},\"phoneCountryCode\":\"FRA\",\"phoneCountryDialingCode\":33,\"senderBirthCountry\":\"FRA\"},\"recipient\":{\"firstName\":\"\",\"middleName\":\"\",\"lastName\":\"\",\"secondLastName\":\"\",\"state\":\"\",\"country\":\"\"},\"transaction\":{\"currencyConversionRate\":0,\"sendCurrency\":\"EUR\",\"receiveCurrency\":\"\",\"sendAmount\":0,\"receiveAmount\":0,\"promotionsOptIn\":true,\"exchangeRateEstimated\":false,\"receiveAgentId\":\"\",\"deliveryOptionId\":\"\",\"receiveOption\":\"\",\"totalAmountToReceive\":0,\"totalAmountToCollect\":0},\"funding\":{\"creditCard\":{\"cardNumber\":\"\",\"expirationDate\":\"\",\"ccv\":\"\"},\"bankAccount\":{\"accountNumber\":\"\",\"routingNumber\":\"\"},\"offlineAccount\":{\"accountName\":\"\",\"accountType\":\"\"},\"photoIdInfo\":{\"senderPhotoIdType\":\"\",\"senderPhotoId\":\"\",\"senderPhotoIdState\":\"\",\"senderPhotoIdCountry\":\"FRA\",\"senderPhotoIdExpiration\":\"\"},\"billingAddress\":{\"addressLine1\":\"\",\"addressLine2\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"postalCode\":\"\"}},\"address\":{\"addressLine1\":\"Rue de Paris\",\"addressLine2\":\"gdfg dfdfg\",\"city\":\"Tremblay-en-France\",\"postalCode\":\"93290\",\"country\":\"FRA\"},\"promotionsOptIn\":true,\"signUpPlus\":false,\"plusOnly\":false,\"password\":\"Essa2014@\",\"confirmPassword\":\"Essa2014@\",\"mgoSessionId\":\"3e33018d-92df-4f94-9917-7c80c5cd4b3f\",\"accountOrigin\":\"webApp_standAlone\"}");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


$headers = array();
$headers[] = 'Origin: https://secure.moneygram.com';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Referer: https://secure.moneygram.com/mgo/fr/fr/account/register';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Locale-Header: fr_FR';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);
echo $result;

}else{
	$jsn = array('GET' =>'email' , 'TEST' =>'herukoc1@tuta.io');

	echo json_encode($jsn);
}




?>


