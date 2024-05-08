<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>

    <div class="container  text-center  mt-5">
        <h1>Hello Laravel</h1>
        <h4 class="mt-4">ciao {{$name}} {{$lastname}} </h4>

        <div class="mt-5">
            <a href="{{$link_about}}"> Click here for view about page </a>
        </div>
    </div>

</body>
</html>
