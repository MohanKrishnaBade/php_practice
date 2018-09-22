<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 3:26 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Throwables
{

    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

}

$customer = new stdClass();

try {
    $address = new Throwables($customer);

} catch (\Error $t) {
    echo 'handling12346';

} catch (Exception $e) {
    echo 'Exception';

} finally {
    echo 'cleanup';
}
