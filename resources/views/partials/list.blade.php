<style>
  .list-container{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    margin-top:3%;
}
  .card{
    width:60%;
    box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
}
  .card-body{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    border:none;
}
  .card-header{
    background-color:#7E8BFF;
    color:white;
}
  .btn{
    background-color:#7E8BFF;
    color:white;
    border:none;
}
  .btn:hover{
    background-color:#76E464;
    color:white;
}
  .card-text{
    text-align:justify;
    width:60%;
    color:grey;
}
  .card-title{
    color:grey;
    font-weight:700;
}
  .card-price{
    font-size:1.5em;
    font-weight:600;
    color:#76E464;
}
</style>


<div class='list-container'>
    @foreach($books as $book)
      <div class="card">
        <h5 class="card-header">MOST SOLD RANK #{{$book->id}}</h5>
        <div class="card-body">
          <h5 class="card-title">{{$book->name}}</h5>
          <p class="card-text">{{$book->description}}</p>
          <p class='card-price'>${{$book->price}}</p>
          <a href="#" class="btn">Buy it now!</a>
        </div>
      </div><br/>
    @endforeach
</div>
