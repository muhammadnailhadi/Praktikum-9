<h2>List Peserta Didik</h2>
<table border="3">
<tr>
  <th>ID</th>
  <th>Jenis Pendaftaran</th>
  <th>Tanggal Masuk</th>
  <th>NIS</th>
  <th>Nomor Peserta</th>
  <th>Pernah PAUD</th>
  <th>Pernah TK</th>
  <th>SKHUN Sebelumnya</th>
  <th>Ijazah Sebelumnya</th>
  <th>Hobi</th>
  <th>Cita</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>NISN</th>
  <th>NIK</th>
  <th>Tempat Lahir</th>
  <th>Tanggal Lahir</th>
  <th>Agama</th>
  <th>Khusus</th>
  <th>Alamat</th>
  <th>RT</th>
  <th>RW</th>
  <th>Dusun</th>
  <th>Kelurahan</th>
  <th>Kecamatan</th>
  <th>POS</th>
  <th>Tinggal</th>
  <th>Transportasi</th>
  <th>HP</th>
  <th>Telp</th>
  <th>Email</th>
  <th>KPS</th>
  <th>No. KPS</th>
  <th>Kewarganegaraan</th>
  <th>Negara</th>
  <th>Nama Ayah</th>
  <th>Tahun Lahir Ayah</th>
  <th>Pendidikan Ayah</th>
  <th>Pekerjaan Ayah</th>
  <th>Penghasilan Bulanan Ayah</th>
  <th>Berkebutuhan Khusus Ayah</th>
  <th>Nama Ibu</th>
  <th>Tahun Lahir Ibu</th>
  <th>Pendidikan Ibu</th>
  <th>Pekerjaan Ibu</th>
  <th>Penghasilan Bulanan Ibu</th>
  <th>Berkebutuhan Khusus Ibu</th>
</tr>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "latihan";

    $koneksi = mysqli_connect($host, $username, $password, $database);
    $pesertadidik = mysqli_query($koneksi, "SELECT * from peserta_didik");
    foreach ($pesertadidik as $row){
        echo "<tr>
        <td>".$row['id']."</td>
<td>".$row['jenispendaftaran']."</td>
<td>".$row['tanggal_masuk']."</td>
<td>".$row['nis']."</td>
<td>".$row['nomor_peserta']."</td>
<td>".$row['pernah_paud']."</td>
<td>".$row['pernah_tk']."</td>
<td>".$row['skhun_sebelumnya']."</td>
<td>".$row['ijazah_sebelumnya']."</td>
<td>".$row['hobi']."</td>
<td>".$row['cita']."</td>
<td>".$row['nama']."</td>
<td>".$row['jenis_kelamin']."</td>
<td>".$row['nisn']."</td>
<td>".$row['nik']."</td>
<td>".$row['tempat_lahir']."</td>
<td>".$row['tanggal_lahir']."</td>
<td>".$row['agama']."</td>
<td>".$row['khusus']."</td>
<td>".$row['alamat']."</td>
<td>".$row['rt']."</td>
<td>".$row['rw']."</td>
<td>".$row['dusun']."</td>
<td>".$row['kelurahan']."</td>
<td>".$row['kecamatan']."</td>
<td>".$row['pos']."</td>
<td>".$row['tinggal']."</td>
<td>".$row['transportasi']."</td>
<td>".$row['hp']."</td>
<td>".$row['telp']."</td>
<td>".$row['email']."</td>
<td>".$row['kps']."</td>
<td>".$row['nokps']."</td>
<td>".$row['kwn']."</td>
<td>".$row['negara']."</td>
<td>".$row['nama_ayah']."</td>
<td>".$row['tahun_lahir_ayah']."</td>
<td>".$row['pendidikan_ayah']."</td>
<td>".$row['pekerjaan_ayah']."</td>
<td>".$row['penghasilan_bulanan_ayah']."</td>
<td>".$row['berkebutuhan_khusus_ayah']."</td>
<td>".$row['nama_ibu']."</td>
<td>".$row['tahun_lahir_ibu']."</td>
<td>".$row['pendidikan_ibu']."</td>
<td>".$row['pekerjaan_ibu']."</td>
<td>".$row['penghasilan_bulanan_ibu']."</td>
<td>".$row['berkebutuhan_khusus_ibu']."</td>
                </tr>";
    }
    ?>
</table>
<br>
<br>
<form action="reportpdsiswaexcel.php" method="POST" onsubmit="showExportSuccessMessage()">
  <input type="submit" name="export_excel" value="Export to Excel">
</form>

<script>
  // Fungsi untuk menampilkan alert "Export ke excel berhasil"
  function showExportSuccessMessage() {
    alert("Berhasil Export ke Excel");
  }
</script>