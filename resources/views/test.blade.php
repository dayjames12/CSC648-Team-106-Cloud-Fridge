<!-- using for testing database -->
<!DOCTYPE html>

<html>
<head>

</head>
    <title>Test View</title>

<body>
    <h1>Fridges from database</h1>
    
    @foreach($fridges as $fridges)
        <li>{{$fridges->name}}</li>
    @endforeach

</body>
</html>
