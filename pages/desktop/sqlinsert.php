

<div class="snippetheader">Input</div>

<div class="snippetcode">insertrecord("contact", "submission");</div>

<div class="snippetheader">Response in Code</div>

<div class="snippetresppnse">
    <textarea class="snippetresppnse">
        <script>
        $(document).ready(function() {
            $('input[type=submit], button[type=submit]').click(function(){
                var url = '".$GLOBALS['baseurl']."api/doinsert&table=".$table."';
                var data = $('form').serialize();
                var redirect = '".$redirect."';
                $.post(url, data,
                function(response){
                    window.output = response;
                    if((response == 'Success') && (redirect != 'noredirect')) {
                        window.location.replace(redirect);
                    }
                });
                return false;
            });
        });
        </script>
    </textarea>
</div>

<div class="snippetheader">Code in {baseurl}/api/doinsert page</div>

<div class="snippetresppnse">
    <textarea class="snippetresppnse">

            $insert = doinsert($_GET['table'], $_POST);
            if($insert) { echo "Success"; }
            else { echo "Failed"; }
            
    </textarea>
</div>

<div class="snippetheader">Code in doinsert function</div>

<div class="snippetresppnse">
    <textarea class="snippetresppnse">
            function doinsert($table, $values, $page = "error-404") {
                if(count($values) > 0) {
                    $getitems = sql_selectfull("SHOW COLUMNS FROM `" . $table . "`");
                    foreach ($getitems as $items) {
                        $dbkeys .= "'" . $items['Field'] . "', ";
                    }
                    foreach ($values as $key => $value) {
                        if (strpos($dbkeys, $key) !== false) {
                            $mykey .= $key . ", ";
                            $myvalue .= "'" . $value . "', ";
                        }
                    }
                    $dbkey = str_replace("'", "`", $mykey);
                    $query = "INSERT INTO `" . $table . "`(" . substr($dbkey, 0, -2) . ") VALUES(" . substr($myvalue, 0, -2) . ")";
                    if (sql_insert($query)) {
                        if ($page != "error-404") {
                            redirectto($page);
                        }
                        return true;
                    } else {
                        return false;
                    }
                }
            }
    </textarea>
</div>

