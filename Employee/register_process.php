<?  session_start();
$b_date= $_POST["date-th"];
$_SESSION[ses_c_id] = $c_id;
$_SESSION[ses_title] = $title;
$_SESSION[ses_name] = $c_name;
$_SESSION[ses_bd_place] = $bd_place;
$_SESSION[ses_b_date]=$b_date;
$_SESSION[ses_time_btd] = $time_btd;
$_SESSION[ses_Weight] = $Weight;
$_SESSION[ses_High] = $High;
$_SESSION[ses_type] = $type;
$_SESSION[ses_comment] = $comment;
$_SESSION[ses_m_name] = $m_name;
$_SESSION[ses_m_age] = $m_age;
$_SESSION[ses_m_occ] = $m_occ;
$_SESSION[ses_f_namet] = $f_name;
$_SESSION[ses_f_age] = $f_age;
$_SESSION[ses_f_occ] = $f_occ;
$_SESSION[ses_adr] = $address;
$_SESSION[ses_tel] = $tel;
/*
echo " Weight:$Weight <br>"; 
echo " c_name: $c_name <br>"; 
echo "c_lastname: $c_lastname <br>"; 
echo " bd_place: $bd_place <br>"; 
echo " b_date: $b_date <br>"; 
echo "m_name: $m_name <br>"; 
echo "f_name: $f_name <br>"; 
echo " Weight:$Weight <br>"; 
echo " High : $High <br>"; */
require("../func/func.php");
include("../Connections/con1.php");	
$time=strtotime("-1 hour"); 
//$todays=date("d-m-Y H:i:s",$time)  ;
$todays=date("d-m-Y H:i:s",$time)  ;
if ($c_name == "" || $bd_place == ""  || $b_date == ""    ||  $m_name == ""   ||  $f_name == ""  ||  $Weight == ""  ||  $High == "" ){ // ตรวจสอบว่ามีการกรอกข้อมูลครบหรือไม่
// ?>
<script language="javascript"> 
alert("กรุณากรอกข้อมูลให้ครบ !");history.back();
</script>
<? }
else if  ( $c_name != ""  || $bd_place == ""  || $b_date  != ""    ||  $m_name  != ""   ||  $f_name  != ""  ||  $Weight  != ""  ||  $High  != ""  )
//    ".$c_name." ".$c_lastname."
{
$sql_insert = "insert into  personal(child_id ,title ,name ,dob ,dob_time ,dob_place ,weigh ,hight ,Is_normal ,comment ,
receive_vit ,type_vit ,m_name,m_age,m_occ,f_name,f_age,f_occ ,addr,tel,user,pass,regis_date ) 
 VALUES ( '$c_id','$title', '$c_name','$b_date', '$time_btd','$bd_place', '$Weight' ,'$High' ,'0' ,'$comment' ,
'0' ,'$type','$m_name','$m_age','$m_occ','$f_name','$f_age','$f_occ','$address','$tel','UserService','$c_id','$todays')"; 


$inser_emp="insert into user_tb(fullname,username,password,type)
 VALUES ('ServiceAPP','UserService','$c_id','Service')";
mysql_query($inser_emp) or die(mysql_error());


$insert_q =mysql_query( $sql_insert) or die(mysql_error());
		if ($insert_q){
?>
		<script language="javascript">
		 alert(" ลงทะเบียนเรียบร้อยแล้ว !");
		document.location="register.php?employee=<?=$employeeid;?>";
		</script>
<?
unset($_SESSION[ses_c_id]); 
unset($_SESSION[ses_name] ); 
unset($_SESSION[ses_bd_place]); 
unset($_SESSION[ses_b_date]); 
unset($_SESSION[ses_time_btd]); 
unset($_SESSION[ses_Weight] ); 
unset($_SESSION[ses_High] ); 
unset($_SESSION[ses_type] ); 
unset($_SESSION[ses_comment] ); 
unset($_SESSION[ses_m_name] ); 
unset($_SESSION[ses_m_age] ); 
unset($_SESSION[ses_m_occ] ); 
unset($_SESSION[ses_f_namet]); 
unset($_SESSION[ses_f_age] ); 
unset($_SESSION[ses_f_occ]); 
unset($_SESSION[ses_adr]); 
unset($_SESSION[ses_soi]); 
unset($_SESSION[ses_road]); 
unset($_SESSION[ses_khwang]); 
unset($_SESSION[ses_khet] ); 
unset($_SESSION[ses_province] ); 
unset($_SESSION[ses_zipcode] ); 
unset($_SESSION[ses_tel] );
	}
	else {
?>
					<script language="javascript"> 
 					alert(" ไม่สามารถเพิ่มข้อมูลได้ !");
					document.location="register.php?employee=<?=$employeeid?>";
<?
					echo mysql_error(); 
									}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>
<title>register_process</title>