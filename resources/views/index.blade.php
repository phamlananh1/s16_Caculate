<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" name="caculate" action="{{route('caculate')}}">
    @csrf
    <label> Caculator</label>
    <input type="number" name="number1" placeholder="number 1">
    <input type="number" name="number2" placeholder="number 2">
    <br>
    <input type="submit" value="addition" name="caculator"> </input>
    <input type="submit" value="subtraction" name="caculator"> </input>
    <input type="submit" value="multiplication" name="caculator"> </input>
    <input type="submit" value="division" name="caculator"> </input>


</form>

@if(isset($error))
    {{ $error }}
    @endif
<p>{{ isset($result) ? $result : ' ' }}</p>
</body>
</html>