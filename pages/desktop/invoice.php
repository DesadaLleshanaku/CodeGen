<?php
authenticatedpage();
if(isset($_POST['submit'])) {
    $list = sql_selectfull("SELECT * FROM `clients`");
    $invoice = sql_insert("INSERT INTO `invoices`(`client`, `amount`, `gst`) VALUES('".$_POST['tolist']."', '".$_POST['amount']."', '".$_POST['amount']."')");
    if($invoice) {
        redirectto("invoice");
    }

    /*$mailcontent = @'<div style="background-color: #EEEEEE; padding: 30px 0px;">
                            <div style="width: 500px; margin: auto; background-color: #FFFFFF; border:4px solid #000000;">
                                <div class="mainheader" style="font-size: 16px; font-family: Calibri; background-color: #000000; color: #FFFFFF; padding: 5px 5px;">
                                    <div style="float: left;">Malla Technologies</div>
                                    <div style="float: right;">(07) 3040 6264</div>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="mailbody" style="font-size: 13px; font-family: Calibri; padding: 15px;">
                                    {{mailbody}}
                                </div>
                                <div class="mailfooter" style="font-size: 10px; font-family: Calibri; background-color: #000000; color: #FFFFFF; padding: 5px 5px 2px 5px;">
                                    Copyrights &copy; 2015 - Malla Technologies
                                </div>
                            </div>
                        </div>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Malla Technologies<mailman@mallatechnologies.com.au>' . "\r\n";

    foreach ($list as $client) {

        $replacefrom = array("{{mailbody}}", "{{toperson}}", "{{toaddress}}", "{{tophone}}");
        $replaceto = array($_POST['message'], $client['fullname'], $client['address'], $client['phone']);
        $message = str_replace($replacefrom, $replaceto, $mailcontent);
        if(strlen($_POST['tolist']) > 1) {
            if(strpos($_POST['tolist'], $client['emailaddress']) !== false) {
                mail($client['emailaddress'], $_POST['subject'], $message, $headers);
            }
        }
        else {
            mail($client['emailaddress'], $_POST['subject'], $message, $headers);
        }
    }
    redirectto("sendemails");*/
}
?>

<form method="post" class="ui form">
    <div class="field">
        <label>Message To</label>
        <div class="ui search selection dropdown">
            <input name="tolist" type="hidden">
            <i class="dropdown icon"></i>
            <div class="default text">Client</div>
            <div class="menu">
                <?php
                $emailaccounts = sql_selectfull("SELECT * FROM `clients`");
                foreach ($emailaccounts as $accounts) {
                    echo '<div class="item" data-value="'.$accounts['id'].'">'.$accounts['fullname'].'</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="field">
        <label>Invoice Amount</label>
        <input type="text" name="amount" />
    </div>
    <div class="field">
        <label>GST</label>
        <select name="gst">
            <option value="add">Included</option>
            <option value="add">Excluded</option>
            <option value="add">No GST</option>
            <option value="add">Tax Free</option>
        </select>
    </div>
    <input type="submit" class="ui primary button" name="submit" value="Create Invoice" />
</form>