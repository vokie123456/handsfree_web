<?php  
/* 
 * ���ݿ����*���������ݿ⣬���������ݣ�����������ݣ�  
 * 
 * To change the template for this generated file go to 
 * Window - Preferences - PHPeclipse - PHP - Code Templates 
 */  
//���������ݿ�  
$servername="localhost";  
$username="handsfree";  
$userpassword="handsfree";  
  
$connent=new mysqli($servername,$username,$userpassword);  
if($connent->connect_error){  
    die("����ʧ��: " . $connent->connect_error);  
}else{  
    echo "���ӳɹ�";  
}   
?>  
