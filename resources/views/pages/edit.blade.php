<title>Quack Bookstore | Edit a book</title>

@extends("layouts.master")

@section('title')
Edit {{$book->name}}
@endsection

@section('content')
<div class='form-box'>
    <form class='form' method='post' action='{{route("update", ['id'=>$book->id])}}'>
        @csrf
        @method('PUT')
        <label for='name'>Name:</label><br/>
        <input type='text' class='form-control' name='name' id='name' value='{{$book->name}}'><br/>
        <label for='description'>Description:</label><br/>
        <textarea class='form-control' name='description' id='description'>{{$book->description}}</textarea><br/>
        <label for='coast'>Cost:</label><br/>
        <input type='text' class='form-control' name='coast' id='coast' value='{{$book->coast}}'><br/>
        <label for='price'>Price:</label><br/>
        <input type='text' class='form-control' name='price' id='price' value='{{$book->price}}'><br/>
        <label for='storage'>Storage:</label><br/>
        <input type='number' class='form-control' name='storage' id='storage' value='{{$book->storage}}'><br/>
        <button type='submit' id='update-btn'class='form-control' value='update'>Update!</button><br/>
    </form>
    </div>
@endsection