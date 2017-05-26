<?
 session_start();
 $_SESSION[ses_drug_name] = $drug_name;
$_SESSION[ses_drug_amount] = $drug_amount;
 include("../Connections/con1.php");	
 require("../func/func.php");
$time=strtotime("-1 hour"); 
$date=date("d-m-Y H:i:s",$time)  ;
if ($drug_name == ""  ||  $category =="" || $type == ""  || $drug_amount == ""    ||  $unit == "" ){ 
 ?>
<script language="javascript"> 
 alert(" กรุณากรอกข้อมูลให้ครบ !");
document.location="drugregister.php?employee=<?=$employeeid?>";
</script>
<? }
else if($drug_name != ""  ||  $category !="" || $type != ""  || $drug_amount != ""    ||  $unit != "" ){ 
$sql_insertdrug="insert into drug (name,category,Type,count,unit,add_date) VALUES('$drug_name','$category','$type','$drug_amount','$unit','$date')";
$insert_q =mysql_query( $sql_insertdrug) or die(mysql_error());
	if ($insert_q){
?>
		<script language="javascript">
		 alert(" ลงทะเบียนเรียบร้อยแล้ว !");
		document.location="drugregister.php?employee=<?=$employeeid;?>";
		</script>
<?
unset($_SESSION[ses_drug_name]); 
unset($_SESSION[ses_drug_amount]); 
	}
	else {
?>

					<script language="javascript"> 
 					alert(" ไม่สามารถเพิ่มข้อมูลได้ !");
					document.location="drugregister.php?employee=<?=$employeeid?>";
<?
					echo mysql_error(); 
									}
}
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>
<title>drugregiter_process</title>
</head>

<body>
</body>
</html>
