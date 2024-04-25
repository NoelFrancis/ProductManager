<!DOCTYPE PHP>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-COMPATIBLE" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <h1>EDIT</h1>
    <div>

    @if($errors->any())
        <ul>

        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    </div>
    <form method="POST" action="{{route('product.update', ['product'=>$product])}}">

        @csrf
        @method('PUT')
        <div><label for="">Name</label>
            <input type="Text" name="name" placeholder="name" value="{{$product->name}}"></input>
            </div>
        <div><label for="">Price</label>
            <input type="Text" name="price" placeholder="price" value="{{$product->price}}"></input>
            </div>
        <div><label for="">Description</label>
            <input type="Text" name="description" placeholder="Describe the product" value="{{$product->description}}"></input>
            </div>
        <div>
            <input type="submit" value="Update">
        </div>

    </form>

</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        padding-top: 50px;
    }

    .container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 500px;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form {
        margin-top: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: #ff0000;
        margin-top: 5px;
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    ul li {
        color: #ff0000;
    }
</style>
</html>
