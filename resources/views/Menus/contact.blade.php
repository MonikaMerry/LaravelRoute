<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Inconsolata:wght@300&family=Rajdhani:wght@500&family=Roboto:wght@300&family=Saira+Condensed:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/webpage.css') }}">
    <title>Landing Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 link-info" href="#">CONTACT US</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right ms-auto">
                    <li class="nav-item bg-black rounded-5 shadow-lg">
                        <a class="nav-link link-info" href="{{ url('/') }}">Back to Home</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container black">
        <h1>Contact</h1> <br>
        <h4 class="w-50 mx-auto">If we are very intrested to learn this course contact to the below number</h4><br>
        <button type="text" class="btn btn-success btn-lg"> +91 8954 345 345</button>
        <br>
    </div>

</body>

</html>
