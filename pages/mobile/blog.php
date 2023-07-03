<?php
    if(isset($_GET['id'])) {
        $posts = sql_selectfull("SELECT * FROM `blog` WHERE `blogtitle` = '".$_GET['id']."'");
    }
    else {
        $posts = sql_selectfull("SELECT * FROM `blog`");
    }
    foreach ($posts as $post) {
        $imageurl = "images/blog/". str_replace(" ", "", $post['title']) .".jpg";
        $posturl = "/blog/".strtolower(str_replace(" ", "-", $post['title']));
        $postdescription = str_replace("\n", "<br>", $post['description']);

        echo '<h2 class="ui header" itemprop="name"><a href="'.$posturl.'" itemprop="url">'.$post['title'].'</a></h2>';
        if(file_exists($imageurl)) {
            echo '<div style="background-image:url(' . $GLOBALS['baseurl'].$imageurl . ')" class="ui image blogimage"></div>';
        }
        if(isset($_GET['id'])) {
            echo '<div class="description" itemprop="description articleBody">'.$postdescription.'</div>';
        }
        else {
            echo '<div class="description" itemprop="description articleBody">'.substr($postdescription, 0, 340).'... <a href="'.$posturl.'" itemprop="url">read more</a></div>';
            echo '<div class="ui divider"></div>';
        }
    }
?>