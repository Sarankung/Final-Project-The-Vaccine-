<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$sql="select * from page_permission where emp_type ='employee' and active=1";
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
.style59 {	font-size: 16px;
	color: #006600;
	font-weight: bold;
	font-family: "MS Sans Serif";
}
.style50 {color: #000000; font-weight: bold; }
.style58 {font-family: "MS Sans Serif"; font-size: 16px; }
.style59 {font-size: 16px}
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
                  <td width="464"><div align="right"><strong><span class="style1 style7 style15">���˹�ҷ��</span>
                        <?=$empname?>
                    <span class="style1 style7 style15">�������к�  ���� </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <p align="right">&nbsp;</p>
              <table width="536" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td colspan="4"><div align="center" class="style7 style15 style48">
                      <div align="center">��觵��</div>
                  </div></td>
                </tr>
                <tr>
                  <td width="88"><div align="center" class="style58"><span class="style50">����</span></div></td>
                  <td width="125"><div align="center" class="style58"><span class="style50">���ʡ��</span></div></td>
                  <td width="169"><div align="center" class="style58"><span class="style50">�ѵû�Шӵ�ǻ�Ъ�</span></div></td>
                  <td width="136"><div align="center" class="style58"><span class="style50">�ҡ��</span></div></td>
                </tr>
                <?
			$sql_user=" select  * from  personal_service where comment like '%��%' ";
			$query_user=mysql_query($sql_user);
			while ($result_user=mysql_fetch_array($query_user)){
			
			?>
                <tr>
                  <td><div align="center"><span class="style48 style7 style59">
                      <?=($result_user['name']);?>
                  </span></div></td>
                  <td><div align="center"><span class="style48 style7 style59">
                      <?=($result_user['surename']);?>
                    &nbsp;</span></div></td>
                  <td><div align="center"><span class="style48 style7 style59">
                      <?=$result_user['national_id'];?>
                  </span></div></td>
                  <td><div align="center" class="style48 style7 style59">
                      <div align="center">
                        <?=$result_user['comment'];?>
                      </div>
                  </div></td>
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
