<?
 session_start();
require("../func/func.php");
include("../Connections/con1.php");	
$sql="select * from page_permission where emp_type ='employee' and active=1 order by page_id asc";
$query=mysql_query($sql);
$c_id=$_GET['child_id'];

$sql_show ="select * from personal where id='$c_id'";
$q_show =mysql_query($sql_show);
$r_show =mysql_fetch_array($q_show);
?>
<<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
		    $("#date-th").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['�ҷԵ��', '�ѹ���', '�ѧ���', '�ظ', '����ʺ��', '�ء��', '�����'],
              dayNamesMin: ['��.','�.','�.','�.','��.','�.','�.'],
              monthNames: ['���Ҥ�','����Ҿѹ��','�չҤ�','����¹','����Ҥ�','�Զع�¹','�á�Ҥ�','�ԧ�Ҥ�','�ѹ��¹','���Ҥ�','��Ȩԡ�¹','�ѹ�Ҥ�'],
              monthNamesShort: ['�.�.','�.�.','��.�.','��.�.','�.�.','��.�.','�.�.','�.�.','�.�.','�.�.','�.�.','�.�.']});
			  
			   $("#start").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['�ҷԵ��', '�ѹ���', '�ѧ���', '�ظ', '����ʺ��', '�ء��', '�����'],
              dayNamesMin: ['��.','�.','�.','�.','��.','�.','�.'],
              monthNames: ['���Ҥ�','����Ҿѹ��','�չҤ�','����¹','����Ҥ�','�Զع�¹','�á�Ҥ�','�ԧ�Ҥ�','�ѹ��¹','���Ҥ�','��Ȩԡ�¹','�ѹ�Ҥ�'],
              monthNamesShort: ['�.�.','�.�.','��.�.','��.�.','�.�.','��.�.','�.�.','�.�.','�.�.','�.�.','�.�.','�.�.']});
			  
			     $("#end").datepicker({  changeYear: true , changeMonth: true,yearRange: '1910:2100',  dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay, dayNames: ['�ҷԵ��', '�ѹ���', '�ѧ���', '�ظ', '����ʺ��', '�ء��', '�����'],
              dayNamesMin: ['��.','�.','�.','�.','��.','�.','�.'],
              monthNames: ['���Ҥ�','����Ҿѹ��','�չҤ�','����¹','����Ҥ�','�Զع�¹','�á�Ҥ�','�ԧ�Ҥ�','�ѹ��¹','���Ҥ�','��Ȩԡ�¹','�ѹ�Ҥ�'],
              monthNamesShort: ['�.�.','�.�.','��.�.','��.�.','�.�.','��.�.','�.�.','�.�.','�.�.','�.�.','�.�.','�.�.']});
			 
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
  <div id="main">
    <table width="896" height="192" border="0">
      <tr>
        <td width="890"><div align="center">
            <table width="655" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="13">&nbsp;</td>
                <td width="605">&nbsp;</td>
                <td width="66">&nbsp;</td>
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
            </table>
          <form id="form2" name="form2" method="post" action="">
              <table width="688" height="173" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#8DB6DD" id="t_border">

                <tr>
                  <td width="679"><div align="center"><span class="style1 style7  style49">����ѵԡ�����ԡ��</span></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table width="665" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" id="t_border">
                      <tr>
                        <td colspan="3"><div align="right"><strong><span class="style51">�Ţ��Шӵ�ǻ�ЪҪ���</span></strong></div></td>
                        <td width="194"><div align="left">
                            <input name="c_id" type="text" id="c_id" size="25" maxlength="15" readonly="true" style="background:#CCCCCC"  value="<?=$r_show['child_id'];?>"/>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="4"><div align="left"></div>
                            <div align="left"><strong><span class="style51">�ӹ�˹�Ҫ���</span> </strong><strong>
                            <input name="title" type="text" id="title" size="10" maxlength="10"  readonly="true" style="background:#CCCCCC" value="<?=$r_show['title'];?>"/>
                                </strong>                                <strong><span class="style51">���� ���ʡ��</span></strong><strong>
                                <input name="c_name" type="text" id="c_name" size="25" maxlength="30" readonly="true" style="background:#CCCCCC"  value="<?=$r_show['name'];?>" />
                                <span class="style57 style53">***</span></strong></div></td>
                      </tr>
                      <tr>
                        <td width="118"><div align="left"><strong><span class="style51">ʶҹ����Դ</span></strong></div></td>
                        <td colspan="3"><div align="left">
                            <input name="bd_place" type="text" id="bd_place"readonly="true" style="background:#CCCCCC" value="<?=$r_show['dob_place'];?>" />
                            <strong><span class="style57 style53">***</span></strong></div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><strong><span class="style51">�ѹ��͹���Դ</span></strong></div></td>
                        <td width="173"><div align="left">
                            <input name="datess" type="text" id="datess" size="15"  readonly="true" style="background:#CCCCCC" value="<?=$r_show['dob'];?>"/>
                            <strong><span class="style57 style53">***</span></strong></div></td>
                        <td width="170"><div align="left"><strong><span class="style51">�����Դ</span></strong></div></td>
                        <td><div align="left">
                            <input name="time_btd" type="text" id="time_btd"  readonly="true" style="background:#CCCCCC"  value="<?=$r_show['dob_time'];?>"/>
                            <strong><span class="style51">�.</span></strong> </div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><strong><span class="style51">���˹ѡ�á�Դ</span></strong></div></td>
                        <td><div align="left">
                            <input name="Weight" type="text" id="Weight"  readonly="true" style="background:#CCCCCC"  value="<?=$r_show['weigh'];?>"/>
                            <strong><span class="style51"> ����</span></strong></div></td>
                        <td><div align="left"><strong><span class="style51">��������á�Դ</span></strong></div></td>
                        <td><div align="left">
                            <input name="High" type="text" id="High"  readonly="true" style="background:#CCCCCC"  value="<?=$r_show['hight'];?>"/>
                            <strong><span class="style51">��.</span></strong></div></td>
                      </tr>
                      <tr>
                        <td colspan="4"><label>
                            <div align="left"> <strong><span class="style51"> ����
                              <input name="comment" type="text" id="comment" readonly="true" style="background:#CCCCCC"  value="<?=$r_show['comment'];?>"/>
                            </span></strong></div>
                          </label></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="665" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" id="t_border">
                      <tr>
                        <td width="69"><div align="left"><strong><span class="style51">������ô�</span> </strong></div></td>
                        <td width="176"><div align="left"><strong>
                            <input name="m_name" type="text" id="m_name" size="25" maxlength="100" readonly="true" style="background:#CCCCCC" value="<?=$r_show['m_name'];?>" />
                        </strong></div></td>
                        <td width="105"><div align="left"><strong><span class="style51">����
                          <input name="m_age" type="text" id="m_age" size="3" maxlength="2" readonly="true" style="background:#CCCCCC" value="<?=$r_show['m_age'];?>"/>
                          �� </span></strong></div></td>
                        <td width="71"><div align="left"><strong><span class="style51">�Ҫվ</span></strong></div></td>
                        <td width="234"><div align="left">
                            <input name="m_occ" type="text" id="m_occ" size="25" maxlength="100"  readonly="true" style="background:#CCCCCC" value="<?=$r_show['m_occ'];?>"/>
                        </div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><strong><span class="style51">���ͺԴ�</span></strong></div></td>
                        <td><div align="left">
                            <input name="f_name" type="text" id="f_name" readonly="true" style="background:#CCCCCC" value="<?=$r_show['f_name'];?>"/>
                        </div></td>
                        <td><div align="left"><strong><span class="style51">����
                          <input name="f_age" type="text" id="f_age" size="3" maxlength="2"  readonly="true" style="background:#CCCCCC" value="<?=$r_show['f_age'];?>"/>
                          �� </span></strong></div></td>
                        <td><div align="left"><strong><span class="style51">�Ҫվ</span></strong></div></td>
                        <td><div align="left">
                            <input name="f_occ" type="text" id="f_occ" size="25"readonly="true" style="background:#CCCCCC" value="<?=$r_show['f_occ'];?>"  />
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="5" align="left" valign="top" ><div align="left">
                            <table width="398" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="63" align="left" valign="top"><strong><span class="style51">�������</span></strong></td>
                                <td width="335"><span class="normal2">
                                  <textarea name="address" id="address" cols="45" rows="5" readonly="true" style="background:#CCCCCC"  ;"><?=$r_show['addr'];?></textarea>
                                </span></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="5"><div align="left"><strong><span class="style51">���Ѿ��
                          <input name="tel" type="text" id="tel" readonly="true" style="background:#CCCCCC" maxlength="10" value="<?=$r_show['tel'];?>" />
                        </span></strong></div></td>
                      </tr>
                      
                  </table></td>
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
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <form name="form4" method="post" action="meeting_process.php">
          <table width="200" border="0" cellpadding="0" cellspacing="0" bgcolor="#00FF99" id="t_border">
            <tr>
              <td><table width="688" height="115" border="0" align="center" cellpadding="1" cellspacing="4" bgcolor="#00FF99" id="t_border">
                  
                  <tr>
                    <td colspan="4"><div align="center"><span class="style1 style7  style49">�ѹ�֡������ԡ����йѴ</span></div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="76"><div align="left"><strong><span class="style51">�آ�Ҿ</span></strong></div></td>
                    <td width="156">
                      <textarea name="healt" rows="3" id="healt" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff" onkeypress="en_username()"></textarea>                    </td>
                    <td width="103"><strong><span class="style51">�Ѥ�չ������</span></strong></td>
                    <td width="325"><div align="left">
                      <input name="vaccine" type="text" id="vaccine" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff" onkeypress="en_username()">                    
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><strong><span class="style51">����ԹԨ���</span></strong></div></td>
                    <td>
                      <textarea name="adju" rows="2" id="adju" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff" onkeypress="en_username()"></textarea>                    </td>
                    <td><strong><span class="style51">����ѡ����Ф��й�</span></strong></td>
                    <td><div align="left">
                      <textarea name="C_advis" rows="2" id="C_advis" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';" onmouseout="#ffffff" onkeypress="en_username()"></textarea>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><strong><span class="style51">�ѹ���Ѵ</span></strong></div></td>
                    <td>                      <input name="date-th" type="text" id="date-th" size="21"  onkeypress="en_username()" onmouseout="#ffffff" onfocus="style.background='#ffff00';" onblur="style.background='#ffffff';"/>                    </td>
                    <td><strong><span class="style51">���ҹѴ</span></strong></td>
                    <td><div align="left">
                      <input name="meeting" type="text" id="meeting" />
                      <strong><span class="style51">�.</span></strong></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><strong><span class="style51">�����˵�</span></strong></div></td>
                    <td><textarea name="c_ment" rows="3" id="c_ment"></textarea></td>
                    <td>&nbsp;</td>
                    <td><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="left"><strong><span class="style51">��</span></strong></div></td>
										<?
					$sql=" select * from drug";
					$query=mysql_query($sql);
					
					?>
                    <td><select name="drug" id="drug" > 
			<? while ($result=mysql_fetch_array($query))
		{			
			?>
			<option value=<?=$result['drug_id'];?>><?=$result['name'];?></option>
			<? }?>
                    </select>
                    </td>
                    <td><div align="left"><strong><span class="style51">�ӹǹ</span></strong></div></td>
                    <td><div align="left">
                      <input name="count" type="text" id="count" />
                    </div></td>
                  </tr>
                  <tr>
                    <td colspan="4"><label>
                      <input name="id" type="hidden" id="id" value="<?=$c_id;?>"   />
                      <div align="center">
                        <input type="submit" name="Submit" value="��ŧ">
                        <input type="reset" name="Submit2" value="¡��ԡ">
                      </div>
                    </label></td>
                    </tr>
              </table></td>
            </tr>
          </table>
          </form>
        <p>&nbsp;</p></td>
      </tr>
    </table>
    <h2>&nbsp;</h2>
  </div>
</div>
</body>
</html>
