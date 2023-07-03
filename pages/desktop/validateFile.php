
<div class="snippetheader">Input</div>

<div class="snippetcode">$file = $_FILES['file']; 
<br>$allowedTypes = "jpg,png,gif"; 
<br>$maxSize = 1024 * 1024; 
</div>

<div class="snippetheader">Response in Code</div>

<div class="snippetresppnse">
   In this example, the function validateFile() is used to check if the uploaded file is valid based on the allowed file types ("jpg", "png", and "gif") 
   and the maximum file size of 1MB (1024 * 1024 bytes). The code will output "File is valid." if the file passes the validation, or "File is invalid." otherwise.
</div>