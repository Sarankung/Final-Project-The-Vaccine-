<?
//echo "C_advis: $C_advis";
require("../func/func.php");
include("../Connections/con1.php");	
$meet_date= $_POST["date-th"];
$time=strtotime("-1 hour"); 
$todays=date("d-m-Y H:i:s",$time)  ;
//echo "c_id:$id"; //�Ѻ��� $id �ҡ Hidden �ҡ˹�� Service
////////////// INSERT ������ ��� Table service ���ͺѹ�֡������ԡ����С�ùѴ�١���///////////////////////////

if($healt != "" || $adju != "" || $meet_date != "") {
$sql_insert="insert into service(id,physical,adjudocate,advise,vaccince,meet,meet_time,comment,date)
 VALUES('$id','$healt','$adju','$C_advis','$vaccine','$meet_date','$meeting','$c_ment','$todays')";
 $sql_query=mysql_query($sql_insert) or die (mysql_error());
 
 $sql_insert2="insert into withdraw (drug_id,count,service_id,withdraw_dt)
  VALUES('$drug','$count','$id','$todays')";
   $sql_query=mysql_query($sql_insert2) or die (mysql_error());
   
   $sql_update="update drug set count = count-$count where drug_id = '$drug'";
   $qupdate=mysql_query($sql_update);
 /////////////�ҡ�ա�� INSERT ���������º���������������ӡ�úѹ�֡���������º��������//////////////////////////
 if ($sql_query){?>
 <script language="javascript">
	 alert(" ��ӡ�úѹ�֡���������º�������Ǥ� !");
		document.location="service_process.php?child_id=<?=$id;?>";
	
		</script>
<? } // end if query
 } //end if check ����ա�á�͡�����Ťú�������
 if($healt == "" || $adju == "" || $meet_date== "") {?>
<script language="javascript"> 
 //alert(" ��سҡ�͡���������ú !");

	alert("��سҡ�͡���������ú !");history.back();
</script>
<? }
?>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-874"><title>Untitled Document</title>