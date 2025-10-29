<!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Data Pegawai</h2>
    <form action="{{ route('employees.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Karyawan ID</td>
                <td><input type="text" name="karyawan_id" value="{{ old('karyawan_id', $attendance->karyawan_id) }}"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="{{ old('tanggal', $attendance->tanggal) }}"></td>
            </tr>
            <tr>
                <td>Waktu Masuk</td>
                <td><input type="time" name="waktu_masuk" value="{{ old('waktu_masuk', $attendance->waktu_masuk) }}"></td>
            </tr>
            <tr>
                <td>Waktu_Keluar</td>
                <td><input type="time" name="waktu_keluar" value="{{ old('waktu_keluar', $attendance->waktu_keluar) }}"></td>
            </tr>
            
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="Hadir" {{ old('status', $attendance->status) == 'hadir' ? 'selected' : '' }}>Hadir</option>
                        <option value="Izin" {{ old('status', $attendance->status) == 'izin' ? 'selected' : '' }}>Izin</option>
                        <option value="Sakit" {{ old('status', $attendance->status) == 'sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="Alpha" {{ old('status', $attendance->status) == 'alpha' ? 'selected' : '' }}>Alpha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>