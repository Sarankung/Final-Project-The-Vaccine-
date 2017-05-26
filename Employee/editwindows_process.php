<?
require("../func/func.php");
include("../Connections/con1.php");	
$time=strtotime("-1 hour"); 
$date=date("d-m-Y H:i:s",$time)  ;
$sql_update ="update drug set name ='$drug_name' , category ='$category',Type ='$type',count ='$drug_amount',unit ='$unit',add_date='$date' where drug_id='$drug_id'";
$query_update=mysql_query($sql_update);
if($query_update){
echo"<script language=\"javascript\">
alert(\"แก้ไขข้อมูลเรียบร้อยแล้ว \");
window.close();
</script>";
}
?>

    <meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>

