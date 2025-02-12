<?php

class StripeController {
    public function getPublicKey() {
        $config = require __DIR__ . '/../config/stripe.php'; // Adjust path if needed
        header('Content-Type: application/json');
        echo json_encode(['publicKey' => $config['public_key']]);
    }
}
