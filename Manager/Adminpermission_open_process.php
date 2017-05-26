<?
 include("Connections/con1.php");	
 require("func/func.php");
$time=strtotime("-1 hour"); 
$date=date("d-m-Y H:i:s",$time) ;
echo "$isopen<br>";
echo "$page_cd";
if($isopen==' เปิด') {
$sql_update="update page_permission set active='1' where page_id='$page_cd'";
$query_update=mysql_query($sql_update);
}elseif($isopen==' ปิด'){
$sql_update="update page_permission set active='0' where page_id='$page_cd'";
$query_update=mysql_query($sql_update);
}
?>
 	<script language="javascript"> 
 					alert("บันทึกข้อมูลเรียบร้อยแล้ว");
					window.close();
</script>
<?
?>


    <meta http-equiv="Content-Type" content="text/html; charset=windows-874"/><title>Adminpermission_open_process</title>