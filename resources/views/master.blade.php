<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_Commerce Project</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    .custom-login{
        height : 500px;
        padding-top: 100px;
    }
    
    img.slider-img{
        
        height : 400px !important;


    }

    .slider-text{
        color: black !important;
    }

    .trending-img{
         height : 100px;
    }
    .trending-item{
         float:left;
         width : 20%;
    }
    .trending-wrapper{
          margin:20px;
    }

    .detail-img{
          height : 200px;

    }
    .search-box{
        width:500px !important;
    }

    .cart-list-divider{
        border-bottom : 1px solid #ccc;
        margin-bottom : 20px;
        padding-bottom : 20px;
    }


</style>

</html>