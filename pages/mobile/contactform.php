<h1 class="header">Contact us</h1>

<form autocomplete="off" class="ui fluid form segment" method="post">
    <div class="two fields">
        <div class="field">
            <label>First Name</label>
            <div class="ui icon input">
                <input type="text" name="first-name" placeholder="First Name">
                <i class="user icon"></i>
            </div>
        </div>
        <div class="field">
            <label>Last Name</label>
            <div class="ui icon input">
                <input type="text" name="last-name" placeholder="Last Name">
                <i class="user icon"></i>
            </div>
        </div>
    </div>
    <div class="two fields">
        <div class="required field">
            <label>Email</label>
            <div class="ui icon input">
                <input type="text" placeholder="Email Address" name="emailaddress">
                <i class="envelope icon"></i>
            </div>
        </div>
        <div class="required field">
            <label>Phone</label>
            <div class="ui icon input">
                <input type="text" placeholder="Phone Number" name="phone">
                <i class="call icon"></i>
            </div>
        </div>
    </div>

    <div class="required field">
        <label>Message</label>
        <div class="ui input">
            <textarea placeholder="Your Message" name="message"></textarea>
        </div>
    </div>

    <div class="ui buttons right floated">
        <a class="ui button" href="<?php echo $GLOBALS['baseurl']; ?>">Cancel</a>
        <div class="or"></div>
        <input type="submit" class="ui red button" name="dosubmit" value="Send Query" />
    </div>
    <p><br/></p>
</form>