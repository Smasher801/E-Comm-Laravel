@extends( 'master' )
@section( 'content' )



 <div  class=" custom-product" >
     
      

      <div class="col-sm-10" >
      <div class="trending-wrapper" >
      <h2> My orders </h2>
      
        @foreach ($orders as $item)
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
                        <h5> Name : {{$item->name}}</h5>
                        <h5> Delivery Status :{{$item->status}}</h5>
                        <h5> Address :{{$item->address}}</h5>
                        <h5>Payment Status :{{$item->payment_status}}</h5>
                        <h5>Payment Method :{{$item->payment_method}}</h5>
                        <!-- <p></p> -->
                      </div>
                

               </div>



               <!-- ................................ -->
               

        </div>
        @endforeach

    </div>
      </div>
   
           

      

 </div>




@endsection