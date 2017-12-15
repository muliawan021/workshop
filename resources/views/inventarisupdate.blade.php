<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris Skapandha</title>
</head>
<body>
    <h2>Update Data Barang</h2>

    <form action="{{url('inventaris/'.$inventaris->id.'/update')}}" method="post">
    {{ csrf_field() }} 
        <p>Nama Barang</p>
        <input type="text" name="nama" value="{{ $inventaris->nama }}" >
        <p>Jumlah Barang</p>
        <input type="number" name="jumlah" value="{{ $inventaris->jumlah }}" >
        <p>Jumlah Barang Berfungsi</p>
        <input type="number" name="berfungsi" value="{{ $inventaris->berfungsi }}" >
        <p>Jumlah Barang Rusak</p>
        <input type="number" name="rusak" value="{{ $inventaris->rusak }}" >
        <p>Keterangan</p><br>
        <textarea name="keterangan" cols="30" rows="10">{{ $inventaris->keterangan }}</textarea><br>
        <button type="submit">Update</button>
    </form>
 
    
</body>
</html>