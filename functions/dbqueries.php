<?php

/**
 * Created by PhpStorm.
 * User: km
 * Date: 8/04/2015
 * Time: 1:55 PM
 */

/* This function processes Insert Queries */
function sql_insert($query) {
    if(mysqli_query($GLOBALS['con'], $query)) { return true; }
    else { return false; }
}
/* This function process Update Queries */
function sql_update($query) {
    if(mysqli_query($GLOBALS['con'], $query)) { return true; }
    else { return false; }
}
/* This function process Delete Queries */
function sql_delete($query) {
    if(mysqli_query($GLOBALS['con'], $query)) { return true; }
    else { return false; }
}
/* This function process Select Queries to be ran individually or within loop */
function sql_select($query) {
    $fetch_sql_con = mysqli_query($GLOBALS['con'], $query);
    $fetch_sql_res = mysqli_fetch_array($fetch_sql_con, MYSQLI_ASSOC);
    return $fetch_sql_res;
}
/* This function process Select Keys from Database */
function sql_selectfull($query) {
    $fetch_sql_con = mysqli_query($GLOBALS['con'], $query);
    $sqlresponse = array();
    while($fetch_sql_res = mysqli_fetch_array($fetch_sql_con, MYSQLI_ASSOC))
    {
        $sqlresponse1 = array_push($sqlresponse, $fetch_sql_res);
    }
    return $sqlresponse;
}
/* This function will virtually prepare output */
function sql_prepare($query) {
    $fetch_sql_con = mysqli_prepare($GLOBALS['con'], $query);
    $fetch_sql_res = mysqli_fetch_array($fetch_sql_con, MYSQLI_ASSOC);
    return $fetch_sql_res;
}
/* This function counts the number of rows and returns the value */
function sql_count($query) {
    $fetch_sql_con = mysqli_query($GLOBALS['con'], $query);
    $fetch_sql_res = mysqli_num_rows($fetch_sql_con);
    return $fetch_sql_res;
}
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
function doupdate($table, $values, $parameter="id", $key, $page = "error-404") {
    $getdata = "SELECT * FROM `".$table."` WHERE `".$parameter."`='".$key."'";
    $output = sql_select($getdata);
    $output = unsetvalues($output);

    echo "<script>getselectarray('".json_encode($output)."');</script>";

    $getitems = sql_selectfull("SHOW COLUMNS FROM `" . $table . "`");
    foreach ($getitems as $items) {
        $dbkeys .= "'" . $items['Field'] . "', ";
    }
    foreach ($values as $vkey => $value) {
        if (strpos($dbkeys, $vkey) !== false) {
            $dbvals .= "`" .$vkey. "` = '" .$value. "', ";
        }
    }

    if (count($values) > 0) {
        $query = "UPDATE `" . $table . "` SET " . substr($dbvals, 0, -2) ." WHERE `".$parameter."`='".$key."'";
        if (sql_update($query)) {
            if ($page != "error-404") {
                redirectto($page);
            }
            return true;
        } else {
            return false;
        }
    }
}
?>
