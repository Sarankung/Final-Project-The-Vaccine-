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
  <div id="mainarea">
	  <div id="contentarea">
	    <p align="center">&nbsp;</p>
      <div class="img" align="left">
	    <form name="form2" method="post" action="login_process.php">
	      <table width="721" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
            <tr>
              <td colspan="4"><div align="center" class="style7 style15 style48">รายงานข้อมูลผู้รับบริการ</div></td>
            </tr> <?
			$sql_per=" select  * from  personal ";
			$query_per=mysql_query($sql_per);
			while ($result_per=mysql_fetch_array($query_per)){
			
			?>
            <tr>
              <td width="204"><span class="style50">รหัส</span></td>
              <td width="237"><span class="style48">
                <?=GenServiceID($result_per['personal_id']);?>
              </span></td>
              <td width="123"><span class="style50">น้ำหนัก</span></td>
              <td width="256"><span class="style48">
                <?=($result_per['weigh']);?>
              </span></td>
            </tr>
           
            <tr>
              <td><span class="style50">ชื่อ</span></td>
              <td><span class="style48">
                <?=$result_per['name'].' '.$result_per['surename'];?>
              </span></td>
              <td><span class="style50">ส่วนสูง</span></td>
              <td><span class="style48">
                <?=($result_per['hight']);?>
              </span></td>
            </tr>
            <tr>
              <td><span class="style50">บัตรประจำตัวประชาชน</span></td>
              <td><span class="style48">
                <?=$result_per['national_id'];?>
              </span></td>
              <td><span class="style50">ความดัน</span></td>
              <td><span class="style48">
                <?=($result_per['pressure']);?>
              </span></td>
            </tr>
            <tr>
              <td>     <span class="style48"><span class="style50">โรคประจำตัว</span></span></td>
              <td><span class="style48">
                <?=($result_per['congenital_desease']);?>
              </span></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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