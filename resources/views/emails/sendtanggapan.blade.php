@component('mail::message')
Halo!
Laporanmu sudah ditanggapi nih! Lihat tanggapan dari pengaduanmu sekarang!

<table id="pengaduanTable" class="table table-bordered" data-toggle="data-table">
    <thead>
        <tr>
            <th>Tanggal Pengaduan</th>
            <th>Isi Pengaduan</th>
            <th>Isi Tanggapan</th>
            <th>Status Pengaduan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-justify">{{ $data['tgl_pengaduan'] }}</td>
            <td class="text-justify">{{ $data['isi_laporan'] }}</td>
            <td class="text-justify">{{ $data['tanggapan'] }}</td>
            <td class="text-justify">{{ $data['status'] }}</td>
        </tr>
    </tbody>
</table>

@component('mail::button', ['url' => route('dashboard') ])
Lihat detail tanggapan
@endcomponent

Terima kasih,<br>
Pengaduan Masyarakat
@endcomponent