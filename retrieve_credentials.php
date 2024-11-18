<?php
// Function to retrieve client credentials
function getClientCredentials() {
    // Fetch environment variables
    $client_id = getenv('CLIENT_ID');
    $client_secret = getenv('CLIENT_SECRET');

    // Validate if the credentials are set
    if (!$client_id || !$client_secret) {
        return json_encode(['error' => 'Client credentials not found']);
    }

    // Return credentials as a JSON object
    return json_encode([
        'client_id' => $client_id,
        'client_secret' => $client_secret
    ]);
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'getClientCredentials') {
        echo getClientCredentials();
    }
    exit;
}
