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

    <h1>Create a product</h1>
    <div>

    @if($errors->any())
        <ul>

        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif

    </div>
    <form method="post" action="{{route('product.store')}}">

        @csrf
        @method('post')
        <div><label for="">Name</label>
            <input type="Text" name="name" placeholder="name"></input>
            </div>
        <div><label for="">Price</label>
            <input type="Text" name="price" placeholder="price"></input>
            </div>
        <div><label for="">Description</label>
            <input type="Text" name="description" placeholder="Describe the product" ></input>
            </div>
        <div>
            <input type="submit" value="Save">
        </div>

    </form>

</body>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    form {
        margin-top: 20px;
    }

    form div {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: calc(100% - 20px);
        padding: 15px;
        border: none;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #f7f7f7;
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="text"]:focus {
        outline: none;
    }

    input[type="submit"] {
        width: 100%;
        padding: 15px;
        background-color: #4caf50;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: #ff0000;
        margin-top: 5px;
        font-size: 14px;
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
