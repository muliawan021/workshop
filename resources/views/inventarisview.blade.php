<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTartikel
artikelF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris</title>
</head>
<body>
<form action="{{url('inventaris/create')}}" method="get">
    <button type="submit">Tambah Data Baru</button>
</form>
    <table border="1" >

        <tr >
            <td>ID Barang</td>
            <td>Nama Barang</td>
            <td>Jumlah Barang</td>
            <td>Jumlah Barang Berfungsi</td>
            <td>Jumlah Barang Rusak</td>
            <td>Keterangan</td>
            <td colspan="2" >Action</td>
        </tr>
        @foreach($inventaris as $arr)
        <tr>
            <td>{{ $arr->id }}</td>
            <td  >{{ $arr->nama }}</td>
            <td>{{ $arr->jumlah }}</td>
            <td>{{ $arr->berfungsi }}</td>
            <td>{{ $arr->rusak }}</td>
            <td>{{ $arr->keterangan }}</td>
            <td><a href="{{url('inventaris/'.$arr->id.'/edit')}}">Edit</a> </td>
            <td><a href="{{url('inventaris/'.$arr->id.'/delete')}}">Delete </a> </td>
        </tr>
        @endforeach
    </table>
</body>
</html>