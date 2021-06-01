@extends('template')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
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
@endsection