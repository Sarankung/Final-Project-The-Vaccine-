<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>InsertData Page</title>
<style type="text/css">
<!--
body,td,th {
	font-family: MS Sans Serif;
	font-size: 12px;
}
body {
	background-image: url();
	background-repeat: no-repeat;
	margin-left: 10px;
	background-color: #B8D78E;
}
-->
</style></head>
<body>
<?
$date=date("Y-m-d");
$name_user=$_POST["name"];
$doctor_name=$_POST["doctor_name"];
$subject=$_POST["subject"];
$hr_start=$_POST["hr_s"];
$min_start=$_POST["min_s"];
$mode_start=$_POST["mode_s"];
$hr_end=$_POST["hr_e"];
$min_end=$_POST["min_e"];
$mode_end=$_POST["mode_e"];
$day_d=$_POST["day_day"];
$month_m=$_POST["month_mm"];
$year_y=$_POST["Year_yy"];
$user_id=$_GET["id_user"];
require("../func/func.php");
include("../Connections/con1.php");	
if($user_id=="")
{
?>
			<script language="javascript">
 			alert(" ! กรุณากรอกชื่อ-นามสกุลคนไข้ที่ท่านต้องการค้นหา");
			document.location="meet.php";
			</script>
<? 
}
elseif($subject=="")
{
?>
			<script language="javascript">
 			alert(" ! กรุณากรอกเรื่องที่ต้องการนัดตรวจด้วยคะ");
			document.location="meet.php";
			</script>
<? 
}
else 
{
$trunc="truncate table temp_meet ";
$query_t=mysql_db_query($db,$trunc);
////***********************insert into table temp meeting เพื่อใช้ในการตรวจสอบว่าได้ทำการนัดที่ถูกต้องหรือไม่**************
$sql="select  *  from tb_doctor  where name = '$doctor_name'";
$query=mysql_db_query($db,$sql);
$result=mysql_fetch_array($query);
$doctor_id=$result["doctor_id"];
/*echo  "doctor_id=".$doctor_id."<br>";
echo  "user_id=".$user_id."<br>";
echo  "date=".$year_y."-".$month_m."-".$day_d."<br>";
echo  "date=".$hr_start.":".$min_start.":".$mode_start."<br>";
echo  "date=".$hr_end.":".$min_end.":".$mode_end."<br>";*/
$sql_check1="insert into temp_meet values('$user_id','$doctor_id','$year_y-$month_m-$day_d','$hr_start:$min_start:$mode_start','$hr_end:$min_end:$mode_end')";
$query_check1=mysql_db_query($db,$sql_check1);

///////////////////////////////////////////////************************* ตรวจสอบเมื่อผู้ป่วยทำการนัดซ้ำ *********************************************///////////////////
$sql_check= "select * from meeting where user_id='$user_id' ";
$query_check=mysql_db_query($db,$sql_check);
$result_check=mysql_fetch_array($query_check);
$user_meet=$result_check["user_id"];
$date_meet=$result_check["date"];
$doctor_meet=$result_check["doctor_id"];
$datemeet=$result_check["date_meet"];
$time_start=$result_check["time_start"];
$time_end=$result_check["time_end"];
///////////////////////////////////////////////************************* *********************************************///////////////////
$sql_check1= "select * from meeting where user_id not in ('$user_id') ";
$query_check1=mysql_db_query($db,$sql_check1);
$result_check1=mysql_fetch_array($query_check1);
$user_meet1=$result_check1["user_id"];
$date_meet1=$result_check1["date"];
$doctor_meet1=$result_check1["doctor_id"];
$datemeet1=$result_check1["date_meet"];
$time_start1=$result_check1["time_start"];
$time_end1=$result_check1["time_end"];

//////////////////////////////////// ****************************  select tmp_meet เพื่อนใช้ในการ ตรวจสอบค่าที่จะต้อง Insert เข้าไป***********************///////////////////////
$sql_tmp="select  *  from temp_meet ";
$query_tmp=mysql_db_query($db,$sql_tmp);
$result_tmp=mysql_fetch_array($query_tmp);
$user_tmp=$result_tmp["user_id"];
$doctor_tmp=$result_tmp["doctor_id"];
$date_meet=$result_tmp["date_meet"];
$time_str=$result_tmp["time_str"];
$time_en=$result_tmp["time_en"];
/*
echo  "user_meet=".$user_meet."<br>";
echo  "doctor_meet=".$doctor_meet."<br>";
echo  "datemeet=".$datemeet."<br>";
echo  "time_start=".$time_start."<br>";
echo  "time_end=".$time_end."<br>";

echo  "user_tmp=".$user_tmp."<br>";
echo  "doctor_tmp=".$doctor_tmp."<br>";
echo  "date_meet=".$date_meet."<br>";
echo  "time_str=".$time_str."<br>";
echo  "time_en=".$time_en."<br>";*/

if($user_meet==$user_tmp && $doctor_meet==$doctor_tmp)//ใช้ตรวจสอบว่าคนป่วยคนเดียวกัน นักหมอคนเดียวกัน
{
	if($datemeet==$date_meet && $time_start==$time_str && $time_end== $time_en)
		{
	?>
			<script language="javascript">
 			alert(" !  ไม่สามารถทำการนัดตรวจรักษาได้ เนื่องจากวันนี้ผู้ป่วยรายนี้ได้ทำการนัดตรวจเรียบร้อยแล้ว ");
			document.location="../oapp/meet.php?user_code=<?=$user_id;?>";
			</script>
<? 
		}//end if
}//end else if
if($user_meet1!=$user_tmp && $doctor_meet1==$doctor_tmp)//ใช้ตรวจสอบว่าคนป่วยคนเดียวกัน นักหมอคนเดียวกัน
{
	if($datemeet1==$date_meet && $time_start1==$time_str && $time_end1== $time_en)
		{
	?>
			<script language="javascript">
 			alert(" !  ไม่สามารถทำการนัดได้ เนื่องจากมีผู้ป่วยรายอื่นได้ทำการนัดตรวจรักษาแล้ว ");
			document.location="../oapp/meet.php?user_code=<?=$user_meet1;?>";
			</script>
<? 
		}//end if
}//end else if

else
{
$sql_meet="insert into meeting values('','$user_id','$doctor_id','$subject','$date','$date_meet','$time_str','$time_en','1')";
$q_meet=mysql_db_query($db,$sql_meet);
?>
<script language="javascript">
alert(" ! เพิ่มรายการนัดตรวจเรียบร้อยแล้วคะ ");
document.location="../oapp/meet.php";
</script>
<?
}

}//end else check ค่าว่าได้มีการSerch หรือไม่
?>
</body>
</html>
