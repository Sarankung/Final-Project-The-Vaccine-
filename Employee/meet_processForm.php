<? require("../func/func.php");
include("../Connections/con1.php");	
$b_date= $_POST["date-th"];
$c_id=$_GET['child_id'];
$sql_show ="select * from personal a
inner join service b on a.id=b.id where a.id='$c_id'";
$q_show =mysql_query($sql_show);
$r_show =mysql_fetch_array($q_show);
?>

<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />

<title>update</title>
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
.style7 {font-family: "MS Sans Serif"}
.style49 {font-weight: bold; font-size: 16px;}
.style51 {font-weight: bold; font-size: 13px;}
.style54 {color: #000066}
.style55 {font-weight: bold; font-size: 13px; color: #000066; }
-->
</style>

<form id="form1" name="form1" method="post" action="meet_process.php">
  <table width="688" height="115" border="0" align="center" cellpadding="1" cellspacing="4" bgcolor="#00FF99" id="t_border">
    <tr>
      <td colspan="4"><div align="center"><span class="style1 style7  style49">เลื่อนการนัดผู้ใช้บริการ</span></div></td>
    </tr>
    <tr>
      <td width="76">&nbsp;</td>
      <td colspan="3"><strong><span class="style55">ชื่อ- นามสกุล </span></strong> <span class="style54">
        <?=$r_show['name'];?>
      </span></td>
    </tr>
    <tr>
      <td><div align="left"><strong><span class="style51">วันที่นัด</span></strong></div></td>
      <td width="156"><input name="date-th" type="text" id="date-th" size="21"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" value="<?=$r_show['meet'];?>"/>
      </td>
      <td width="103"><strong><span class="style51">เวลานัด</span></strong></td>
      <td width="325"><div align="left">
          <input name="meeting" type="text" id="meeting"  value="<?=$r_show['meet_time'];?>"/>
          <strong><span class="style51">น.</span></strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="left"></div></td>
    </tr>
    <tr>
      <td colspan="4"><label>
          <input name="id" type="hidden" id="id" value="<?=$c_id;?>" />
        <div align="center">
            <input type="submit" name="Submit" value="เลื่อนนัด" />
            <input type="hidden" name="meet_bd"  value="<?=$b_date;?>"/>
        </div>
        </label></td>
    </tr>
  </table>
</form>
