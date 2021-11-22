<?php

$routes->group('admin',function ($routes){
    // Register
    $routes->match(['get','post'],'register','Backend\Register::index',['as'=>'admin_register']);
    // Verification
    $routes->group('verification',function ($routes){
        $routes->get('account/(:segment)','Backend\Verification::account/$1',['as' => 'admin_account_verify']);
    });
});



