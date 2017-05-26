<?
$drug_cd=$_GET['drug_id'];
require("../func/func.php");
include("../Connections/con1.php");	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>บันทึกข้อมูลการให้บริการ</title>
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
	color: #006600;
	font-weight: bold;
}
.style7 {font-family: "MS Sans Serif"}
.style48 {color: #000000}
.style22 {color: #003300}
.style34 {font-size: 13px}
.style53 {color: #000000; font-size: 12px; }
-->
</style>
</head>

<body>
<form name="form1" method="post" action="editwindows_process.php">
  <table width="549" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
    <tr>
      <th colspan="4"><div align="center" class="style7 style15 style51"><span class="style7 style15 style48">ปรับปรุงเวชระเบียน </span></div></th>
    </tr>
    <? $sql_edit=" select  * from drug where drug_id='$drug_cd' "; // ดึงข้อมูลยาที่ต้องการแก้ไข
			$query_edit=mysql_query($sql_edit);
			$result_edit=mysql_fetch_array($query_edit);
			?>
    <tr>
      <th width="141"><span class="style53">ประเภทยา</span></th>
      <th colspan="3"><p align="left" class="style53">
        <select name="category" id="category" onMouseOut="#ffffff" onFocus="style.background='#ffff00';" onBlur="style.background='#ffffff';">
          <option value="<?=$result_edit['category'];?>">
            <?=$result_edit['category'];?>
            </option>
        </select>
        <input name="drug_id" type="hidden" id="drug_id" value="<?=$result_edit['drug_id'];?>">
      </p></th>
    </tr>
    <tr>
      <th><span class="style53">ชื่อยา</span></th>
      <th width="161"><input name="drug_name" type="text" id="drug_name" onFocus="style.background='#ffff00';" onBlur="style.background='#ffffff';" onMouseOut="#ffffff" value="<?=$result_edit['name'];?>"></th>
      <th width="60"><span class="style53">ชนิด</span></th>
      <th><span class="style48">
        <select name="type" id="type" onMouseOut="#ffffff" onFocus="style.background='#ffff00';" onBlur="style.background='#ffffff';">
          <option value="<?=$result_edit['Type'];?>">น้ำ</option>
          
          
        </select>
      </span> </th>
    </tr>
    <tr>
      <th><span class="style53">จำนวน</span></th>
      <th><input name="drug_amount" type="text" id="drug_amount" onFocus="style.background='#ffff00';" onBlur="style.background='#ffffff';"  onMouseOut="#ffffff" onKeyPress="check_number();" value="<?=$result_edit['count'];?>"></th>
      <th><span class="style53">หน่วย</span></th>
      <th><span class="style48">
        <select name="unit" id="unit" onMouseOut="#ffffff" onFocus="style.background='#ffff00';" onBlur="style.background='#ffffff';">
          <option value="<?=$result_edit['unit'];?>">ขวด</option>
          
          
          
        </select>
      </span> 
    </tr>
    <tr>
      <td colspan="4"><div align="center" class="style34"><span class="style22">
        <input type="submit" name="Submit" value="แก้ไข">
      </span></div></td>
    </tr>
  </table>
</form>
</body>

</html>