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
.style59 {	font-size: 16px;
	color: #006600;
	font-weight: bold;
	font-family: "MS Sans Serif";
}
.style50 {color: #000000; font-weight: bold; }
.style58 {font-family: "MS Sans Serif"; font-size: 16px; }
.style59 {font-size: 16px}
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
              <table width="673" border="1" align="left" cellspacing="0" bordercolor="#000000" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="5"><div align="center" class="style7 style15 style48">รายงานข้อมูลผู้รับบริการ</div></td>
                </tr>
                <?
			$sql_per=" select  * from  personal ";
			$query_per=mysql_query($sql_per);
			$row=mysql_num_rows($query_per);
		
			?>
                <tr>
                  <td width="44" class="style15"><div align="center">No.</div></td>
                  <td width="125" class="style15"><div align="center">ชื่อ -นามสกุล </div></td>
                  <td width="113" class="style15"><div align="center">บิดา</div></td>
                  <td width="108" class="style15"><div align="center">มารดา</div></td>
                  <td width="136" class="style15"><div align="center">วัน/เดือน/ปี เกิด </div></td>
                </tr>
                <?	while ($result_per=mysql_fetch_array($query_per)){
			?>
                <tr>
                  <td><?=GenUserID($result_per['id']);?>
                    &nbsp;</td>
                  <td><?=$result_per['name'];?>
                    &nbsp;</td>
                  <td><?=$result_per['f_name'];?>
                    &nbsp;</td>
                  <td><?=$result_per['m_name'];?>
                    &nbsp;</td>
                  <td><?=$result_per['dob'];?>
                    &nbsp;</td>
                </tr>
                <? }?>
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
