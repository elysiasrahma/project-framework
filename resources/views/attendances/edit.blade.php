<!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Data Pegawai</h2>
    @if ($errors->any())
                <div class="text-red-500 bg-white/10 p-2 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
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
                    <select name="status_absensi">
                        <option value="hadir" {{ old('status_absensi', $attendance->status_absensi) == 'hadir' ? 'selected' : '' }}>Hadir</option>
                        <option value="izin" {{ old('status_absensi', $attendance->status_absensi) == 'izin' ? 'selected' : '' }}>Izin</option>
                        <option value="sakit" {{ old('status_absensi', $attendance->status_absensi) == 'sakit' ? 'selected' : '' }}>Sakit</option>
                        <option value="alpha" {{ old('status_absensi', $attendance->status_absensi) == 'alpha' ? 'selected' : '' }}>Alpha</option>
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