<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    .background-radial-gradient {
        background-color: hsl(260, 41%, 15%);
        background-image: radial-gradient(1300px circle at 0% 0%,
                hsl(260, 41%, 35%) 15%,
                hsl(260, 41%, 30%) 35%,
                hsl(260, 41%, 20%) 75%,
                hsl(260, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(2500px circle at 100% 100%,
                hsl(260, 41%, 45%) 15%,
                hsl(260, 41%, 30%) 35%,
                hsl(260, 41%, 20%) 75%,
                hsl(260, 41%, 19%) 80%,
                transparent 100%);
    }
    </style>
</head>

<body class="background-radial-gradient overflow-hidden">
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>