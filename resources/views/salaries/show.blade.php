   @extends('tailwind')

@section('title', 'Detail Gaji')
@section('header', 'Buka pegawai resume')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-[#e2d3be] border border-[#e2d3be] rounded-lg shadow-sm">
        <tbody class="divide-y divide-[#e2d3be] bg-white/80">
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Karyawan ID</th>
                <td class="px-4 py-2">{{ $salary->karyawan_id }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Bulan</th>
                <td class="px-4 py-2">{{ $salary->bulan }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Gaji Pokok</th>
                <td class="px-4 py-2">Rp {{ number_format($salary->gaji_pokok) }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Tunjangan</th>
                <td class="px-4 py-2">Rp {{ number_format($salary->tunjangan) }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Potongan</th>
                <td class="px-4 py-2">Rp {{ number_format($salary->potongan) }}</td>
            </tr>
            <tr>
                <th class="px-4 py-2 text-left font-medium text-[#4b3b2b]">Total Gaji</th>
                <td class="px-4 py-2">Rp {{ number_format($salary->total_gaji) }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
   
   <!-- <!DOCTYPE html>
   <html>
   <head>
      <title>Detail Pegawai</title>
   </head>
   <body>
      <h1>Detail Pegawai</h1>
      <table border="1" cellpadding="8" cellspacing="0">
            <tr>
               <th>Karyawan ID</th>
               <td>{{ $salary -> karyawan_id }}</td>
            </tr>
            <tr>
               <th>Bulan</th>
               <td>{{ $salary -> bulan }}</td>
            </tr>
            <tr>
               <th>Gaji Pokok</th>
               <td>{{ $salary -> gaji_pokok }}</td>
            </tr>
            <tr>
               <th>Tunjangan</th>
               <td>{{ $salary -> tunjangan }}</td>
            </tr>
            <tr>
               <th>Potongan</th>
               <td>{{ $salary -> potongan }}</td>
            </tr>
            <tr>
               <th>Total Gaji</th>
               <td>{{ $salary -> total_gaji }}</td>
            </tr>
      </table>
   </body>
   </html> -->