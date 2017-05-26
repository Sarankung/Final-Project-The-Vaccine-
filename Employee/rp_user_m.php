<?
 session_start();
require("func/func.php");
include("Connections/con1.php");	
$sql="select * from page_permission where emp_type ='employee'";
$query=mysql_query($sql);
$getid="select * from user_tb where  username like '%$empname%' and password like '%$pwdemp%' and type='employee'";
$getquery=mysql_query($getid);
$re=mysql_fetch_array($getquery);
$empid=$re['id'];
$_SESSION['employee']=$empid;
$employeeid=$_SESSION['employee'];


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>rp_user</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<style type="text/css">
<!--
body,td,th {
	font-size: 12pt;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
body {
	background-color: #CCCCCC;
}
.style15 {
	font-size: 16px;
	color: #000066;
	font-weight: bold;
}
.style7 {font-family: "MS Sans Serif"}
.style34 {font-size: 13px}
.style48 {color: #000000}
.style50 {color: #000000; font-weight: bold; }
-->
</style>
</head>

<body>
<div id="page">
	<div id="header">
			<h1><a href="#">ระบบจ่ายยาชุมชน</a></h1>
			<p>รายงานข้อมูลผู้ใช้ระบบ</p>
			<div class="description"></div>
	</div>
	
	<div id="mainarea">
	  <div id="sidebar">
        <div id="sidebarnav">
          <div align="center"> <a class="active" href="manager.php">หน้าหลักผู้บริหาร</a>
              <?
	while ($result = mysql_fetch_array($query)){
	?>
              <a href=<?=$result['page_link'];?>>
              <?=$result['page_name'];?>
              </a>
              <? }?>
            <a href="logout.php">ออกจากระบบ</a> </div>
        </div>
      </div>
	  <div id="contentarea">
	 	  <div align="right">ผู้ดูแลระบบ
	 	    <?=$empname?> 
	 	    เข้าสู่ระบบ เวลา 
	 	    <?=today();?>
	      </div>
	 	  <p align="right">
	 	    <input type="button" name="Add" value="พิมพ์" style="FONT-FAMILY: MS SANS SERIF;FONT-SIZE : 9PT;FONT-WEIGHT:BOLD;COLOR:#800000;WIDTH:70px;HEIGHT:20px" onClick="window.print();">
	 	  </p>
      <div class="img" align="left">
	    <form name="form2" method="post" action="login_process.php">
	      <table width="473" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
            <tr>
              <td colspan="3"><div align="center" class="style7 style15 style48">รายงานข้อมูลผู้ใช้ระบบ</div></td>
            </tr>
            <tr>
              <td width="341"><span class="style48">รหัส</span></td>
              <td width="341"><span class="style50">ชื่อ</span></td>
              <td width="174"><span class="style50">&nbsp;Username</span></td>
            </tr>
            <?
			$sql_user=" select  * from  user_tb ";
			$query_user=mysql_query($sql_user);
			while ($result_user=mysql_fetch_array($query_user)){
			
			?>
            <tr>
              <td>     <span class="style48">
                <?=GenUserID($result_user['id']);?>
              &nbsp;</span></td>
              <td><span class="style48">
                <?=$result_user['fullname'];?>
              </span></td>
              <td><div align="center" class="style34 style48">  <?=$result_user['username'];?></div></td>
            </tr>
            <? }?>
          </table>
	    </form>
      </div>
       <p><br>
      </p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
      </div>
	
	
  </div>
	
	<div id="footer">
		<a href="" target="_blank"></a></div>


</div>
</body>

</html>