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
.style20 {color: #000033}
.style7 {font-family: "MS Sans Serif"}
.style51 {	font-size: 16px;
	color: #006600;
	font-weight: bold;
}
.style34 {font-size: 13px}
.style50 {color: #000000; font-weight: bold; }
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
              <table width="81%" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="4"><div align="center" class="style7 style15 style48"> ยาและเวชภัณฑ์ที่ต้องการจัดซื้อ </div></td>
                </tr>
                <tr>
                  <td width="219"><div align="left"><span class="style50">รายการที่ต้องจัดซื้อ</span></div></td>
                  <td width="144"><div align="center"><span class="style50">จำนวนคงเหลือ</span></div></td>
                  <td width="190"><span class="style50">หน่วย</span></td>
                  <td width="197"><div align="center"><span class="style50">&nbsp;สั่งซื้อ</span></div></td>
                </tr>
                <?
			$sql_buy=" select  * from drug where count  <=5  and status='รับยาแล้ว'";
			$query_buy=mysql_query($sql_buy);
			while ($result_buy=mysql_fetch_array($query_buy)){
			?>
                <tr>
                  <td><div align="left"><span class="style1">
                      <?=$result_buy['name'];?>
                  </span></div></td>
                  <td><div align="center"><span class="style34 style48"><font color="#FF0000">
                      <?=$result_buy['count'];?>
                  </font></span></div></td>
                  <td><div align="center" class="style1">
                      <?=$result_buy['unit'];?>
                      </font></span></div></td>
                  <td><div align="center" class="style34 style48"><a href="#" onclick="window.open('rp_drugtobuy.php?personall_id=<?=$result_buy['drug_id'];?>',target='_blank','oqr',width='1400',height='1400','scrollbars=no')"><img src="../images/edit.png" width="20" height="17" /></a></div></td>
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
