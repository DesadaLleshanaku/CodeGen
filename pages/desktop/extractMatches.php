<div class="snippetheader">Input</div>

<div class="snippetcode">$string = "Hello, students of FEUT! How are you doing, students?";
<br>$pattern = "/students/";
<br>$matchedOccurrences = extractMatches($string, $pattern);
<br> print_r($matchedOccurrences);

</div>

<div class="snippetheader">Response in Code</div>

<div class="snippetresppnse">Array
<br>(
<br>    [0] => students
<br>    [1] => students
<br>)
</div>