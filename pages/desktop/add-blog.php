<?php
    authenticatedpage();

    if(isset($_POST['dosubmit'])) {
        $insertpost = sql_insert("INSERT INTO `blog`(`title`, `description`, `datecreated`) VALUE ('" . $_POST['title'] . "', '" . $_POST['description'] . "', '" . $GLOBALS['fulldate'] . "')");
        if($insertpost) {
            $imagekey = str_replace(" ", "", $_POST['title']);
            uploadimage($_FILES["photo"]['tmp_name'], $imagekey);
            redirectto('add-blog');
        }
    }
?>

<form class="ui form" method="post" enctype="multipart/form-data">
    <div class="field">
        <label>Blog Title</label>
        <input type="text" name="title" placeholder="Blog Title">
    </div>
    <div class="field">
        <label>Blog Description</label>
        <textarea name="description" placeholder="Blog Description">
        </textarea>
    </div>
    <div class="field">
        <label>Blog Image</label>
        <input type="file" name="photo">
    </div>
    <div class="field">
        <label>Select Tags</label>
        <div class="ui multiple search selection dropdown">
            <input name="tolist" type="hidden">
            <i class="dropdown icon"></i>
            <div class="default text">Skills</div>
            <div class="menu">
                <div class="item" data-value="Websites">Websites</div>
                <div class="item" data-value="SEO">SEO</div>
                <div class="item" data-value="Web Design">Web Design</div>
                <div class="item" data-value="Mobile Apps">Mobile Apps</div>
                <div class="item" data-value="Software">Software</div>
                <div class="item" data-value="Videos">Videos</div>
                <div class="item" data-value="Marketing">Marketing</div>
                <div class="item" data-value="General">General</div>
                <div class="item" data-value="Google">Google</div>
                <div class="item" data-value="Computers">Computers</div>
                <div class="item" data-value="Technology">Technology</div>
                <div class="item" data-value="Updates">Updates</div>
            </div>
        </div>
    </div>
    <button class="ui primary button" type="submit" name="dosubmit">Add Blog</button>
</form>

