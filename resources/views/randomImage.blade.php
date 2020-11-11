<!doctype html>
<html>

<head>
    ¡Hello there! This is a website made for fun
</head>

<body>
    <div>
        The phrase for you today is...
        <br>
        <img src="{{ $data['storage']->url($data['imageName']) }}"> </img>
    </div>
    <br>
    Powered by: {{ $data['ip'] }}
</body>

<html>