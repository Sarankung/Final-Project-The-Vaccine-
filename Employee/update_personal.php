<?
require("../func/func.php");
include("../Connections/con1.php");	
$sql="update  personal set 
child_id='$c_id',title='$title',name='$c_name',dob_place ='$bd_place'
,dob_time ='$time_btd',weigh='$Weight',hight='$High',comment='$comment',m_name='$m_name',m_age='$m_age',m_occ ='$m_occ',f_name='$f_name',f_age='$f_age',f_occ='$f_occ',addr ='$address',tel ='$tel'
where id='$child_id'";
$exc=mysql_query($sql) ;
if ($exc){?>
<script language="javascript">
 alert(" ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว !! ");
window.close();
</script>
<? }
?>



<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />

<title>update</title>