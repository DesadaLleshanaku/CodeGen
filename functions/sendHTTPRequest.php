<?php
function sendHTTPRequest($url, $method = 'GET', $data = array()) {
    // Initialize cURL session
    $curl = curl_init();

    // Set the cURL options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));

    // Set the request data if provided
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    }

    // Execute the request and get the response
    $response = curl_exec($curl);

    // Check for errors
    if ($response === false) {
        $error = curl_error($curl);
        curl_close($curl);
        return "Error: " . $error;
    }

    // Close the cURL session
    curl_close($curl);

    // Return the response
    return $response;
}

?>