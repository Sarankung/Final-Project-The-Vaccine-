<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
 $emp_id=$_SESSION['emp_id'];
$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$emp_id' and a.is_active='1' order by a.page_id asc";
$query=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-874">
<title>Village</title>
<link rel="stylesheet" type="text/css" href="../reset.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link type="text/css" href="../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="../js/gen_validatorv4.js"></script>
		<script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
		<script type="text/javascript">
		  $(function () {
		    var d = new Date();
		    var toDay = d.getDate() + '/'
        + (d.getMonth() + 1) + '/'
        + (d.getFullYear() + 543);

				// Datepicker
		    $("#date-th").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			  
			   $("#start").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			  
			     $("#end").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			 
			});
		</script>
		
			<style type="text/css">
			/*demo page css*/
			body{ font: 80% "Trebuchet MS", sans-serif; }
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
			ul.test {list-style:none; line-height:30px;}
		    </style>
<style type="text/css">
<!--
.style1 {color: #000000}
.style15 {	font-size: 16px;
	color: #000000;
	font-weight: bold;
}
.style7 {font-family: "MS Sans Serif"}
.style22 {color: #003300}
.style34 {font-size: 13px}
.style49 {font-weight: bold; font-size: 16px;}
.style51 {font-weight: bold; font-size: 13px;}
.style53 {color: #FF0000}
-->
</style>

</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="Employee.php"><b>หน้าหลักเจ้าหน้าที่</b></a></strong></li>
       
      </ul>
      <div id="meun">
        <h2>ส่วนของเจ้าหน้าที่</h2>
        <ul>
		  	      <?
	while ($result = mysql_fetch_array($query)){
	?>
          <li><a href=<?=$result['page_link'].$emp_id;?>>
	      <?=$result['page_name'];?>
		    </a></li>

            <? }?>
          <li> <a href="../logout.php">ออกจากระบบ</a></li>
        </ul>
      </div>
    </div>
    <div class="float-r right">
      <div id="logo">
        <h1>ระบบบริการสร้างภูมิคุ้มกันโรคของเด็กแรกเกิดถึง 6 ปี </h1>
        <div></div>
      </div>
      <div id="main">
        <table width="767" height="192" border="0">
          <tr>
            <td width="806"><div align="center">
              <table width="599" border="0">
                <tr>
                  <td height="26">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="9">&nbsp;</td>
                  <td width="9">&nbsp;</td>
                  <td width="550"><div align="right"><strong><span class="style1 style7 style15">เจ้าหน้าที่</span>
                        <?=$empname?>
                    <span class="style1 style7 style15">เข้าสู่ระบบ  เวลา </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <form id="form1" name="form1" method="post" action="register_process.php">
                <div align="left">
                  <?
$sqls="select * from personal where name like '%$name%'";
$sql_query =mysql_query($sqls) or die(mysql_error());
$row=mysql_num_rows($sql_query );
if ($row)
{?>
                </div>
                <table width="683" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="100%" height="101" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333" id="t_border">
                      <tr  bgcolor="#CCCCCC">
                        <td width="143" height="25"><div align="center" class="style2">ชื่อ - นามสกุล</div></td>
                        <td width="118"><div align="center" class="style2">ชื่อบิดา</div></td>
                        <td width="127"><div align="center" class="style2">ชื่อมารดา</div></td>
                        <td width="120"><div align="center"><span class="style2">นัด</span>และให้บริการ</div></td>
                        <td width="113"><div align="center" class="style2">
                            <div align="center">นัดทั้งหมด</div>
                        </div></td>
                      </tr>
                      <? while ($result_query=mysql_fetch_array($sql_query)){
		?>
                      <tr  bgcolor="#3399ff" >
                        <td height="31" bgcolor="#99CCFF"><?=$result_query['name'];?></td>
                        <td bgcolor="#99CCFF"><?=$result_query['f_name'];?></td>
                        <td bgcolor="#99CCFF"><?=$result_query['m_name'];?></td>
                        <td bgcolor="#99CCFF" ><div align="center"><a href="#" onclick="window.open('service_process.php?child_id=<?=$result_query['id'];?>',target='_blank','oqr',width='400',height='950','scrollbars=no')"><img src="../images/edit.png" width="18" height="17" border="0" /></a></div></td>
                        <td bgcolor="#99CCFF" ><div align="center"><a href="viewmeeting.php?child_id=<?=$result_query['id'];?>" target="_blank"><img src="../images/Calendar.gif" width="16" height="15" border="0" /></a></div></td>
                      </tr>
                      <? }?>
                    </table></td>
                  </tr>
                </table>
                <? }
else if ($row==0){?>
<script language="javascript">
		 alert(" ไม่พบข้อมูลที่ค้นหา กรอกข้อมูลค้นหาอีกครั้ง ค่ะ !");
		window.close();
		</script>
<? } ?>
                            <div align="left"></div>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <h2>&nbsp;</h2>
              </form>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp; </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div></td>
          </tr>
        </table>
   
      </div>
    </div>
    <!-- /footer -->
  </div>
</div>
</body>
</html>
