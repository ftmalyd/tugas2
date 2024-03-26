

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        /* Menentukan warna garis untuk seluruh sel di dalam tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        /* Menentukan warna garis untuk header kolom */
        th {
            border: 1px solid pink;
            padding: 8px;
            text-align: left;
        }

        /* Menentukan warna garis untuk seluruh sel di dalam tabel */
        td {
            border: 1px solid pink;
            padding: 8px;
            text-align: left;
        }

        /* Menentukan warna latar belakang untuk baris ganjil */
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa:</h2>
<form method="POST" action="/mahasiswa">
    @csrf
    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim"><br><br>
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br><br>
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat"><br><br>
    <label for="hobi">Hobi:</label>
    <input type="text" id="hobi" name="hobi"><br><br>
    <button type="submit">Submit</button>
</form>

<br><br>

<table>
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->hobi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
