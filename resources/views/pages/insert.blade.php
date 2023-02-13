
<title>Quack Bookstore | Insert a book!</title>
<style>
    .form-box{
 
    }
</style>
@extends("layouts.master")

@section("title")
<h3>Insert a new book with the form below:</h3><br/>
@endsection
@section('content')
<div class='form-box'>
<form class='form' method='post' action='{{route('insert-values')}}'>
    @csrf
    <label for='name'>Name:</label><br/>
    <input type='text' class='form-control' name='name' id='name'><br/>
    <div class='group'>
        <label for='description'>Description:</label><br/>
        <textarea class='form-control' name='description' id='description'></textarea>
    </div><br/>
    <label for='coast'>Cost:</label><br/>
    <input type='text' class='form-control' name='coast' id='coast'><br/>
    <label for='price'>Price:</label><br/>
    <input type='text' class='form-control' name='price' id='price'><br/>
    <label for='storage'>Storage:</label><br/>
    <input type='number' class='form-control' name='storage' id='storage'><br/>
    <button type='submit' class='form-control' value='insert'>Insert!</button><br/>
</form>
</div>
@endsection

