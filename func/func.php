<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>func</title>
</head>

<body>

<?
function today()
{
$time=strtotime(" -1 hour"); 
$date=date("d-m-Y H:i:s",$time)  ;
echo "$date";
}
function format_date($date)
{
$fday=substr("$date",8,2);
$fmonth=substr("$date",5,2);
$fmonth=(int)$fmonth-1;
$fyear=substr("$date",0,4);
$fyear=$fyear+543;
$thaimonth=array("มกราคม","กุมภาพันธุ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
$fmonth=$thaimonth[$fmonth];
return(int)$fday." ".$fmonth." ".$fyear;
}
function format_datet($date)
{
$fday=substr("$date",0,2);
$fmonth=substr("$date",3,2);
$fmonth=(int)$fmonth-1;
$fyear=substr("$date",6,4);
$fyear=$fyear+543;
$thaimonth=array("01","02","03","04","05","06","07","08","09","10","11","12");
$fmonth=$thaimonth[$fmonth];
return(int)$fday."/".$fmonth."/".$fyear;
}

function format_datethai($date)
{
$fday=substr("$date",8,2);
$fmonth=substr("$date",5,2);
$fmonth=(int)$fmonth-1;
$fyear=substr("$date",0,4);
$fyear=$fyear;
$thaimonth=array("มกราคม","กุมภาพันธุ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
$fmonth=$thaimonth[$fmonth];
return(int)$fday." ".$fmonth." ".$fyear;
}
function GenUserID($id)
{
if(strlen($id)==1) { echo "U0000000";}
elseif (strlen($id)==2) { echo "U000000";}
elseif(strlen($id)==3){echo "U00000";}
elseif(strlen($id)==4){echo "U0000";}
elseif(strlen($id)==5){echo "U000";}
elseif(strlen($id)==6){echo "U00";}
elseif(strlen($id)==7){echo "U0";}
elseif(strlen($id)==8){echo "U";}
return $id;
}
function GenStaffID($id)
{
if(strlen($id)==1) { echo "S0000000";}
elseif (strlen($id)==2) { echo "S000000";}
elseif(strlen($id)==3){echo "S00000";}
elseif(strlen($id)==4){echo "S0000";}
elseif(strlen($id)==5){echo "S000";}
elseif(strlen($id)==6){echo "S00";}
elseif(strlen($id)==7){echo "S0";}
elseif(strlen($id)==8){echo "S";}
return $id;
}

function GenServiceID($id)
{
if(strlen($id)==1) { echo "P0000000";}
elseif (strlen($id)==2) { echo "P000000";}
elseif(strlen($id)==3){echo "P00000";}
elseif(strlen($id)==4){echo "P0000";}
elseif(strlen($id)==5){echo "P000";}
elseif(strlen($id)==6){echo "P00";}
elseif(strlen($id)==7){echo "P0";}
elseif(strlen($id)==8){echo "P";}
return $id;
}

function GenMeetID($id)
{
if(strlen($id)==1) { echo "M0000000";}
elseif (strlen($id)==2) { echo "M000000";}
elseif(strlen($id)==3){echo "M00000";}
elseif(strlen($id)==4){echo "M0000";}
elseif(strlen($id)==5){echo "M000";}
elseif(strlen($id)==6){echo "M00";}
elseif(strlen($id)==7){echo "M0";}
elseif(strlen($id)==8){echo "M";}
return $id;
return $id;
}

?>

<SCRIPT language=JavaScript>
function check_number() {
e_k=event.keyCode
if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
//if (e_k != 13 && (e_k < 48) || (e_k > 57)) {
event.returnValue = false;
alert("ต้องเป็นตัวเลขเท่านั้น... \nกรุณาตรวจสอบข้อมูลของท่านอีกครั้ง...");
	}
} 
		//อ่านค่า cookie
		function getCookie(c_name)
		{
		if (document.cookie.length>0)
		  {
		  c_start=document.cookie.indexOf(c_name + "=");
		  if (c_start!=-1)
			{ 
			c_start=c_start + c_name.length+1; 
			c_end=document.cookie.indexOf(";",c_start);
			if (c_end==-1) c_end=document.cookie.length;
			return unescape(document.cookie.substring(c_start,c_end));
			} 
		  }
		return "";
		} 
		//สร้าง cookie
		function setCookie(c_name,value,expiredays){
			var exdate=new Date();
			exdate.setDate(exdate.getDate()+expiredays);
			document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
		}
</script>

<script language="javascript">
function check_char(){
 alert(" ! กรุณากรอกชื่อ-นามสกุล ผู้ใช้บริการด้วยคะ ");
//document.location="../ptoprt/ptoprt.php";
}
</script>
</body>
</html>
