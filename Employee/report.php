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
.style51 {	font-size: 16px;
	color: #006600;
	font-weight: bold;
}
.style50 {color: #000099}
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
              <table width="485" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td width="33" class="style15">No.</td>
                  <td width="442"><div align="center" class="style7 style15 style48"> ��§ҹ </div></td>
                </tr>
                
                <tr>
                  <td>1</td>
                  <td><a href="rp_meeting.php">��§ҹ��ùѴ������</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><span class="style50"><a href="rp_service.php">��§ҹ�����ż���Ѻ��ԡ��</a></span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><span class="style50"><a href="rp_user.php">��§ҹ�����ż�����к�</a></span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><span class="style50"><a href="rp_drug.php">��§ҹ������������Ǫ�ѳ�줧��ѧ</a></span></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><span class="style50"><a href="rp_drugtobuy.php">��§ҹ�����š�èѴ����������Ǫ�ѳ��r</a></span></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><span class="style50"><a href="rp_withdraw.php">��§ҹ�����š���ԡ������Ǫ�ѳ��</a></span></td>
                </tr>
                <tr>
                  <!-- <td><span class="style50">��§ҹ�����š�è���������Ǫ�ѳ��</span></td>
            </tr>
            <tr>
              <td><span class="style50">��§ҹ�����š���Ѻ���Ф��������Ǫ�ѳ��</span></td>
            </tr>-->
                </tr>
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
