<div class="snippetheader">Input</div>

<div class="snippetcode">$string = "Hello World! How Are You?";
<br>$slug = generateSlug($string);
</div>

<div class="snippetheader">Response in Code</div>

<div class="snippetresppnse">
   The input string "Hello World! How Are You?" is converted to lowercase, unwanted characters and spaces are removed, and consecutive dashes are replaced with a single dash. The output will be "hello-world-how-are-you", 
   which is a URL-friendly slug derived from the given string.
The generated slug can be used in URLs to provide a clean and readable representation of the original string.
</div>
