<?
 session_start();
 $_SESSION[ses_username] = $username;
  $_SESSION[ses_userid] = session_id();
 ?>

 <meta http-equiv="Content-Type" content="text/html; charset=windows-874">

 <?
 if ($_POST['username']=="" || $_POST['password']==""){ //ตรวจสอบว่ามีการกรอก User Password หรือไม่
echo"<script language=\"javascript\">
alert(\"กรุณากรอก Username หรือ Password เพื่อเข้าสู่ระบบ\");
window.location='login.php';
</script>";
}
elseif($_POST['username']!="" || $_POST['password']!=""){
$_SESSION['empname']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$empname=$_SESSION['empname'];
$pwdemp=$_SESSION['password'];
/*echo "empname : $empname <br>";
echo "password : $pwdemp <br>";*/


?>
<link href="../shop.css" rel="stylesheet" type="text/css">
<?
include("Connections/con1.php");	
$getid="select * from user_tb where  username like '%$empname%' and password like '%$pwdemp%'";
$getquery=mysql_query($getid);
$re=mysql_fetch_array($getquery);
$empid=$re['id'];
$staff_type=$re['type']; //นำ Type ของ User มาเก็บไว้ในตัวแปร
$_SESSION['employee']=$empid;
$employeeid=$_SESSION['employee'];
echo $staff_type;

if($staff_type=="employee"){ //หากผู้ใช้มี Type เป็น Employee

	$result=mysql_query("SELECT * FROM user_tb  WHERE username='$empname' AND password='$pwdemp' and type='employee'")or die(mysql_error());
	$NRow=mysql_num_rows($result);

	if($NRow==0){
	    	echo "<center>กรอก Username password ไม่ถูกต้อง || <a href=login.php>กลับสู้หน้า Log on</a> ||</center>\n";//ให้ Login เข้าหน้าเจ้าหน้าที่
			exit;
	} 
			echo "<meta http-equiv=refresh content=0;URL=Employee/Employee.php?employee=$employeeid&type=$staff_type>";//หลังจากพนักงาน Login เข้าระบบเสร็จแล้วเข้าสู่หน้าพนักงาน
} //End  $staff_type=='employee'

if ($staff_type=="manager"){
$result=mysql_query("SELECT * FROM user_tb  WHERE username='$empname' AND password='$pwdemp' and type='manager'")or die(mysql_error());
	$NRow=mysql_num_rows($result);

	if($NRow==0){
	    	echo "<center>กรอก Username password ไม่ถูกต้อง || <a href=login.php>กลับสู้หน้า Log on</a> ||</center>\n";
			exit;
	} 

	echo "<meta http-equiv=refresh content=0;URL=Manager/manager.php?employee=$employeeid&type=$staff_type>";//หลังจากพนักงาน Login เข้าระบบเสร็จแล้วเข้าสู่หน้าพนักงาน
} //End  $staff_type=='manager'

if($staff_type=="Service"){ //หากผู้ใช้มี Type เป็น Employee

	$result=mysql_query("SELECT * FROM user_tb  WHERE username='$empname' AND password='$pwdemp' and type='Service'")or die(mysql_error());
	$NRow=mysql_num_rows($result);

	if($NRow==0){
	    	echo "<center>กรอก Username password ไม่ถูกต้อง || <a href=login.php>กลับสู้หน้า Log on</a> ||</center>\n";//ให้ Login เข้าหน้าเจ้าหน้าที่
			exit;
	} 
			echo "<meta http-equiv=refresh content=0;URL=Service/service.php?pass=$pwdemp&type=$staff_type>";//หลังจากพนักงาน Login เข้าระบบเสร็จแล้วเข้าสู่หน้าพนักงาน
} //End  $staff_type=='Service'

else{
$result=mysql_query("SELECT * FROM user_tb  WHERE username='$empname' AND password='$pwdemp' and type='admin'")or die(mysql_error());
	$NRow=mysql_num_rows($result);

	if($NRow==0){
	    	echo "<center>กรอก Username password ไม่ถูกต้อง || <a href=login.php>กลับสู้หน้า Log on</a> ||</center>\n";
			exit;
	} 

	echo "<meta http-equiv=refresh content=0;URL=Admin/admin.php?employee=$employeeid>";//หลังจากพนักงาน Login เข้าระบบเสร็จแล้วเข้าสู่หน้าพนักงาน
} //End  $staff_type=='admin'
}//End if 
?>