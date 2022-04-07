@extends( 'master' )
@section( 'content' )



 <div  class=" custom-product" >
     
      

      <div class="col-sm-10" >
      <div class="trending-wrapper" >
      <h2> Cart List </h2>
      <a href="/ordernow" class="btn btn-success" >Order Now</a> <br> <br>
        @foreach ($products as $item)
        <div class="searched-item row cart-list-divider ">
            <!-- ........................ -->
               <div class="col-sm-3">
                 <a href="detail/{{$item->id}}">
                   <img class="trending-img" src="{{ $item->gallery }}">
                      
                </a>

               </div>

               <!-- .................. -->

               <div class="col-sm-3">
                 
                      <div class="">
                        <h2>{{$item->name}}</h2>
                        <!-- <p></p> -->
                      </div>
                

               </div>



               <!-- ................................ -->
               <div class="col-sm-3">
                
                      <a href="/removecart/{{$item->cart_id}}"> <button class="btn btn-warning" >Remove From Cart</button> </a>  

                      
                

               </div>

        </div>
        @endforeach

    </div>
      </div>
   
           

      

 </div>




@endsection