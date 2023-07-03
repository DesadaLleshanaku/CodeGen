<div class="snippetheader">Input</div>

<div class="snippetcode">$url = 'https://api.example.com/endpoint';
<br>$method = 'POST';
<br>$data = array(
<br>    'param1' => 'value1',
<br>    'param2' => 'value2'
<br>);
<br>$response = sendHTTPRequest($url, $method, $data);
<br>echo $response;
</div>

<div class="snippetheader">Response in Code</div>

<div class="snippetresppnse">The function sendHTTPRequest() is used to send a POST request to the specified URL (https://api.example.com/endpoint) with the provided data (param1 and param2).
<br>The response from the API endpoint will be stored in the $response variable and then echoed out.
</div>