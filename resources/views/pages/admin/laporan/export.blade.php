<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pengaduan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Pengaduan Masyarakat</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Judul Laporan</th>
                <th>Isi Laporan</th>
                <th>Tanggal Pengaduan</th>
                {{-- <th>Tanggal Kejadian</th> --}}
                <th>Lokasi Kejadian</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $k => $i)
                <tr>
                    <td>{{ $k += 1 }}.</td>
                    <td>{{ $i->user->nik }}</td>
                    <td>{{ $i->user->name }}</td>
                    <td>{{ $i->judul_laporan }}</td>
                    <td>{{ $i->isi_laporan }}</td>
                    <td>{{ Carbon\Carbon::parse($i->tgl_pengaduan)->format('d-m-Y') }}</td>
                    {{-- <td>{{ Carbon\Carbon::parse($i->tgl_kejadian)->format('d-m-Y') }}</td> --}}
                    <td>{{ $i->lokasi_kejadian }}</td>
                    <td>{{ $i->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
