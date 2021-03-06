<?php
include("../config/conexion.php");

if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
    {
      if (PHP_VERSION < 6) {
        $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }

    $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

    switch ($theType) {
        case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;    
        case "long":
        case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
        case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
        case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
        case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
}
}

function query_array($query, $id, $campo){ /*Consulta de una tabla para crear un array con el ID y su CAMPO*/
    include("../config/conexion.php");

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $totalRows_table = mysql_num_rows($table);
    $row_table = mysql_fetch_assoc($table);

    $items = array();
    do{
        $items[$row_table[$id]] = $row_table[$campo];
    }while ($row_table = mysql_fetch_assoc($table));
}

function query_table_campo($query, $campo){ /*Consulta de una tabla a un solo campo*/
    include("../config/conexion.php");

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $totalRows_table = mysql_num_rows($table);
    $row_table = mysql_fetch_assoc($table);

    do{
        echo $row_table[$campo];
    }while ($row_table = mysql_fetch_assoc($table));
}

function query_table_option($query, $id, $campo){ /*Consuta de una tabla, parametros seleccionados para un option en una etiqueta <select>*/
    include("../config/conexion.php");

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $totalRows_table = mysql_num_rows($table);
    $row_table = mysql_fetch_assoc($table);

    do{
        echo "<option value='" .$row_table[$id]. "' >" .$row_table[$campo]. "</option>";
    }while ($row_table = mysql_fetch_assoc($table));
}

function query_table_option_comparar($query, $id, $campo, $id2){ /*Consuta de dos tablas, parametros seleccionados para un option en una etiqueta <select>, donde una de las etiquetas sera "selected"*/
    include("../config/conexion.php");

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $totalRows_table = mysql_num_rows($table);
    $row_table = mysql_fetch_assoc($table);

    do{
        if($row_table[$id] == $id2) { 
            echo "<option value='" .$row_table[$id]. "' selected>" .$row_table[$campo]. "</option>";
        }else {
            echo "<option value='" .$row_table[$id]. "'>" .$row_table[$campo]. "</option>";
        }
    }while ($row_table = mysql_fetch_assoc($table));
}

function query_table_optionlist($query, $campo){/*Consuta de una tabla, parametros seleccionados para un option en una etiqueta <select>*/
    include("../config/conexion.php");

    mysql_select_db($database_fastERP, $fastERP);
    $table = mysql_query($query, $fastERP) or die(mysql_error());
    $totalRows_table = mysql_num_rows($table);
    $row_table = mysql_fetch_assoc($table);

    do{
        echo "<option value='" .strtolower($row_table[$campo]). "'>";
    }while ($row_table = mysql_fetch_assoc($table));
}

function insert_table($query) {
    include("../config/conexion.php");

    $insertSQL = sprintf($query);

    mysql_select_db($database_fastERP, $fastERP);
    $Result1 = mysql_query($insertSQL, $fastERP) or die(mysql_error());
}
?>