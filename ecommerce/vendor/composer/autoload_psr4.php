<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Stripe\\' => array($vendorDir . '/stripe/stripe-php/lib'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src', $vendorDir . '/psr/http-factory/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'PHPMailer\\PHPMailer\\' => array($baseDir . '/src', $vendorDir . '/phpmailer/phpmailer/src'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
);
