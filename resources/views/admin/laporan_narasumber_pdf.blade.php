<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Permohonan Narasumber</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
    }
    table {
        width: 100%;
        table-layout: fixed; /* Membuat kolom tabel dengan ukuran tetap */
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        word-wrap: break-word; /* Memungkinkan teks untuk terbungkus jika terlalu panjang */
    }
    th {
        background-color: #f2f2f2;
    }
    </style>
</head>
<body>
    <h1>Data Permohonan Narasumber</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Tempat Kegiatan</th>
                <th>Jam Mulai</th>
                <th>Tanggal</th>
                <th>Jumlah Peserta</th>
                <th>Surat Permohonan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cetakLaporanNarasumbers as $cetakLaporanNarasumber)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cetakLaporanNarasumber->name }}</td>
                <td>{{ $cetakLaporanNarasumber->phone }}</td>
                <td>{{ $cetakLaporanNarasumber->event_place }}</td>
                <td>{{ $cetakLaporanNarasumber->event_start_time }}</td>
                <td>{{ $cetakLaporanNarasumber->event_date }}</td>
                <td>{{ $cetakLaporanNarasumber->participants}}</td>
                <td><a href="{{ Storage::url($cetakLaporanNarasumber->request_letter) }}" target="_blank">Lihat Berkas</a></td>
                <td>{{ $cetakLaporanNarasumber->remarks}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
