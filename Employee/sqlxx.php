<?
session_start();
require("../func/func.php");
include("../Connections/con1.php");	
?>

<?
$sqls="select * from personal where name like '%$name%'";
$sql_query =mysql_query($sqls) or die(mysql_error());
$row=mysql_num_rows($sql_query );
if ($row)
{?>	
<table width="50%" height="58" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
  <tr  bgcolor="#CCCCCC">
    <td width="266" height="25"><div align="center" class="style2">ชื่อ - นามสกุล</div></td>
    <td width="188"><div align="center" class="style2">ชื่อบิดา</div></td>
    <td width="188"><div align="center" class="style2">ชื่อมารดา</div></td>
	<td width="181"><div align="center" class="style2">เลือก</div></td>
  </tr>		  
	<? while ($result_query=mysql_fetch_array($sql_query)){
		?>
 <tr  bgcolor="#3399ff" >
    <td height="31" bgcolor="#99CCFF"><?=$result_query['name'];?></td>
    <td bgcolor="#99CCFF"><?=$result_query['f_name'];?></td>
    <td bgcolor="#99CCFF"><?=$result_query['m_name'];?></td>
	<td bgcolor="#99CCFF" ><div align="center"><a href="#" onClick="window.open('service_process.php?child_id=<?=$result_query['id'];?>',target='_blank','oqr',width='400',height='500','scrollbars=no')"><img src="../images/edit.png" width="18" height="17" border="0" /></a></div></td>
  </tr>
  <? }?>
</table>
<? }
else if ($row==0){?>
<script language="javascript">
		 alert(" ไม่พบข้อมูลที่ค้นหา กรอกข้อมูลค้นหาอีกครั้ง ค่ะ !");
		window.close();
		</script>
<? } ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>
<title>sql</title>
<style type="text/css">
<!--
.style2 {font-family: "Times New Roman", Times, serif; }
-->
</style>
</head>

<body>

</body>
</html>
