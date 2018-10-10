<?php include('core/init.php');?>
<?php
$db = new Database;
$db->query("INSERT INTO `contacts` (first_name, last_name, phone, email, address1, address2, notes, data_added)
									VALUES (:first_name, :last_name, :phone, :email, :address1, :address2, :notes, :data_added)")
									
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':email', $_POST['email']);
$db->bind(':address1', $_POST['address1']);
$db->bind(':address2', $_POST['address2']);
$db->bind(':notes', $_POST['notes']);
$db->bind(':data_added', $_POST['data_added']);

if($db->execute()){
	echo "Kontak telah ditambahkan";
}else{
	echo "Tidak dapat menambah kontak";
}
?>