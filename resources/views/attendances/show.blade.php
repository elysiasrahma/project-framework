<!DOCTYPE html>
<html>
<head>
    <title>Detail Pegawai</title>
</head>
<body>
    <h1>Detail Pegawai</h1>
    <table border="1" cellpadding="8" cellspacing="0">
         <tr>
            <th>Karyawan ID</th>
            <td>{{ $attend -> karyawan_id }}</td>
         </tr>
         <tr>
            <th>Waktu Masuk</th>
            <td>{{ $attend -> waktu_masuk }}</td>
         </tr>
         <tr>
            <th>Waktu Keluar</th>
            <td>{{ $attend -> waktu_keluar }}</td>
         </tr>
         <tr>
            <th>Status Absensi</th>
            <td>{{ $attend -> status_absensi }}</td>
         </tr>
    </table>
</body>
</html>