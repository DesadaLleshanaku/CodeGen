<?php
pagetitle("Register");

$registratcheck = sql_selectfull("SELECT `status` from `settings` WHERE `id` = 1");


    if($_POST['dosubmit']) {
        $addaccount = sql_insert("INSERT INTO `accounts`(`firstname`, `lastname`, `emailaddress`, `location`, `gender`, `phone`, `username`, `password`, `role`) VALUES('" . $_POST['first-name'] . "', '" . $_POST['last-name'] . "', '" . $_POST['emailaddress'] . "', '" . $_POST['location'] . "', '" . $_POST['gender'] . "', '" . $_POST['phone'] . "', '" . $_POST['username'] . "', '" . $_POST['password'] . "', 'user')");
        if($addaccount){
            redirectto($GLOBALS['baseurl']."confirmation");
        }
    }
if($registratcheck['status'] == 1) {
?>

    <script>

        $('.registrationform').form({
            gender: {
                identifier  : 'gender',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter a gender'
                    }
                ]
            },
            name: {
                identifier  : 'fullname',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter your name'
                    }
                ]
            }
        });

    </script>

<form autocomplete="off" class="ui fluid form segment registrationform" method="post">
    <h4 class="ui dividing header">Personal Information</h4>
    <div class="two fields">
        <div class="field">
            <label>First Name</label>
                    <input type="text" name="first-name" placeholder="First Name">
         </div>
        <div class="field">
            <label>Last Name</label>
                    <input type="text" name="last-name" placeholder="Last Name">
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>State</label>
            <div class="ui selection dropdown">
                <input type="hidden" name="location">
                <div class="default text">State</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="QLD">Queensland</div>
                    <div class="item" data-value="NSW">New South Wales</div>
                    <div class="item" data-value="VIC">Victoria</div>
                    <div class="item" data-value="SA">South Australia</div>
                    <div class="item" data-value="NT">Northern Territory</div>
                    <div class="item" data-value="WA">Western Australia</div>
                    <div class="item" data-value="TAS">Tasmania</div>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="field">
                <label>Gender</label>
                <div class="ui selection dropdown">
                    <input type="hidden" name="gender">
                    <div class="default text">Gender</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item" data-value="male">Male</div>
                        <div class="item" data-value="female">Female</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="ui dividing header">Account Info</h4>
    <div class="two fields">
        <div class="required field">
            <label>Username</label>
            <div class="ui icon input">
                <input type="text" placeholder="Username" name="username">
                <i class="user icon"></i>
            </div>
        </div>
        <div class="required field">
            <label>Password</label>
            <div class="ui icon input">
                <input type="password" placeholder="Password" name="password">
                <i class="lock icon"></i>
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

    <div class="ui divider"></div>
    <div class="field">
        <div class="ui checkbox">
            <input type="checkbox" name="hot-deals">
            <label>I agree to the <a href="#">Terms of Service</a>.</label>
        </div>
    </div>
    <div class="ui error message">
        <div class="header">We noticed some issues</div>
    </div>
    <div class="ui buttons right floated">
        <a class="ui button" href="<?php echo $GLOBALS['baseurl']; ?>">Cancel</a>
        <div class="or"></div>
        <input type="submit" class="ui orange button" name="dosubmit" value="Register" />
    </div>
</form>
<?php } else { ?>

    Self registrations are currently disabled by the admin, please contact admin to obtain your login details.

<?php } ?>