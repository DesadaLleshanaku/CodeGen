<?php
    echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';
    $pages = array("", "about", "services", "outsourcing", "blog", "contact");
    foreach($pages as $page) {
        ?>
            <url>
                <loc><?php echo "https://www.sites.lleshanaku.com/codegen/" . $page ?></loc>
                <lastmod>2023-07-25</lastmod>
                <changefreq>hourly</changefreq>
                <priority>1</priority>

            </url>
        <?php
    }
    $pages = array("web-design");
    foreach($pages as $page) {
        ?>
        <url>
            <loc><?php echo "https://www.sites.lleshanaku.com/codegen/" . $page ?></loc>
            <lastmod>2023-07-25</lastmod>
            <changefreq>hourly</changefreq>
            <priority>1</priority>

        </url>
    <?php
    }
    $pages = array("business-process-outsourcing", "data-entry-outsourcing", "information-technology-outsourcing", "knowledge-process-outsourcing", "software-research-and-development");
    foreach($pages as $page) {
        ?>
        <url>
            <loc><?php echo "https://www.sites.lleshanaku.com/codegen/" . $page ?></loc>
            <lastmod>2023-07-25</lastmod>
            <changefreq>hourly</changefreq>
            <priority>0.8</priority>

        </url>
    <?php
    }
echo '</urlset>';
?>