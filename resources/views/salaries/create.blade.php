<!DOCTYPE html>
<html>
<head>
    <title>Form Input Pegawai</title>
</head>
<body>
    <h1 class="mb-4">Form Pegawai</h1>
    <form action="{{  route('salaries.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="karyawan_id">Karyawan ID: </label></td>
                <td><input type="text" id="karyawan_id" name="karyawan_id"></td>
            </tr>
            <tr>
                <td><label for="bulan">Bulan: </label></td>
                <td><input type="text" id="bulan" name="bulan"></td>
            </tr>
            <tr>
                <td><label for="gaji_pokok">Gaji Pokok: </label></td>
                <td><input type="decimal" id="gaji_pokok" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td><label for="tunjangan">tunjangan: </label></td>
                <td><input type="decimal" id="tunjangan" name="tunjangan"></td>
            </tr>
            <tr>
                <td><label for="potongan">potongan: </label></td>
                <td><input type="decimal" id="potongan" name="potongan"></td>
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