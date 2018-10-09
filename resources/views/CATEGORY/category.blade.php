<!DOCTYPE html>
 <html>
 <style>
    table, th, td {
        border: 1px solid black;
    }
 </style>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>category barang</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
     <script src="main.js"></script>
 </head>
 <body>

     <h1> CATEGORY BARANG </h1>
     
  <table style="width:100%">
 <tr>
    <th>id</th>
    <th>Kode_Barang</th>
    <th>Nama_Barang</th>
    <th>Dibuat </th>
    <th>Diperbarui</th>
    <th>Delete</th>
 </tr>
 @foreach($data as $index => $data)
 <tr>    
        <td>{{ $data->id }}</td>
        <td>{{ $data->kode_kategori }}</td>
        <td>{{ $data->nama_kategori }}</td>
        <td>{{ $data->created_at }}</td>
        <td>{{ $data->updated_at }}</td>

     <td>
  <form action="{{route('category.destroy', $data->id)}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="DELETE" />
  <button type="submit">Delete</button>
  </form>
  <a href="{{route('category.edit', $data->id)}}">Edit</a>
     </td>
 </tr>
 @endforeach
  </table> 

        <form action="{{route('category.store')}}" method="post">
        @csrf
        KODE CATEGORY:<br>
        <input type="number" name="kode_category" >
        <br>
        NAMA BARANG:<br>
        <input type="text" name="name_category" >
        <br><br>
        <input type="submit" value="Submit">
        </form> 

 </body>
 </html>