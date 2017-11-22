<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

@foreach($ownerships as $ownership)
    <td>{{$ownership->owner->userInfo->personInfo->name}}</td>
    <hr>

@endforeach
</body>
</html>