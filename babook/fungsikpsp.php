      <?php 

include 'config.php';
  $umur = "%";
  //untuk mengisi var umur
  if (isset($_POST['submit'])) {
    # code...
    $umur = $_POST['umur'];
  }

  //membuat query isi combobox
  $dafumur = mysqli_query($koneksi, "SELECT DISTINCT umur FROM kpsp order by umur");

  $result = mysqli_query($koneksi, "SELECT * FROM kpsp WHERE umur LIKE '$umur'");
 ?>
