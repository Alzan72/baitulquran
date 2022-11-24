<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php
session_start();
// login
if(@$_SESSION['status']!="login" ){
  header("location:login.php?pesan=belum_login");
} else {
  echo "";
}


    if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<script>alert('Data telah di tambahkan')</script>
      ";
		}else if($pesan == "update"){
			echo "<script>alert('Data telah di ubah')</script>
      ";
		}else if($pesan == "hapus"){
			echo "<script>alert('Data telah di hapus')</script>
      ";
		}
	}
    ?>
    

    <main>
    

  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="gambar/logo2.png" alt="" width="120" height="100">
    <h1 class="display-5 fw-bold">List pendaftaran santri</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Selamat datang <?php echo $_SESSION['username']?></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="logout.php" class="btn btn-primary btn-lg px-4 gap-3">Logout</a>
      </div>
    </div>
  </div>

  <!-- features -->
  

  
<a href="tambah-data.php" class="btn btn-primary">+ Tambah data</a>
    </main>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Menu</th>
      <th scope="col">ID</th>
      <th scope="col">NO.</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.Hp</th>
      <th scope="col">Tgl.Lahir</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Motivasi</th>     
    </tr>
  </thead>
  
  <tbody>


<?php
// $pesan = $_GET['pesan'];
// if($pesan == "update"){
//   echo "Data berhasil di input.";
// };

include 'koneksi.php';

$sql = "SELECT * FROM `pendaftaran`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $number=1;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td><a class='btn btn-success' href=\"edit.php?id=".$row["ID"]."\" > Edit</a> <a class='btn btn-danger' href=\"hapus.php?id=".$row["ID"]."\" > Hapus</a></td>
      <td> imtaq-". $row["ID"]. "</td>
      <td>$number</td>
      <td>" . $row["Nama"]. "</td>
      <td>" . $row["Alamat"]. "</td>
      <td>" . $row["No.HP"]. "</td>
      <td>" . $row["Tgl.Lahir"]. "</td>
      <td>" . $row["jenis-kelamin"]. "</td>
      <td>" . $row["Motivasi"]. "</td>
     
    </tr>";
    $number++;


  }
} else {
  echo "0 results";
}
$conn->close();

?>


</tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>