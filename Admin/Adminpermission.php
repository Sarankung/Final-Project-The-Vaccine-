<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$admin' and a.is_active='1'";
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
.style21 {font-size: 16px;
	color: #006600;
}
.style16 {color: #000099; }
-->
</style>
</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="admin.php"><b>หน้าหลักเจ้าหน้าที่</b></a></strong></li>
       
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
              <table width="421" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="3"><div align="center" class="style1 style7 style15">กำหนดสิทธ์การใช้งาน</div></td>
                </tr>
				 <tr>
                  <td><span class="style1 style7 style15">ชื่อผู้ใช้</span></td>
                  <td><span class="style1 style7 style15">ประเภท</span></td>
                  <td><span class="style1 style7 style15">ใช้กำหนดสิทธิ์</span></td>
                </tr>
                <?
			$sql_per="SELECT  * FROM user_tb ";
			$query_per=mysql_query($sql_per);
			while ($result_per=mysql_fetch_array($query_per)){
			?>
               
                <tr>
                  <td width="507"><span class="style1">
                    <input type="hidden" name="hiddenField" value="<?=$result_per['id'];?>" />
                    <?=$result_per['fullname'];?>
&nbsp;</span></td>
                  <td width="507"><span class="style1">
                    <?=$result_per['type'];?>
                  </span></td>
                  <td width="507"><a href="Adminpermission_open.php?emp=<?=$result_per['id'];?>" class="style16">กำหนดสิทธิ์</a></td>
                </tr>
                <? }
			?>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
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
