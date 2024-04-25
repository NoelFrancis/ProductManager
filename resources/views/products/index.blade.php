<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('sucess'))
            <div>
                {{session('sucess')}}
            </div>
        @endif
    </div>
    <div>
        <form action="{{route('product.create')}}">
            <input type="submit" value="CREATE A PRODUCT"></input>
        </form>

    </div>
    <div>

        <table border="1" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
@foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->updated_at}}</td>
        <td>
            <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
        </td>
        <TD>
            <form method="post" action="{{route('product.delete', ['product'=>$product])}}">
                @csrf
                @method('delete')
                <input type="submit" value="delete"></input>
            </form>

        </TD>
    </tr>
@endforeach
        </table>

        {{$products->links()}}
    </div>

</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #444;
        margin-top: 30px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .success-message {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
    }

    form button {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    form button:hover {
        background-color: #2980b9;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    table th {
        background-color: #f2f2f2;
        color: #333;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #f2f2f2;
    }

    table td a {
        color: #3498db;
        text-decoration: none;
    }

    table td a:hover {
        text-decoration: underline;
    }

    table td form {
        display: inline;
    }

    table td form button {
        background-color: #e74c3c;
        transition: background-color 0.3s;
    }

    table td form button:hover {
        background-color: #c0392b;
    }


</style>
</html>
