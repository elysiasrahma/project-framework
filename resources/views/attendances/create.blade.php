<!DOCTYPE html>
<html>
<head>
    <title>Form Input Pegawai</title>
</head>
<body>
    <h1 class="mb-4">Form Pegawai</h1>
    @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    <form action="{{  route('attendances.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="karyawan_id">karyawan id: </label></td>
                <td><input type="text" id="karyawan_id" name="karyawan_id"></td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal: </label></td>
                <td><input type="date" id="tanggal" name="tanggal"></td>
            </tr>
            <tr>
                <td><label for="waktu_masuk">Waktu Masuk: </label></td>
                <td><input type="time" id="waktu_masuk" name="waktu_masuk"></td>
            </tr>
            <tr>
                <td><label for="waktu_keluar">Waktu Keluar: </label></td>
                <td><input type="time" id="waktu_keluar" name="waktu_keluar"></td>
            </tr>
            <tr>
                <td><label for="status">Status: </label></td>
                <td>
                    <select id="status_absensi" name="status_absensi">
                        <option value="hadir">Hadir</option>
                        <option value="izin">Izin</option>
                        <option value="sakit">Sakit</option>
                        <option value="alpha">Alpha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>