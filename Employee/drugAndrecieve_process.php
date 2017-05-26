<?
require("../func/func.php");
include("../Connections/con1.php");	
$time=strtotime("-1 hour"); 
$date=date("d-m-Y H:i:s",$time)  ;
if( $status == "รับยาแล้ว")
	{
$sql_update="update drug set status='$status',receive_date='$date' where drug_id='$drug_id'";	
$sql_query=mysql_query($sql_update);
	if ($sql_query){
?>
 	<script language="javascript"> 
 					alert(" update ข้อมูลเรียบร้อยแล้ว");
					window.close();
</script>
<?
							 }
	}
	if( $status != "รับยาแล้ว")
	{
$sql_update="update drug set status='$status' where drug_id='$drug_id'";	
$sql_query=mysql_query($sql_update);
	if ($sql_query){
?>
 	<script language="javascript"> 
 					alert(" update ข้อมูลเรียบร้อยแล้ว");
					window.close();
</script>
<?
							 }
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>