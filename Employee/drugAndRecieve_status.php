<?
require("../func/func.php");
include("../Connections/con1.php");	
$drug_id=$_GET[drug_id];
$sql_get="select * from drug where drug_id='$drug_id'";
$get_query=mysql_query($sql_get);
$result_get=mysql_fetch_array($get_query);


?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-874"/>
<title>ตรวจรับยาและเวชภัณฑ์</title>
<style type="text/css">
<!--
body {
	background-color: #33FFCC;
}
-->
</style></head>

<body>
<form name="form1" method="post" action="drugAndrecieve_process.php?drug_id=<?=$drug_id;?>">
  <table width="356" height="150" border="1" align="center">
    <tr>
      <td width="346">รหัส :
        <?=GenServiceID($drug_id);?></td>
    </tr>
    <tr>
      <td>ชื่อยา :
        <?=$result_get['name'];?></td>
    </tr>
    <tr>
      <td>จำนวน :
        <?=$result_get['count'];?>
        &nbsp;
          <?=$result_get['unit'];?></td>
    </tr>
    <tr>
      <td><div align="center">
        <select name="status" id="status">
		   <option value="  <?=$result_get['status'];?>"> <?=$result_get['status'];?></option>
          <option value="รับยาแล้ว">รับยาแล้ว</option>
          <option value="ยังไม่ได้รับ">ยังไม่ได้รับ</option>
          </select>
        <input type="submit" name="Submit" value="บันทึก">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
