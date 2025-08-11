<!DOCTYPE html>
<html>
<head>
    <title>Form Test Laravel</title>
</head>
<body>
    <h1>Isi Form</h1>
    <form method="POST" action="/submit">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
