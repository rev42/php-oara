<?php
include_once(dirname(__FILE__) . '/../settings.php');

$network = new \Oara\Network\Publisher\CommissionJunction();
$credentials = [
    'apipassword' => '',
    'requestor_cid' => '',
    'id_site' => '',
];

$network->login($credentials);
if ($network->checkConnection()) {
    $startDate = new \DateTime('2018-04-06');
    $endDate = new \DateTime('2018-04-30');
    $transactionList = $network->getTransactionList(null, $startDate, $endDate);
    var_dump($transactionList);
    return;
}
echo "Network credentials not valid \n";
