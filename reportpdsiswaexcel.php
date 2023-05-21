<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "latihan";
//perintah php untuk akses ke database 
$koneksi = mysqli_connect($host, $user, $password, $database);
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Jenis Pendaftaran');
$sheet->setCellValue('C1', 'Tanggal Masuk');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta');
$sheet->setCellValue('F1', 'Pernah PAUD');
$sheet->setCellValue('G1', 'Pernah TK');
$sheet->setCellValue('H1', 'SKHUN Sebelumnya');
$sheet->setCellValue('I1', 'Ijazah Sebelumnya');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita');
$sheet->setCellValue('L1', 'Nama');
$sheet->setCellValue('M1', 'Jenis Kelamin');
$sheet->setCellValue('N1', 'NISN');
$sheet->setCellValue('O1', 'NIK');
$sheet->setCellValue('P1', 'Tempat Lahir');
$sheet->setCellValue('Q1', 'Tanggal Lahir');
$sheet->setCellValue('R1', 'Agama');
$sheet->setCellValue('S1', 'Khusus');
$sheet->setCellValue('T1', 'Alamat');
$sheet->setCellValue('U1', 'RT');
$sheet->setCellValue('V1', 'RW');
$sheet->setCellValue('W1', 'Dusun');
$sheet->setCellValue('X1', 'Kelurahan');
$sheet->setCellValue('Y1', 'Kecamatan');
$sheet->setCellValue('Z1', 'POS');
$sheet->setCellValue('AA1', 'Tinggal');
$sheet->setCellValue('AB1', 'Transportasi');
$sheet->setCellValue('AC1', 'HP');
$sheet->setCellValue('AD1', 'Telp');
$sheet->setCellValue('AE1', 'Email');
$sheet->setCellValue('AF1', 'KPS');
$sheet->setCellValue('AG1', 'No. KPS');
$sheet->setCellValue('AH1', 'KWN');
$sheet->setCellValue('AI1', 'Negara');
$sheet->setCellValue('AJ1', 'Nama Ayah');
$sheet->setCellValue('AK1', 'Tahun Lahir Ayah');
$sheet->setCellValue('AL1', 'Pendidikan Ayah');
$sheet->setCellValue('AM1', 'Pekerjaan Ayah');
$sheet->setCellValue('AN1', 'Penghasilan Bulanan Ayah');
$sheet->setCellValue('AO1', 'Berkebutuhan Khusus Ayah');
$sheet->setCellValue('AP1', 'Nama Ibu');
$sheet->setCellValue('AQ1', 'Tahun Lahir Ibu');
$sheet->setCellValue('AR1', 'Pendidikan Ibu');
$sheet->setCellValue('AS1', 'Pekerjaan Ibu');
$sheet->setCellValue('AT1', 'Penghasilan Bulanan Ibu');
$sheet->setCellValue('AU1', 'Berkebutuhan Khusus Ibu');

$query = mysqli_query($koneksi, "SELECT * FROM peserta_didik");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query))

{
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['jenispendaftaran']);
    $sheet->setCellValue('C' . $i, $row['tanggal_masuk']);
    $sheet->setCellValue('D' . $i, $row['nis']);
    $sheet->setCellValue('E' . $i, $row['nomor_peserta']);
    $sheet->setCellValue('F' . $i, $row['pernah_paud']);
    $sheet->setCellValue('G' . $i, $row['pernah_tk']);
    $sheet->setCellValue('H' . $i, $row['skhun_sebelumnya']);
    $sheet->setCellValue('I' . $i, $row['ijazah_sebelumnya']);
    $sheet->setCellValue('J' . $i, $row['hobi']);
    $sheet->setCellValue('K' . $i, $row['cita']);
    $sheet->setCellValue('L' . $i, $row['nama']);
    $sheet->setCellValue('M' . $i, $row['jenis_kelamin']);
    $sheet->setCellValue('N' . $i, $row['nisn']);
    $sheet->setCellValue('O' . $i, $row['nik']);
    $sheet->setCellValue('P' . $i, $row['tempat_lahir']);
    $sheet->setCellValue('Q' . $i, $row['tanggal_lahir']);
    $sheet->setCellValue('R' . $i, $row['agama']);
    $sheet->setCellValue('S' . $i, $row['khusus']);
    $sheet->setCellValue('T' . $i, $row['alamat']);
    $sheet->setCellValue('U' . $i, $row['rt']);
    $sheet->setCellValue('V' . $i, $row['rw']);
    $sheet->setCellValue('W' . $i, $row['dusun']);
    $sheet->setCellValue('X' . $i, $row['kelurahan']);
    $sheet->setCellValue('Y' . $i, $row['kecamatan']);
    $sheet->setCellValue('Z' . $i, $row['pos']);
    $sheet->setCellValue('AA' . $i, $row['tinggal']);
    $sheet->setCellValue('AB' . $i, $row['transportasi']);
    $sheet->setCellValue('AC' . $i, $row['hp']);
    $sheet->setCellValue('AD' . $i, $row['telp']);
    $sheet->setCellValue('AE' . $i, $row['email']);
    $sheet->setCellValue('AF' . $i, $row['kps']);
    $sheet->setCellValue('AG' . $i, $row['nokps']);
    $sheet->setCellValue('AH' . $i, $row['kwn']);
    $sheet->setCellValue('AI' . $i, $row['negara']);
    $sheet->setCellValue('AJ' . $i, $row['nama_ayah']);
    $sheet->setCellValue('AK' . $i, $row['tahun_lahir_ayah']);
    $sheet->setCellValue('AL' . $i, $row['pendidikan_ayah']);
    $sheet->setCellValue('AM' . $i, $row['pekerjaan_ayah']);
    $sheet->setCellValue('AN' . $i, $row['penghasilan_bulanan_ayah']);
    $sheet->setCellValue('AO' . $i, $row['berkebutuhan_khusus_ayah']);
    $sheet->setCellValue('AP' . $i, $row['nama_ibu']);
    $sheet->setCellValue('AQ' . $i, $row['tahun_lahir_ibu']);
    $sheet->setCellValue('AR' . $i, $row['pendidikan_ibu']);
    $sheet->setCellValue('AS' . $i, $row['pekerjaan_ibu']);
    $sheet->setCellValue('AT' . $i, $row['penghasilan_bulanan_ibu']);
    $sheet->setCellValue('AU' . $i, $row['berkebutuhan_khusus_ibu']);
    $i++;
}
$styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
$i = $i - 1;
$sheet->getStyle('A1:AU'.$i)->applyFromArray($styleArray);
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Peserta Didik Siswa.xlsx');
?>