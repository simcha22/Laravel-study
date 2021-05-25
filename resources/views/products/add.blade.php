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
    <div class="container">
        <form method="POST" action="{{url('/addProdect')}}">
            <div class="mb-3">
                <label for="name" class="form-label">שם המוצר:</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">מחיר המוצר:</label>
                <input type="number" class="form-control" id="price" placeholder="price" name="price">
            </div>
            <div class="mb-3">
                <label for="information" class="form-label">מידע נוסף:</label>
                <textarea class="form-control" id="information" name="information"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info" id="addProduct">הוסף מוצר</button>
            </div>
        </form>
    </div>
</body>

</html>