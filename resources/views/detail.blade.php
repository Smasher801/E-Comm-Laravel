@extends( 'master' )
@section( 'content' )



 <div  class="container" >

      <div class="row" >
          <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
          </div>
          <div class="col-sm-6">
                    <a href="/">Go back</a>
                    <h2>Name: {{$product['name']}} </h2>
                    <h2>Price: {{$product['price']}} </h2>
                    <h3>Category: {{$product['category']}} </h3>

                    <br><br>
                    <!-- <button class="btn btn-success" >Add To Cart</button> -->
                    <form action="/add_To_Cart" method="POST" >
                        <input type="hidden" name="product_id" value="{{$product['id']}}" >
                        @csrf
                          <button class="btn btn-success" >Add To Cart</button>
                    </form>
                    <br><br>
                    <button class="btn btn-primary" >Buy Now</button>

                    <br><br>

          </div>

      </div>
      
     
 </div>

@endsection