<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$_SESSION['ser']=$_GET['employee'];
$ser=$_SESSION['ser'];

$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$ser' and a.is_active='1' order by a.page_id asc";
$query=mysql_query($sql);
$emp=$_GET["employee"];
$pass=$_GET["pass"];

$sql_p ="select * from personal  a
	inner join service b on a.id=b.id where  a.child_id='$pass'";
$quer_py=mysql_query($sql_p);
$row=mysql_num_rows($quer_py);

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
-->
</style>
</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="#"><b>หน้าหลักเจ้าหน้าที่</b></a></strong></li>
       
      </ul>
      <div id="meun">
        <h2>ส่วนผู้ใช้บริการ</h2>
        <ul>
		  	      <?
	while ($result = mysql_fetch_array($query)){
	?>
          <li><a href=<?=$result['page_link'].$ser;?>>
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
                  <td width="464"><div align="right"><strong>
                    <span class="style1 style7 style15">ผู้ใช้บริการ <?=$empname?> เข้าสู่ระบบ  เวลา </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <table width="679" border="0" align="left">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="right">
                      <input type="button" name="Add" value="พิมพ์" style="FONT-FAMILY: MS SANS SERIF;FONT-SIZE : 9PT;FONT-WEIGHT:BOLD;COLOR:#800000;WIDTH:70px;HEIGHT:20px" onclick="window.print();" />
                  </div></td>
                </tr>
              </table>
              <p>&nbsp;</p>
              <table width="700" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="5"><div align="center" class="style7 style15 style48">ข้อมูลการนัดทั้งหมด</div></td>
                </tr>
                <tr>
                  <td width="81" class="style15"><div align="center"><strong>No.</strong></div></td>
                  <td width="208" class="style15"><div align="center"><strong>ชื่อ-นามสกุล</strong></div></td>
                  <td width="165" class="style15"><div align="center"><strong>วันที่นัด</strong></div></td>
                  <td width="149" class="style15"><div align="center"><strong>เวลา</strong></div></td>
                  <td width="221" class="style15"><div align="center"><strong>วันที่เข้าใช้บริการ</strong></div></td>
                </tr>
                <?
		
			$meet =format_datet($result_view['regis_date']); 
			while ($result_view=mysql_fetch_array($quer_py)){
						?>
                <tr>
                  <td><div align="center">
                    <?=$row;?>
                  </div></td>
                  <td><div align="center">
                    <?=$result_view[3]?>
                  </div></td>
                  <td><div align="center">
                      <?=$result_view[31];?>
                  </div></td>
                  <td><div align="center">
                      <?=$result_view[32];?>
                  </div></td>
                  <td><div align="center">
                      <?
						$meet =format_datet($result_view['regis_date']); ?>
                      <?=$meet ;?>
                  </div></td>
                </tr>
                <? 
				}//end while 
				?>
              </table>
              <p align="right">&nbsp;</p>
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
