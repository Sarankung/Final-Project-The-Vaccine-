<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$manag=$_SESSION['manag'];
$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$manag' and a.is_active='1' order by a.page_id asc";
$query=mysql_query($sql);

$sql_view="select * from personal a 
inner join service b on a.id=b.id  order by a.id";
$sql_queryView =mysql_query($sql_view) or die(mysql_error());
$row=mysql_num_rows($sql_queryView);

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
              <p align="right">&nbsp;</p>
              <table width="537" height="23" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div align="right">
                    <input type="button" name="Add" value="พิมพ์" style="FONT-FAMILY: MS SANS SERIF;FONT-SIZE : 9PT;FONT-WEIGHT:BOLD;COLOR:#800000;WIDTH:70px;HEIGHT:20px" onclick="window.print();" />
                  </div></td>
                </tr>
              </table>
              <p align="right">&nbsp; </p>
              <table width="643" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="4"><div align="center" class="style7 style15 style48">รายงานข้อมูลการนัดทั้งหมด</div></td>
                </tr>
                <tr>
                  <td width="95" class="style15"><div align="center"><strong>No.</strong></div></td>
                  <td width="247" class="style15"><div align="center"><strong>ชื่อ-นามสกุล</strong></div></td>
                  <td width="156" class="style15"><div align="center"><strong>วันที่นัด</strong></div></td>
                  <td width="163" class="style15"><div align="center"><strong>วันที่เข้าใช้บริการ</strong></div></td>
                </tr>
                <?
		
			$meet =format_datet($result_view['regis_date']); 
		    $rownum=mysql_num_rows($sql_queryView);
		  $i=1;
					  while ($i<=$rownum) {
			while ($result_view=mysql_fetch_array($sql_queryView)){
						?>
                                       <tr>
                  <td><div align="center"><?=$i;?></div></td>
                  <td><div align="center"><?=$result_view['name'];?></div></td>
                  <td><div align="center">
                    <?=$result_view['meet'];?>
                  </div></td>
                  <td><div align="center">
                    <?
						$meet =format_datet($result_view['regis_date']); ?>
                    <?=$meet ;?>
</div></td>
                </tr>
                <? $i++;
				}//end while 
				}
				
				?>
              </table>
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
