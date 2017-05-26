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
.style7 {font-family: "MS Sans Serif"}
.txtEnable {		background-position: center center;
		border-bottom: #000000 1px groove;
		border-right: #000000 1px groove;
		border-left: #000000 1px groove;
		border-top: #000000 1px groove;
		color: #000000;
		font-family: tahoma,ms sans serif; 
		font-size:10Pt;
		height:16pt;
}
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
              <table width="655" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="right"><strong><span class="style1 style7 style15">เจ้าหน้าที่</span>
                      <?=$empname?>
                      <span class="style1 style7 style15">เข้าสู่ระบบ  เวลา </span>
                      <?=today();?>
                  </strong></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="13">&nbsp;</td>
                  <td width="605"><p align="center" class="style15"><strong>ค้นหาชื่อผู้ใช้บริการ เพื่อบันทึกข้อมูล</strong> </p>
                    <p align="center" class="style15">&nbsp;</p></td>
                  <td width="66"><div align="center"></div></td>
                </tr>
              </table>
              <form id="form1"  method="post" target="_blank"   action="sql.php" target="_blank" >
                <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="21%" height="37">&nbsp;</td>
                    <td width="13%" align="right">ชื่อ - สกุล : </td>
                    <td width="20%"><input name="name" type="text" class="txtEnable" id="name"  value="" maxlength="25" /></td>
                    <td width="21%" align="left">&nbsp;<img src="../images/button_search.gif" width="12" height="13" />
                      <input name="action" type="hidden" id="action" value="service" />
                      <input type="submit" name="Submit2" value="ค้นหา" /></td>
                  </tr>
                </table>
                </form>
                <p>&nbsp;</p>
              <p>&nbsp; </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>
              <form id="form3" name="form3" method="post" action="">
              </form>
            </td>
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
