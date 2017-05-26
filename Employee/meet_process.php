<? require("../func/func.php");
include("../Connections/con1.php");	
$b_date= $_POST["date-th"];
$sql="update service set meet='$b_date',meet_time='$meeting'   where id='$id'";
$exc=mysql_query($sql) ;
if ($exc){?>
<script language="javascript">
 alert(" ได้ทำการเลื่อนวันนัดเรียบร้อยแล้ว !! ");
window.close();
</script>
<? }?>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />

<title>update</title>