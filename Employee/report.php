<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$sql="select * from page_permission where emp_type ='employee' and active=1";
$query=mysql_query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=tis-620">
<title>Village</title>
<link rel="stylesheet" type="text/css" href="../reset.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<style type="text/css">
<!--
.style1 {color: #000000}
.style15 {	font-size: 16px;
	color: #000000;
	font-weight: bold;
}
.style20 {color: #000033}
.style7 {font-family: "MS Sans Serif"}
.style51 {	font-size: 16px;
	color: #006600;
	font-weight: bold;
}
.style50 {color: #000099}
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
          <li><a href=<?=$result['page_link'];?>>
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
              <table width="512" border="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="13">&nbsp;</td>
                  <td width="13">&nbsp;</td>
                  <td width="464"><div align="right"><strong><span class="style1 style7 style15">เจ้าหน้าที่</span>
                        <?=$empname?>
                    <span class="style1 style7 style15">เข้าสู่ระบบ  เวลา </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <p align="right">&nbsp;</p>
              <table width="485" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td width="33" class="style15">No.</td>
                  <td width="442"><div align="center" class="style7 style15 style48"> รายงาน </div></td>
                </tr>
                
                <tr>
                  <td>1</td>
                  <td><a href="rp_meeting.php">รายงานการนัดทั้งหมด</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><span class="style50"><a href="rp_service.php">รายงานข้อมูลผู้รับบริการ</a></span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><span class="style50"><a href="rp_user.php">รายงานข้อมูลผู้ใช้ระบบ</a></span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><span class="style50"><a href="rp_drug.php">รายงานข้อมูลยาและเวชภัณฑ์คงคลัง</a></span></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><span class="style50"><a href="rp_drugtobuy.php">รายงานข้อมูลการจัดซื้อยาและเวชภัณฑ์r</a></span></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><span class="style50"><a href="rp_withdraw.php">รายงานข้อมูลการเบิกยาและเวชภัณฑ์</a></span></td>
                </tr>
                <tr>
                  <!-- <td><span class="style50">รายงานข้อมูลการจ่ายยาและเวชภัณฑ์</span></td>
            </tr>
            <tr>
              <td><span class="style50">รายงานข้อมูลการรับชำระค่ายาและเวชภัณฑ์</span></td>
            </tr>-->
                </tr>
              </table>
              <p>&nbsp; </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div></td>
          </tr>
        </table>
        <h2>&nbsp;</h2>
      </div>
    </div>
    <!-- /footer -->
  </div>
</div>
</body>
</html>
