<?php
if($_REQUEST['operacion'] == 's')
{
    $r = $_REQUEST['n1'] + $_REQUEST['n2'];
}else if($_REQUEST['operacion'] == 'r')
{
    $r = $_REQUEST['n1'] - $_REQUEST['n2'];
}else if($_REQUEST['operacion'] == 'm')
{
    $r = $_REQUEST['n1'] * $_REQUEST['n2'];
}else if($_REQUEST['operacion'] == 'd')
{
    $r = $_REQUEST['n1'] / $_REQUEST['n2'];
}
header("Location: calc.php?m=".$r);
exit;
?>