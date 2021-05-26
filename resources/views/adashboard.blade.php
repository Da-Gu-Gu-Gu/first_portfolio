<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Attendance</title>
    <link rel="icon" href="https://i.ibb.co/ZzqN21h/Group-1-1.png" type="image/png" >
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">


</head>
<body class="bg-dark">
    <div>
        <!-- CSS -->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
        
        
        
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="http://www.googletagmanager.com/gtag/js?id=UA-197476512-1&amp;l=dataLayer&amp;cx=c"></script><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&amp;display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet"> 
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        
        
        
        
        <style>
             .my-class .bar {
             z-index: 99999999999;
             height: 5px;
             background-color:black;
             /* background-image: linear-gradient(to right top, #d6b4f0, #ea99db, #fd7cb7, #ff5f86, #ff4c4c); */
        }
        </style>
        <div class="nanobar my-class" id="my-id" style="position: fixed;z-index:199999;top:0;">
          <div class="bar"></div>
        </div>
        
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous"></script>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/nanobar/0.4.2/nanobar.min.js" integrity="sha512-1Al+dnfE+1gI7IBmpUZ8XnZ3l3Nv6cyA+XgdtlaptVNxJcWWRzHxOPzT+2pbp52qtXa2jkwk0MWYSmxslMsHCQ==" crossorigin="anonymous"></script>
        <script>
        var options = {
            classname: 'my-class',
            id: 'my-id'
        };
        var nanobar = new Nanobar( options );
        nanobar.go( 30 );
        nanobar.go( 76 );
        nanobar.go(100);
         
        
        </script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-JNH66Z7VTZ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-JNH66Z7VTZ');
        </script>
        
        </div>
    <div class="container-fluid" style="width:100vw;">
        <div class="row g-0 ">
   <x-amenu/>
 
 
         <div id="content" class=" bg-dark col-10  "  >
        
           {{-- <x-anav/> --}}
        <div class="mt-4 row ml-3">
            <h4 class="text-white " >Feedbacks</h4>
            @foreach($data as $item)
                <div class="mb-3 row col-12 p-3  justify-content-between" style="background: #26292E">
                    <div class="col-1 ">
                    <div class="text-white border bg-danger text-center align-middle rounded-circle " style="height: 40px;width:40px;line-height:40px;text-transform:uppercase;">
                        {{$item["email"][0]}}
                    </div>
                </div>
                    <div class=" row  justify-content-between col-9" style="height: 40px;width:40px;line-height:40px;">
                    <p class="text-white pl-3 pl-lg-0 p-md-0">{{$item["email"]}}</p>
                          
                   
                        <p class="text-white d-none d-lg-inline d-md-inline">{{$item["date"]}}</p>
                    </div>
                    <i class="fas fa-angle-down  text-white col-1" data-toggle="collapse" href="#fb{{$item['id']}}" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size: 2rem;height: 40px;line-height:40px;float: right;">
                    
                    </i>
                    <div class="collapse col-12 mt-3 mb-2" id="fb{{$item['id']}}">
                        <div class="card card-body  text-white" style="background: #2D353F">
                                {{$item['about']}}
                        </div>
                      </div>
                </div>
            @endforeach
        </div>

         </div>
        </div>
    </div>
</body>