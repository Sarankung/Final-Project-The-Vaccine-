<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$emp_cd=$_GET['emp'];
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
.style20 {color: #000033}
.style7 {font-family: "MS Sans Serif"}
.style21 {font-size: 16px;
	color: #006600;
}
.style16 {color: #000099; }
.style22 {	font-size: 16px;
	color: #006600;
	font-weight: bold;
}
.style24 {color: #333333}
-->
</style>
</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="admin.php"><b>หน้าหลักเจ้าหน้าที่</b></a></strong></li>
       
      </ul>
      <div id="meun">
        <h2>ส่วนของเจ้าหน้าที่</h2>
        <ul>
		  	      <?
	while ($result = mysql_fetch_array($query)){
	?>
          <li><a href=<?=$result['page_link'];?>>
	      <?=$result['page_name'];?>
		    </a></li>

            <? }?>
          <li> <a href="../logout.php">ออกจากระบบ</a></li>
        </ul>
      </div>
    </div>
    <div class="float-r right">
      <div id="logo">
        <h1>ระบบบริการสร้างภูมิคุ้มกันโรคของเด็กแรกเกิดถึง 6 ปี </h1>
        <div></div>
      </div>
      <div id="main">
        <table width="767" height="192" border="0">
          <tr>
            <td width="806"><div align="center">
              <table width="512" border="0">
                <tr>
                  <td width="13">&nbsp;</td>
                  <td width="13">&nbsp;</td>
                  <td width="464"><div align="right"><strong><span class="style1 style7 style15">เจ้าหน้าที่</span>
                        <?=$empname?>
                    <span class="style1 style7 style15">เข้าสู่ระบบ  เวลา </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <div class="img" align="left">
                <form id="form1" name="form1" method="post" action="Adminpermission_open.php?emp=<?=$emp;?>">
                  <table width="69%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666" bgcolor="#999999" id="lyInvoice" style="border:1px solid #CCCCCC;">
                    <tr>
                      <th><span class="style24">หน้ากำหนดสิทธิ์</span></th>
                      <th><span class="style24">เปิด/ปิด หน้าเว็บ</span></th>
                    </tr>
                    <?
					  $sql_permission="select * from page_permission a
						inner join page b on a.page_id=b.page_id
						 where  a.emp_id='$emp'";
					  $query_permission =mysql_query($sql_permission);
					  while  ($re_permission=mysql_fetch_array($query_permission))
					  {
                      ?>
                    <tr>
                      <th bgcolor="#0099CC"><div align="left"> <font color="#000000">
                        <?=$re_permission['page_name'];?>
                        </font>
                              <input type="hidden" name="page[]" id="page[]"  value="<?=$re_permission['page_id'];?>"/>
                      </div></th>
                      <th  bgcolor="#0099CC"> <select name="OpenClose[]" id="OpenClose" <? if ($re_permission['is_active']=='1'){
								  echo "style='background:#0F0'";
								  } else {
									  echo "style='background:#F00'";
									  }?>>
                          <?
								if ($re_permission['is_active']=='1') {
                            ?>
                          <option value="1" style="background:#0F0" selected="selected">เปิด</option>
                          <option value="0" style="background:#F00">ปิด</option>
                          <? }
							 if  ($re_permission['is_active']=='0') {?>
                          <option value="1" style="background:#0F0" >เปิด</option>
                          <option value="0" style="background:#F00"selected="selected">ปิด</option>
                          <? }
                             ?>
                      </select></th>
                    </tr>
                    <? } // END While ?>
                    <tr>
                      <th colspan="2" bgcolor="#0099CC"><div align="center">
                        <input type="submit" name="button2" id="button2" value="บันทึก" />
                      </div></th>
                    </tr>
                    <?
						
						if ($_SERVER['REQUEST_METHOD']=="POST"){ //กรณีที่มีการส่ง
							$open=$_POST['OpenClose'];
							$j=count ($page);//นับจำนวน page ที่ดึงจากถังข้อมูลทั้งหมด เก็บไว้ในตัวแปร j
							//echo "count $j";//7
							$i=0;
							while ($i<$j) { //ถ้า $i < $j
							
								foreach($page as $p){											
								//echo "page is : $p <br>";
								//echo 'page'.$p.'value'. $open[$i].'user:'.$user_id.' <br>';
	 $sql_updatePermission="update page_permission set is_active='$open[$i]' where emp_id='$emp' and page_id='$p'";
	 $q_update =mysql_query($sql_updatePermission) ;	 
		
							$i++;
							}	 //header("location:admin_index.php");
		if ($q_update){?>
                    <script>
			 alert("ได้ทำการกำหนดสิทธิ์เรียบร้อยแล้ว!! ");
		    document.location="Adminpermission_open.php?emp=<?=$emp_cd?>";		// refesh page set_permissiont	
			//window.close();
                  </script>
                    <?				}
						}
						}
					?>
                  </table>
                </form>
              </div>
              <p align="right">&nbsp;</p>
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
