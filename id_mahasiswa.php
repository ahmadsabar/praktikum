<html>
	<body>
	<form method = "post" action = "id_mahasiswa.php">
		<table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">id</td>
            <td><input name="id" type="text" id="id"></td>
        </tr>
        <tr>
            <td width="120">nama_mahasiswa</td>
            <td><input name="nama_mahasiswa" type="text" id="nama_mahasiswa"></td>
        </tr>	
		<tr>
		
            <td width="120">alamat</td>
            <td><input name="alamat" type="text" id="alamat"></td>
        
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
	</table>
		</form>
<?php
if(isset($_POST['simpan']))
            {
$host="localhost";
$user="root";
$pasword="";
$database = "id_mahasiswa";
$konek = mysqli_connect($host,$user,$pasword,$database);
//mysql_select_db($database);
//
//if($konek) {
//echo"<b>koneksi php ke id_mahasiswa mysql berhasil</b>";
//}
//else{
//echo"<b>koneksi ke id_mahasiswa gagal</b>";
//}
      if(! get_magic_quotes_gpc() )
            {
               $id = addslashes ($_POST['id']);
               $nama_mahasiswa= addslashes ($_POST['nama_mahasiswa']);
			   $alamat= addslashes ($_POST['alamat']);
 }
            else
            {
               $id = $_POST ['id'];
               $nama_mahasiswa = $_POST ['nama_mahasiswa'];
			   $alamat=$_POST['alamat'];
                  }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO mahasiswa ".
                   "(id,nama_mahasiswa,alamat) ".
                   "VALUES('$id','$nama_mahasiswa','$alamat')";
            //mysql_select_db('id_mahasiswa');
            $tambahdata = mysqli_query($konek, $sql );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysqli_error($konek));
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT id,nama_mahasiswa,alamat FROM mahasiswa";
            //mysql_select_db('id_mahasiswa');
            $hasil = mysqli_query($konek,$sql);
            
            // Hasil Inputan
            while ( $row = mysqli_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "id: " . $row["id"]. " - nama_mahasiswa: " . $row["nama_mahasiswa"]."-alamat: ".$row ["alamat"]. "<br>";
            }
            mysqli_close($konek);
            }
            else
            {
            }
        ?>      

