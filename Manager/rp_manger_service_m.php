<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$_SESSION['manag']=$_GET['employee'];
$manag=$_SESSION['manag'];
$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$manag' and a.is_active='1' order by a.page_id asc";
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
.style51 {font-size: 16px;
	color: #006600;
}
.style50 {color: #000099}
.style34 {font-size: 13px}
.style53 {color: #000000; font-weight: bold; }
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
          <li><a href=<?=$result['page_link'].$manag;?>>
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
              <p>&nbsp;</p>
              <table width="537" height="23" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="right">
                      <input type="button" name="Add" value="พิมพ์" style="FONT-FAMILY: MS SANS SERIF;FONT-SIZE : 9PT;FONT-WEIGHT:BOLD;COLOR:#800000;WIDTH:70px;HEIGHT:20px" onclick="window.print();" />
                  </div></td>
                </tr>
              </table>
              <table width="544" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="3"><div align="center" class="style7 style15 style48">รายงานข้อมูลผู้รับบริการ</div></td>
                </tr>
                <tr>
                  <td width="95"><span class="style53">รหัส</span></td>
                  <td width="181"><span class="style53">ชื่อ-นามสกุล</span></td>
                  <td width="270"><span class="style53">&nbsp;เพิ่มเติม</span></td>
                  </tr>
                <?
			$sql_per=" select  * from  personal ";
			$query_per=mysql_query($sql_per);
			while ($result_per=mysql_fetch_array($query_per)){
			
			?>
                <tr>
                  <td><span class="style1">
                    <?=GenUserID($result_per['id']);?>
                    &nbsp;</span></td>
                  <td><span class="style1">
                    <?=$result_per['name'].' '.$result_per['surename'];?>
                  </span></td>
                  <td><div align="center" class="style34 style48"><a href="#" onclick="window.open('rp_service_view.php?personal_id=<?=$result_per['national_id'];?>',target='_blank','oqr',width='500',height='300','scrollbars=no')"><img src="../images/Calendar.gif" width="16" height="15" /></a></div></td>
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
