<?
 session_start();
$drug_id= $_GET['drug_cd'];
$amount=$_GET['amount'];
$employeeid= $_SESSION['employee'];
require("func/func.php");
include("Connections/con1.php");
$time=strtotime("-1 hour"); 
$date=date("d-m-Y H:i:s",$time)  ;
if(isset($drug_id)){
$sql_update="update drug set count = count - $amount where drug_id = '$drug_id'";
$query_update =mysql_query($sql_update);

	$sql_withdraw="insert into withdraw (emp_id,drug_id,count,withdraw_dt)   VALUES('$employeeid','$drug_id','$amount','$date')";
$query_withdraw =mysql_query($sql_withdraw);
 if($query_update ){
	if($query_withdraw){
echo"<script language=\"javascript\">
alert(\"ทำการเบิกสินค้าเรียบร้อยแล้ว Updateข้อมูลโดยกด Refesh หน้า บันทึกข้อมูลการเบิกยาและเวชภัณฑ์ อีกครั้ง! \");
window.close();
</script>";
	}
}
}

?>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>
<title>WithdrawDrug_process</title>
