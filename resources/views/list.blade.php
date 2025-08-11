<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengisi Form</title>
</head>
<body>
    <h1>Daftar Pengisi Form</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Waktu</th>
        </tr>
        @foreach ($data as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/">Kembali ke Form</a>
</body>
</html>
