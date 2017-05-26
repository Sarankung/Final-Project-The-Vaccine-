<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$sql="select * from page_permission where emp_type ='manager' and active=1" ;
$query=mysql_query($sql);
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
	    <p align="right">
	      <input type="button" name="Add" value="พิมพ์" style="FONT-FAMILY: MS SANS SERIF;FONT-SIZE : 9PT;FONT-WEIGHT:BOLD;COLOR:#800000;WIDTH:70px;HEIGHT:20px" onClick="window.print();">
	    </p>
      <div class="img" align="left">
	    <form name="form2" method="post" action="login_process.php">
	      <table width="903" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
            <tr>
              <td colspan="5"><div align="center" class="style7 style15 style48">รายงานข้อมูลผู้รับบริการ</div></td>
            </tr> <?
			$sql_per=" select  * from  personal ";
			$query_per=mysql_query($sql_per);
			$row=mysql_num_rows($query_per);
		
			?>
            <tr>
              <td width="87">No.</td>
              <td width="198">ชื่อ -นามสกุล </td>
              <td width="156">บิดา</td>
              <td width="188">มารดา</td>
              <td width="252">วัน/เดือน/ปี เกิด </td>
            </tr>
           <?	while ($result_per=mysql_fetch_array($query_per)){
			?>
            <tr>
              <td><?=GenUserID($result_per['id']);?>&nbsp;</td>
              <td><?=$result_per['name'];?>&nbsp;</td>
              <td><?=$result_per['f_name'];?>&nbsp;</td>
              <td><?=$result_per['m_name'];?>&nbsp;</td>
              <td><?=$result_per['dob'];?>&nbsp;</td>
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