<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">הוסף מוצר</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">מוצרים</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">מוצר יחיד</a>
            </li>
        </ul>
    </header>
    @yield('content')

    <footer >
        <div class="container text-center p-5">
        כל הזכויות שמורות @

        </div>
    </footer>
</body>

</html>