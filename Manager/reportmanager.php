<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$_SESSION['manag']=$_GET['employee'];
$manag=$_SESSION['manag'];

$sql="select * from page_permission a
inner join page b on a.page_id=b.page_id
 where  a.emp_id='$manag' and a.is_active='1' order by a.page_id asc";
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
          <li><a href=<?=$result['page_link'].$manag;?>>
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
              <table width="471" border="1" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#8DB6DD">
                <tr>
                  <td width="51"><div align="center"><strong class="style15">No.</strong></div></td>
                  <td width="410"><div align="center" class="style7 style15 style48"> ��§ҹ </div></td>
                </tr>
                <tr>
                  <td><div align="center">1</div></td>
                  <td><a href="rp_meeting.php?employee=<?=$manag;?>">��§ҹ��ùѴ������</a></td>
                </tr>
                <tr>
                  <td><div align="center">2</div></td>
                  <td><span class="style50"><a href="rp_manger_service_m.php?employee=<?=$manag;?>">��§ҹ�����ż���Ѻ��ԡ��</a></span></td>
                </tr>
                <tr>
                  <td><div align="center">3</div></td>
                  <td><span class="style50"><a href="rp_mangerrp_user_m.php?employee=<?=$manag;?>">��§ҹ�����ż�����к�</a></span></td>
                </tr>
                <tr>
                  <td><div align="center">4</div></td>
                  <td><span class="style50"><a href="rp_mangerrp_drug_m.php?employee=<?=$manag;?>">��§ҹ������������Ǫ�ѳ�줧��ѧ</a></span></td>
                </tr>
                <tr>
                  <td><div align="center">5</div></td>
                  <td><span class="style50"><a href="rp_mangerrp_drugtobuy_m.php?employee=<?=$manag;?>">��§ҹ�����š�èѴ����������Ǫ�ѳ��</a></span></td>
                </tr>
                <tr>
                  <td><div align="center">6</div></td>
                  <td><span class="style50"><a href="rp_mangerrp_withdraw_m.php?employee=<?=$manag;?>">��§ҹ�����š���ԡ������Ǫ�ѳ��</a></span></td>
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
