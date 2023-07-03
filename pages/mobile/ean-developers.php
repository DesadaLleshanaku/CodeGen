<?php pagetitle("Web Design Brisbane");

insertrecord("quotes", "submission");
sql_insert("INSERT INTO `visitors`(`ipaddress`, `type`) VALUE ('".$_SERVER['REMOTE_ADDR']."', 'mobile')");
?>
<style type="text/css">
    .ui.segment { box-shadow: none; border: none; margin:0px 0px 0px 0px !important; }
</style>

<img src="images/uploads/web-design-banner.png" class="ui image" />

<div class="ui hidden divider"></div>


<img src="images/uploads/web-design-wireframes.gif" class="ui image right floated" />

<h2 class="ui header">Why Malla Technologies?</h2>
<p style="margin:0 0 0.5em">Unlike other Web Design companies in Brisbane who doesn't even have an attractive website and use template based designs, we are not into that category. Our expert team has up to 10 years of experience and Master Degrees in what they are doing. We do provide 100% satisfaction guaranteed, else you don't need to pay us a cent.</p>

<div style="background-color: #E4545B;"><img src="images/uploads/satisfaction.png" class="ui image" /></div>

<div class="ui divider"></div>

<p style="text-align: center;">Get a dedicated EAN Expert Developer from $45/hour.</p>

<div class="ui divider"></div>

<div class="innercontainer">
    <div class="container">
        <div class="ui grid" id="web-design-features">
            <div class="sixteen wide column" style="color:#FFFFFF;">

                <div class="ui divided items">
                    <div class="item">
                        <div class="image">
                            <img src="/images/uploads/content-management-system.jpg">
                        </div>
                        <div class="content">
                            <span class="header">Database Import</span>
                            <div class="description">
                                <p>We can import that lite version (25GB) of database or full version (200GB) of database into your server with our large data import tools, which is not possible with traditional developer tools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="/images/uploads/responsive-web-design1.jpg">
                        </div>
                        <div class="content">
                            <span class="header">API Connection</span>
                            <div class="description">
                                <p>We are familier with all Expedia APIs and we can connect your website with Expedia's API to search for hotels, obtain live pricing and make bookings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="/images/uploads/seo-friendly.jpg">
                        </div>
                        <div class="content">
                            <span class="header">SEO Friendly</span>
                            <div class="description">
                                <p>We follow structured markup language which allows Google to smoothly read and understand your website, which obviously leads to rank better. We use all required SEO tags.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="/images/uploads/professional-team.jpg">
                        </div>
                        <div class="content">
                            <span class="header">Professional Team</span>
                            <div class="description">
                                <p>Our team holds Master degrees in what they are doing and they are professionals in developing responsive websites with strict SEO tags.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="/images/uploads/web-hosting.jpg">
                        </div>
                        <div class="content">
                            <span class="header">Web Hosting & Configuration</span>
                            <div class="description">
                                <p>We can provide reliable Web Hosting and can configure server for Expedia's Affiliate Network Sites.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="/images/uploads/integrations.jpg">
                        </div>
                        <div class="content">
                            <span class="header">Integrations</span>
                            <div class="description">
                                <p>We can integrate Payment gateway, Social Media and analytics to EAN build websites.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui hidden divider"></div>
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="ui grid">
                    <div class="five wide column right aligned">
                        <i class="call big icon"></i>
                    </div>
                    <div class="eleven wide column left aligned">
                        <p>(07) 3040 6264</p>
                        <p class="small">10AM - 5PM [MONDAY - FRIDAY]</p>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="ui grid">
                <div class="five wide column right aligned">
                    <i class="envelope big icon"></i>
                </div>
                <div class="eleven wide column left aligned">
                    <p>INFO@MALLATECHNOLOGIES.COM.AU</p>
                    <p class="small">24/7 FAST RESPONSE</p>
                </div>
                </div>
            </div>
        </div>
<div class="ui hidden divider"></div>
<form class="ui form">
    <div class="field">
        <div class="ui black label">GET IN TOUCH</div>
        <div class="ui hidden divider"></div>

        <p>Please complete the below form and we will revert back to you in couple of hours.</p>
    </div>
    <div class="field">
        <div class="four fields">
            <div class="field">
                <label>Full Name (required)</label>
                <input type="text" name="fullname" placeholder="Full Name">
            </div>
            <div class="field">
                <label>Email Address (required)</label>
                <input type="text" name="email" placeholder="Email Address">
            </div>
            <div class="field">
                <label>Phone Number (required)</label>
                <input type="text" name="phone" placeholder="Phone Number">
            </div>
            <div class="field">
                <label>Post Code (optional)</label>
                <input type="text" name="postcode" placeholder="Post Code">
            </div>
        </div>
        <div class="field">
            <label>Message (optional)</label>
            <textarea name="message" placeholder="Your Message"></textarea>
        </div>
        <div class="field">
            <button type="submit" class="ui teal button">Send Request <i class="chevron right icon"></i></button>
        </div>
    </div>
</form>