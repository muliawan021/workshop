<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris Skapandha</title>
</head>
<body>
    <h2>Input Data Barang Baru</h2>

    <form action="{{url('inventaris/create')}}" method="post">
    {{ csrf_field() }} 
        <p>Nama Barang</p>
        <input type="text" name="nama" >
        <p>Jumlah Barang</p>
        <input type="number" name="jumlah" >
        <p>Jumlah Barang Berfungsi</p>
        <input type="number" name="berfungsi" >
        <p>Jumlah Barang Rusak</p>
        <input type="number" name="rusak" >
        <p>Keterangan</p><br>
        <textarea name="keterangan" cols="30" rows="10"></textarea><br>
        <button type="submit">Upload Data</button>
    </form>
 
    
</body>
</html>