<div class="snippetheader">Input</div>

<div class="snippetcode">sanitizeInput("<//script>alert('XSS attack!');<///script>";);
</div>

<div class="snippetheader">Response in Code</div>

<div class="snippetresppnse">
    The input string "<//script>alert('XSS attack!');<///script>"; would be sanitized and the output would be &lt;script&gt;alert('XSS attack!');&lt;/script&gt;, 
    with the HTML tags and potentially harmful characters removed.
</div>
