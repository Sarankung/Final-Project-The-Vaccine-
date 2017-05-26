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
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-874">
<title>Village</title>
<link rel="stylesheet" type="text/css" href="../reset.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link type="text/css" href="../css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="../js/gen_validatorv4.js"></script>
		<script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
		<script type="text/javascript">
		  $(function () {
		    var d = new Date();
		    var toDay = d.getDate() + '/'
        + (d.getMonth() + 1) + '/'
        + (d.getFullYear() + 543);

				// Datepicker
		    $("#date-th").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			  
			   $("#start").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			  
			     $("#end").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
			 
			});
		</script>
		
			<style type="text/css">
			/*demo page css*/
			body{ font: 80% "Trebuchet MS", sans-serif; }
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
			ul.test {list-style:none; line-height:30px;}
		    </style>
<style type="text/css">
<!--
.style1 {color: #000000}
.style15 {	font-size: 16px;
	color: #000000;
	font-weight: bold;
}
.style7 {font-family: "MS Sans Serif"}
.style22 {color: #003300}
.style34 {font-size: 13px}
.style49 {font-weight: bold; font-size: 16px;}
.style51 {font-weight: bold; font-size: 13px;}
.style53 {color: #FF0000}
-->
</style>

</head>
<body>
<div id="bg">
  <div id="wrap">
   <div class="float-l left">
      <ul id="nav">
        <li><strong><a class="active" href="Employee.php"><b>หน้าหลักเจ้าหน้าที่</b></a></strong></li>
       
      </ul>
      <div id="meun">
        <h2>ส่วนของเจ้าหน้าที่</h2>
        <ul>
		  	      <?
	while ($result = mysql_fetch_array($query)){
	?>
          <li><a href=<?=$result['page_link'].$emp_id;?>>
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
              <table width="599" border="0">
                <tr>
                  <td height="26">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="9">&nbsp;</td>
                  <td width="9">&nbsp;</td>
                  <td width="550"><div align="right"><strong><span class="style1 style7 style15">เจ้าหน้าที่</span>
                        <?=$empname?>
                    <span class="style1 style7 style15">เข้าสู่ระบบ  เวลา </span>
                    <?=today();?>
                  </strong></div></td>
                </tr>
              </table>
              <form id="form1" name="form1" method="post" action="register_process.php">
                <p>&nbsp;</p>
                <table width="688" height="173" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#8DB6DD" id="t_border">
                              <tr>
                                <td width="679">&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="center"><span class="style1 style7  style49">ลงบันทึกสุขภาพเด็ก</span></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><table width="665" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" id="t_border">
                                  <tr>
                                    <td colspan="3"><div align="right"><strong><span class="style51">เลขประจำตัวประชาชนเด็ก</span></strong></div></td>
                                    <td width="194">
                                      <div align="left">
                                        <input   onkeypress="check_number()"name="c_id" type="text" id="c_id" size="25" maxlength="15" onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="4"><div align="left"></div>
                                      <div align="left"><strong><span class="style51">คำนำหน้าชื่อ</span> </strong>
                                          <select name="title" id="title">
                                            <option value="ด.ช.">ด.ช.</option>
                                            <option value="ด.ญ." selected="selected">ด.ญ.</option>
                                                                                    </select>
                                          <strong><span class="style51">ชื่อ นามสกุล</span></strong><strong>
                                          <input name="c_name" type="text" id="c_name" size="25" maxlength="30" onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" />
                                          <span class="style57 style53">***</span></strong></div></td>
                                  </tr>
                                  <tr>
                                    <td width="118"><div align="left"><strong><span class="style51">สถานที่เกิด</span></strong></div></td>
                                    <td colspan="3">
                                      <div align="left">
                                        <input name="bd_place" type="text" id="bd_place" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff" onkeypress="en_username()" size="50" maxlength="100"/>
                                      <strong><span class="style57 style53">***</span></strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><strong><span class="style51">วันเดือนปีเกิด</span></strong></div></td>
                                    <td width="173">
                                      <div align="left">
                                        <input name="date-th" type="text" id="date-th" size="15"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                      <strong><span class="style57 style53">***</span></strong></div></td>
                                    <td width="170"><div align="left"><strong><span class="style51">เวลาเกิด</span></strong></div></td>
                                    <td>
                                      <div align="left">
                                        <input name="time_btd" type="text" id="time_btd"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                      <strong><span class="style51">น.</span></strong>                                      </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><strong><span class="style51">น้ำหนักแรกเกิด</span></strong></div></td>
                                    <td>
                                      <div align="left">
                                        <input name="Weight" type="text" id="Weight"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                      <strong><span class="style51"> กรัม</span></strong></div></td>
                                    <td><div align="left"><strong><span class="style51">ความยาวแรกเกิด</span></strong></div></td>
                                    <td>
                                      <div align="left">
                                        <input name="High" type="text" id="High"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/> 
                                      <strong><span class="style51">ซม.</span></strong></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="4"><label>
                                      <div align="left"> <strong><span class="style51"> อื่นๆ
                                        <input name="comment" type="text" id="comment" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff" onkeypress="en_username()" size="50" maxlength="100" />
                                      </span></strong></div>
                                    </label></td>
                                  </tr>
                                  
                                </table></td>
                              </tr>
                              <tr>
                                <td><table width="665" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" id="t_border">
                                  <tr>
                                    <td width="69"><div align="left"><strong><span class="style51">ชื่อมารดา</span> </strong></div></td>
                                    <td width="176"><div align="left"><strong>
                                        <input name="m_name" type="text" id="m_name" size="25" maxlength="100"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                    </strong></div></td>
                                    <td width="105"><div align="left"><strong><span class="style51">อายุ
                                      <input name="m_age" type="text" id="m_age" size="3" maxlength="2" onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                      ปี </span></strong></div></td>
                                    <td width="71"><div align="left"><strong><span class="style51">อาชีพ</span></strong></div></td>
                                    <td width="234"><div align="left">
                                        <input name="m_occ" type="text" id="m_occ" size="25" maxlength="100"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><strong><span class="style51">ชื่อบิดา</span></strong></div></td>
                                    <td><div align="left">
                                        <input name="f_name" type="text" id="f_name" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff"  onkeypress="en_username()" size="25" maxlength="100"/>
                                    </div></td>
                                    <td><div align="left"><strong><span class="style51">อายุ
                                      <input name="f_age" type="text" id="f_age" size="3" maxlength="2"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>
                                      ปี </span></strong></div></td>
                                    <td><div align="left"><strong><span class="style51">อาชีพ</span></strong></div></td>
                                    <td><div align="left">
                                        <input name="f_occ" type="text" id="f_occ" size="25" maxlength="100"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="5" align="left" valign="top" ><div align="left">
                                        <table width="398" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="63" align="left" valign="top"><strong><span class="style51">ที่อยู่</span></strong></td>
                                            <td width="335"><span class="normal2">
                                              <textarea name="address" id="address" cols="45" rows="5"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"></textarea>
                                            </span></td>
                                          </tr>
                                        </table>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="5"><div align="left"><strong><span class="style51">โทรศัพท์
                                      <input name="tel" onkeypress="check_number()" type="text" id="tel" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff"  onkeypress="en_username()" maxlength="10" />
                                    </span></strong></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="5"><div align="left"></div></td>
                                  </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="center"><span class="style34"><span class="style22">
                                  <input type="submit" name="Submit" value="ลงทะเบียน" />
                                </span>
                                  <input name="clear" type="reset" id="clear" value="ล้างข้อมูล" />
                                </span></div></td>
                              </tr>
                              <tr>
                                <td><div align="center"></div></td>
                              </tr>
                              <tr>
                                <td><div align="center"></div></td>
                              </tr>
                            </table>
                            <div align="left"></div>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <h2>&nbsp;</h2>
              </form>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp; </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div></td>
          </tr>
        </table>
   
      </div>
    </div>
    <!-- /footer -->
  </div>
</div>
</body>
</html>
