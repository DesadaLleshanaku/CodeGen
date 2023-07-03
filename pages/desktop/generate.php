

<div class="snippetheader">Input</div>

<div class="snippetcode">createform("text-First Name, text-Last Name, text-Email Address, text-Phone Number");</div>

<div class="snippetheader">Response in Code</div>

<textarea class="snippetresppnse">

<form method="post" class="ui form">
        <div class="field"><input type="text" placeholder="First Name" name="firstname"></div>
        <div class="field"><input type="text" placeholder=" Last Name" name="lastname"></div>
        <div class="field"><input type="text" placeholder=" Email Address" name="emailaddress"></div>
        <div class="field"><input type="text" placeholder=" Phone Number" name="phonenumber"></div>
        <div class="field"><input type="submit" value="Submit" name="dosubmit" class="ui fluid primary button"></div>
</form>
</textarea>

<div class="snippetheader">Response in Action</div>

<?php createform("text-First Name, text-Last Name, text-Email Address, text-Phone Number"); ?>