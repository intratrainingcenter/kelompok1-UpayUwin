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

     <h1>EDIT CATEGORY BARANG </h1>

     <form method="post" action="{{action('categoryController@update', $id)}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PATCH" />
              	{{ csrf_field() }}
    KODE CATEGORY:<br>
    <input type="number" name="kode_category" value="{{ $data->kode_kategori }}">
    <br>
    NAMA BARANG:<br>
    <input type="text" name="name_category" value="{{ $data->nama_kategori }}">
    <br><br>
    <input type="submit" value="Submit">
    </form> 

 

 </body>
 </html>