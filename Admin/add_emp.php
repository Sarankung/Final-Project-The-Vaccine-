<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$admin' and a.is_active='1'";
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
.style7 {font-family: "MS Sans Serif"}
-->
</style>
</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="#"><b>˹����ѡ���˹�ҷ��</b></a></strong></li>
       
      </ul>
      <div id="meun">
        <h2>��ǹ�ͧ���˹�ҷ��</h2>
        <ul>
		  	      <?
	while ($result = mysql_fetch_array($query)){
	?>
          <li><a href=<?=$result['page_link'];?>>
	      <?=$result['page_name'];?>
		    </a></li>

            <? }?>
          <li> <a href="../logout.php">�͡�ҡ�к�</a></li>
        </ul>
      </div>
    </div>
    <div class="float-r right">
      <div id="logo">
        <h1>�к���ԡ�����ҧ���Ԥ����ѹ�ä�ͧ���á�Դ�֧ 6 �� </h1>
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
                  <td width="464"><div align="right"> <strong>
                    <?=$empname?>
                    <span class="style1 style7 style15"> Admin �������к�  ���� </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <p align="right">&nbsp;</p>
              <form action="add_emp_process.php?Action=<?="Add"?>" method="post" name="form2" id="form2">
                <table width="414" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                  <tr>
                    <td colspan="2"><div align="center" class="style15 style7 style1">���� ź��ѡ�ҹ </div></td>
                  </tr>
                  <tr>
                    <td width="84" height="21"><span class="style1">����-���ʡ��</span></td>
                    <td width="141"><input name="full_name" type="text" id="full_name" /></td>
                  </tr>
                  <tr>
                    <td><span class="style1">Username</span></td>
                    <td><input name="user_name" type="text" id="user_name" /></td>
                  </tr>
                  <tr>
                    <td><span class="style1">Password</span></td>
                    <td><input name="pass" type="text" id="pass" /></td>
                  </tr>
                  <tr>
                    <td><span class="style1">������</span></td>
                    <td><select name="type_emp" size="1" id="type_emp">
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                        <option value="manager">Manager</option>
						 <option value="Service">Service</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                        <input type="submit" name="Submit" value="������ѡ�ҹ" />
                    </div></td>
                  </tr>
                </table>
              </form>
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
