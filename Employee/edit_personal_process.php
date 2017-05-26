<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$c_id=$_GET['child_id'];
$sql_show ="select * from personal where id='$c_id'";
$q_show =mysql_query($sql_show);
$r_show =mysql_fetch_array($q_show);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=tis-620"/>
<title>แก้ไขประวัติผู้ใช้บริการ</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style49 {font-weight: bold; font-size: 16px;}
.style51 {font-weight: bold; font-size: 13px;}
.style53 {color: #FF0000}
.style7 {font-family: "MS Sans Serif"}
-->
</style>
</head>

<body>
<form id="form2" name="form2" method="post" action="update_personal.php">
  <table width="688" height="173" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#8DB6DD" id="t_border">
    <tr>
      <td width="679"><div align="center"><span class="style1 style7  style49">แก้ไขประวัติผู้ใช้บริการ</span></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="665" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" id="t_border">
          <tr>
            <td colspan="3"><div align="right"><strong><span class="style51">เลขประจำตัวประชาชนเด็ก</span></strong></div></td>
            <td width="194"><div align="left">
                <input name="c_id" type="text" id="c_id" size="25" maxlength="15"  style="background:#CCCCCC"  value="<?=$r_show['child_id'];?>"/>
            </div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="left"></div>
                <div align="left"><strong><span class="style51">คำนำหน้าชื่อ</span> </strong><strong>
                  <input name="title" type="text" id="title" size="10" maxlength="10"   style="background:#CCCCCC" value="<?=$r_show['title'];?>"/>
                  </strong> <strong><span class="style51">ชื่อ นามสกุล</span></strong><strong>
                  <input name="c_name" type="text" id="c_name" size="25" maxlength="30"  style="background:#CCCCCC"  value="<?=$r_show['name'];?>" />
                  <span class="style57 style53">***</span></strong></div></td>
          </tr>
          <tr>
            <td width="118"><div align="left"><strong><span class="style51">สถานที่เกิด</span></strong></div></td>
            <td colspan="3"><div align="left">
                <input name="bd_place" type="text" id="bd_place" style="background:#CCCCCC" value="<?=$r_show['dob_place'];?>" />
                <strong><span class="style57 style53">***</span></strong></div></td>
          </tr>
          <tr>
            <td><div align="left"><strong><span class="style51">วันเดือนปีเกิด</span></strong></div></td>
            <td width="173"><div align="left">
                <input name="datess" type="text" id="datess" size="15"   style="background:#CCCCCC" value="<?=$r_show['dob'];?>"/>
                <strong><span class="style57 style53">***</span></strong></div></td>
            <td width="170"><div align="left"><strong><span class="style51">เวลาเกิด</span></strong></div></td>
            <td><div align="left">
                <input name="time_btd" type="text" id="time_btd"   style="background:#CCCCCC"  value="<?=$r_show['dob_time'];?>"/>
                <strong><span class="style51">น.</span></strong> </div></td>
          </tr>
          <tr>
            <td><div align="left"><strong><span class="style51">น้ำหนักแรกเกิด</span></strong></div></td>
            <td><div align="left">
                <input name="Weight" type="text" id="Weight"   style="background:#CCCCCC"  value="<?=$r_show['weigh'];?>"/>
                <strong><span class="style51"> กรัม</span></strong></div></td>
            <td><div align="left"><strong><span class="style51">ความยาวแรกเกิด</span></strong></div></td>
            <td><div align="left">
                <input name="High" type="text" id="High"   style="background:#CCCCCC"  value="<?=$r_show['hight'];?>"/>
                <strong><span class="style51">ซม.</span></strong></div></td>
          </tr>
          <tr>
            <td colspan="4"><label>
                <div align="left"> <strong><span class="style51"> อื่นๆ
                  <input name="comment" type="text" id="comment"  style="background:#CCCCCC"  value="<?=$r_show['comment'];?>"/>
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
                <input name="m_name" type="text" id="m_name" size="25" maxlength="100"  style="background:#CCCCCC" value="<?=$r_show['m_name'];?>" />
            </strong></div></td>
            <td width="105"><div align="left"><strong><span class="style51">อายุ
              <input name="m_age" type="text" id="m_age" size="3" maxlength="2"  style="background:#CCCCCC" value="<?=$r_show['m_age'];?>"/>
              ปี </span></strong></div></td>
            <td width="71"><div align="left"><strong><span class="style51">อาชีพ</span></strong></div></td>
            <td width="234"><div align="left">
                <input name="m_occ" type="text" id="m_occ" size="25" maxlength="100"   style="background:#CCCCCC" value="<?=$r_show['m_occ'];?>"/>
            </div></td>
          </tr>
          <tr>
            <td><div align="left"><strong><span class="style51">ชื่อบิดา</span></strong></div></td>
            <td><div align="left">
                <input name="f_name" type="text" id="f_name"  style="background:#CCCCCC" value="<?=$r_show['f_name'];?>"/>
            </div></td>
            <td><div align="left"><strong><span class="style51">อายุ
              <input name="f_age" type="text" id="f_age" size="3" maxlength="2"   style="background:#CCCCCC" value="<?=$r_show['f_age'];?>"/>
              ปี </span></strong></div></td>
            <td><div align="left"><strong><span class="style51">อาชีพ</span></strong></div></td>
            <td><div align="left">
                <input name="f_occ" type="text" id="f_occ" size="25" style="background:#CCCCCC" value="<?=$r_show['f_occ'];?>" />
            </div></td>
          </tr>
          <tr>
            <td colspan="5" align="left" valign="top" ><div align="left">
                <table width="398" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="63" align="left" valign="top"><strong><span class="style51">ที่อยู่</span></strong></td>
                    <td width="335"><span class="normal2">
                      <textarea name="address" id="address" cols="45" rows="5"  style="background:#CCCCCC"  ;"><?=$r_show['addr'];?>
  </textarea>
                    </span></td>
                  </tr>
                </table>
            </div></td>
          </tr>
          <tr>
            <td colspan="5"><div align="left"><strong><span class="style51">โทรศัพท์
              <input name="tel" type="text" id="tel"  style="background:#CCCCCC" maxlength="10" value="<?=$r_show['tel'];?>" />
            </span></strong></div></td>
          </tr>
          <tr>
            <td colspan="5"><div align="left">
                <div align="center">
                  <input type="submit" name="Submit" value="แก้ไข" />
                  <input type="hidden" name="child_id"  value="<?=$c_id;?>" />
                </div>
            </div></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
