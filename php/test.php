<?php  
/* 
 * 数据库操作*（创建数据库，表，插入数据，插入多条数据）  
 * 
 * To change the template for this generated file go to 
 * Window - Preferences - PHPeclipse - PHP - Code Templates 
 */  
//先连接数据库  
$servername="localhost";  
$username="handsfree";  
$userpassword="handsfree";  
  
$connent=new mysqli($servername,$username,$userpassword);  
if($connent->connect_error){  
    die("连接失败: " . $connent->connect_error);  
}else{  
    echo "连接成功";  
}   
?>  
