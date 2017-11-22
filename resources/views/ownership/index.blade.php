<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

@foreach($ownerships as $ownership)
    <td>{{$ownership->description}}</td>

@endforeach
</body>
</html>