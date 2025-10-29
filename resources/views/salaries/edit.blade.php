karyawan_id<!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Data Pegawai</h2>
    <form action="{{ route('salaries.update', $salaries->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Karyawan ID</td>
                <td><input type="text" name="karyawan_id" value="{{ old('karyawan_id', $salaries->karyawan_id) }}"></td>
            </tr>
            <tr>
                <td>Bulan</td>
                <td><input type="text" name="bulan" value="{{ old('bulan', $salaries->bulan) }}"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="decimal" name="gaji_pokok" value="{{ old('gaji_pokok', $salaries->gaji_pokok) }}"></td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td><input type="decimal" name="tunjangan" value="{{ old('tunjangan', $salaries->tunjangan) }}"></td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td><input type="decimal" name="potongan" value="{{ old('potongan', $salaries->potongan) }}"></td>
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