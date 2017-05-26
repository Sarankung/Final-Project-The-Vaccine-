<?
require("../func/func.php");
include("../Connections/con1.php");	
$full_name= $_POST['full_name'];
$username=$_POST['user_name'];
$password =$_POST['pass'];
 $type=$_POST['type_emp'];
$acc=$_GET['Action'];

 echo $full_name.$password;
 echo $user_name . $type;

 $time=strtotime("-1 hour"); 
$date=date("d-m-Y H:i:s",$time)  ;

$sql_max = "select max(	id) as emp_id from user_tb";
		$q_max=mysql_query($sql_max);
		$re_max=mysql_fetch_array($q_max);
		$max_emp=$re_max['emp_id']+1;

	if( $acc=="Add")
	{		
/********Admin*********/
if ($type == "admin") {
		$add_product  ="insert  into user_tb (id,fullname,username,password,type)
	  VALUES ('max_emp','$full_name','$username','$password','$type')";
		$q_add =mysql_query($add_product) ;	
		
		if ($type=="admin"){
		
			$sql_insert ="insert into page_permission
			select '','$max_emp','14','','1'";
			$q_insert=mysql_query($sql_insert);
							
				$sql_insert1 ="insert into page_permission
			select '','$max_emp','16','','1'";
			$q_insert1=mysql_query($sql_insert1);
			}
			}
		/********Employee*********/
if ($type == "employee") {
		$add_product  ="insert  into user_tb (id,fullname,username,password,type)
	  VALUES ('max_emp','$full_name','$username','$password','$type')";
		$q_add =mysql_query($add_product) ;	
		
		if ($type=="employee"){
			for ($i=1;$i<=12;$i++) {
			$sql_insert ="insert into page_permission
			select '','$max_emp','$i','','1'";
			$q_insert=mysql_query($sql_insert);
				}
			$sql_insert1 ="insert into page_permission
			select '','$max_emp','15','','1'";
			$q_insert1=mysql_query($sql_insert1);
			}
		}
		
		/********Manager*********/	
		if ($type == "manager") {
		$add_product  ="insert  into user_tb (id,fullname,username,password,type)
	  VALUES ('max_emp','$full_name','$username','$password','$type')";
		$q_add =mysql_query($add_product) ;	
		if ($type=="manager"){
			$sql_insert ="insert into page_permission
			select '','$max_emp','13','','1'";
			$q_insert=mysql_query($sql_insert);
	}
			}		
			
					/********Service*********/	
		if ($type == "Service") {
		$add_product  ="insert  into user_tb (id,fullname,username,password,type)
	  VALUES ('max_emp','$full_name','$username','$password','$type')";
		$q_add =mysql_query($add_product) ;	
		if ($type=="Service"){
			$sql_insert ="insert into page_permission
			select '','$max_emp','17','','1'";
			$q_insert=mysql_query($sql_insert);
	}
			}		
			
	if (isset($q_add) && isset ($q_insert)){?>
			<script>
			alert("ได้ทำการเพิ่มข้อมููลเรียบร้อยแล้ว");
		    document.location="add_emp.php.";
			//window.close();
            </script>
			<? }
}			
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874"/><title>Add_emp_process</title>