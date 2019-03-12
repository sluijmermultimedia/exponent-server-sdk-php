# exponent-server-sdk-php
Server-side library for working with Expo push notifications using PHP
Without storing the tokens by default


[![Latest Stable Version](https://poser.pugx.org/alymosul/exponent-server-sdk-php/v/stable)](https://packagist.org/packages/alymosul/exponent-server-sdk-php)
[![License](https://poser.pugx.org/alymosul/exponent-server-sdk-php/license)](https://packagist.org/packages/alymosul/exponent-server-sdk-php)
[![Total Downloads](https://poser.pugx.org/alymosul/exponent-server-sdk-php/downloads)](https://packagist.org/packages/alymosul/exponent-server-sdk-php)

# Usage
- composer.json
        
        "repositories": [
            {
              "type": "vcs",
              "url": "https://github.com/sluijmermultimedia/exponent-server-sdk-php"
            }
          ],
          "require": {
            "php": ">=7.1.0",
            "alymosul/exponent-server-sdk-php": "dev-master"
          }
          

        
        
- In a php file
        
        require_once __DIR__.'/vendor/autoload.php';
        
        $expo = new \ExponentPhpSDK\Expo();
        // Build the notification data
        $notification = ['body' => 'Hello World!'];
        // Notify an interest with a notification
        $expo->notify($interestDetails, $notification);
        
Data can be added to notifications by providing it as a JSON object. For example


        // Build the notification data
        $notification = ['body' => 'Hello World!', 'data'=> json_encode(array('someData' => 'goes here'))];

# TODO
- Need to create tests    

# Laravel driver
- There's an expo notifications driver built for laravel apps that's ready to use, you can find it here.. https://github.com/Alymosul/laravel-exponent-push-notifications
