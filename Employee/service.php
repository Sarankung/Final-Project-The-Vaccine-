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
.style7 {font-family: "MS Sans Serif"}
.txtEnable {		background-position: center center;
		border-bottom: #000000 1px groove;
		border-right: #000000 1px groove;
		border-left: #000000 1px groove;
		border-top: #000000 1px groove;
		color: #000000;
		font-family: tahoma,ms sans serif; 
		font-size:10Pt;
		height:16pt;
}
-->
</style>
</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="Employee.php"><b>˹����ѡ���˹�ҷ��</b></a></strong></li>
       
      </ul>
      <div id="meun">
        <h2>��ǹ�ͧ���˹�ҷ��</h2>
        <ul>
		  	      <?
	while ($result = mysql_fetch_array($query)){
	?>
          <li><a href=<?=$result['page_link'].$emp_id;?>>
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
              <table width="655" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="right"><strong><span class="style1 style7 style15">���˹�ҷ��</span>
                      <?=$empname?>
                      <span class="style1 style7 style15">�������к�  ���� </span>
                      <?=today();?>
                  </strong></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="13">&nbsp;</td>
                  <td width="605"><p align="center" class="style15"><strong>���Ҫ��ͼ�����ԡ�� ���ͺѹ�֡������</strong> </p>
                    <p align="center" class="style15">&nbsp;</p></td>
                  <td width="66"><div align="center"></div></td>
                </tr>
              </table>
              <form id="form1"  method="post" target="_blank"   action="sql.php" target="_blank" >
                <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="21%" height="37">&nbsp;</td>
                    <td width="13%" align="right">���� - ʡ�� : </td>
                    <td width="20%"><input name="name" type="text" class="txtEnable" id="name"  value="" maxlength="25" /></td>
                    <td width="21%" align="left">&nbsp;<img src="../images/button_search.gif" width="12" height="13" />
                      <input name="action" type="hidden" id="action" value="service" />
                      <input type="submit" name="Submit2" value="����" /></td>
                  </tr>
                </table>
                </form>
                <p>&nbsp;</p>
              <p>&nbsp; </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>
              <form id="form3" name="form3" method="post" action="">
              </form>
            </td>
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
