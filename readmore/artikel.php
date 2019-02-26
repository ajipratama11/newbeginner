<?php  
 $db = new mysqli('localhost','root','','test');//koneksi database
 echo $db->connect_errno ? 'Koneksi database gagal : '.$db->connect_error:'';
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Readmore</title>
 </head>
<body>

<?php
if(isset($_GET['id'])){
 $id = $db->real_escape_string($_GET['id']);
 $query = $db->query("select * from artikel where id = '$id' ") or die($db->error);
 while($data = $query->fetch_assoc()){
 echo '<strong>'.$data['judul'].'</strong><hr />';
 echo $data['isi']; 
 }
}else{
 $query = $db->query("select * from artikel") or die($db->error);
 while($data = $query->fetch_assoc()){
 echo '<strong>'.$data['judul'].'</strong><hr />';
 $artikel = $data['isi']; 
 $potong_artikel = substr($artikel,0,10); //substr()
 echo $potong_artikel.'... <a href="artikel.php?id='.$data['id'].'">Readmore>></a>

';
 }
}
?>
</body>
</html>