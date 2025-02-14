<?php

namespace App\Controllers;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController {

    public function checkout() {
        // Include the stripe configuration
        $stripeConfig = include __DIR__ . '/../config/stripe.php';
        
        \Stripe\Stripe::setApiKey($stripeConfig['secret_key']);

        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => 'Sample Product',
                            ],
                            'unit_amount' => 5000, 
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => 'http://localhost/AAAA-Eventbrite-Clone/success',
                'cancel_url' => 'http://localhost/AAAA-Eventbrite-Clone/cancel',
            ]);

            
            header("Location: " . $session->url);
            exit();
        } catch (\Exception $e) {
            echo 'Error creating Stripe session: ' . $e->getMessage();
        }
    }
}
