<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container " >
          <a class="navbar-brand" href="#"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-between  col-12">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Skill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">My Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
              <li class="nav-item">
                <button class="btn btn-dark">Hire Me</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="content" class=" " >
            <center>
                <div id="content-body">
                <p id="hello">Hello I'm</p>
              
                <img src="{{asset('img/Group 8 (1).png')}}" alt="">
            </div>
            <h1 id="web">WEB</h1>
            <h3 id="developer">DEVELOPER</h3>
            </center>
      </div>

      {{-- about --}}
      <div id="about" class="container py-4 ">
        <h3 class="text-center mb-4"><b>About</b> Me</h3>
        <center><p class="text-center mb-4" id="about-p" style="width:320px;">My name is <b style="color:black">Hein Htet Aung</b>.I am currently studying Computer Science at University of Computer Studies Yangon.I'm a newbee web developer.<br/><br/>I love design.I love to develop.</p>
        <div id="link" class="d-flex justify-content-between" >
          <a href="https://www.facebook.com/profile.php?id=100016983571333"><i class="fab fa-facebook"></i></a>
      
          <a href="https://github.com/tankamout"><i class="fab fa-github-square"></i>  </a>
        </div>
      </center>
      </div>

      <div id="skill" class="container py-4 ">
        <h3 class="text-center mb-5"><b>My</b> Skill</h3>
       <center><div class="row my-4 justify-content-between col-lg-6 ">
          <div class="rounded-circle  p-2 border mb-3 border-dark"style="width:120px;height:120px;line-height:120px;" >
            <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
                HTML
            </div>
        </div>
        <div class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;" >
          <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
              CSS
          </div>
        </div>
        <div class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
          <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
              JS
          </div>
        </div>
        <div class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
          <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
              REACT
          </div>
        </div>
   

    
      <div class="rounded-circle  p-2 border mb-3  border-dark"style="width:120px;height:120px;line-height:120px;" >
        <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
            BOOTSTRAP
        </div>
    </div>
    <div class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
      <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
          PHP 
      </div>
    </div>
    <div class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
      <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
         Laravel
      </div>
    </div>
    <div class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
      <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
         Web Design
      </div>
    </div>
   
    </center>
      </div>
      
      <div id="projects" class="container my-4">
        <h3 class="text-center mb-5"><b>My</b> Projects</h3>
       <center><div class="row justify-content-between col-12">

          <div class="col-lg-5 col-12 col-md-6 mb-3">
            <div class="bg-info"style="height:200px"></div>
            <div class="bg-primary col-12 p-2">
              <p class="text-left" style="text-align: left;">Covid-19 app</p>
              <div class="d-flex justify-content-between px-2 py-2">
                <span>Lgafasdf jlkadsfjl dafjl;kj; asdkfj;afdsjl</span>
                <button class="btn btn-dark">View</button>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-12 col-md-6"">
            <div class="bg-info"style="height:200px"></div>
            <div class="bg-primary col-12 p-2">
              <p class="text-left" style="text-align: left;">Covid-19 app</p>
              <div class="d-flex justify-content-between px-2 py-2">
                <span>Lgafasdf jlkadsfjl dafjl;kj; asdkfj;afdsjl</span>
                <button class="btn btn-dark">View</button>
              </div>
            </div>
          </div>

        </div>
      </center> 
      </div>

      <div id="contact" class="container">
        <h3 class="text-center mb-5"><b>Contact</b> Me</h3>
      
        <form action="" id="contact_form" class="container col-lg-10 col-md-10 col-12">
          @csrf

            <div class="row justify-content-between container mb-3">
            <div class="col-lg-6 col-12 ">
              <label for="exampleInputEmail1" class="form-label d-block text-left" style="text-align: left;">Name</label>
              <input type="email" class="col-12" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="col-lg-6">
          <label for="exampleInputEmail1" class="form-label d-block text-left" style="text-align: left;">Email </label>
    <input type="email" class="col-12" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div>

        <div class="container ">
          <div class="container">
        <label for="exampleInputEmail1" class="form-label d-block text-left" style="text-align: left;">Your Message</label>
        <textarea name="" id=""  class="col-12"rows="10"></textarea>
      </div>
    </div>

    <center>
      <button class="btn btn-dark px-3 my-3">Send Message</button>
    </center>
        </form>
  
      </div>


      <div id="footer" class="pb-0 border"style="background: #494949">
        <div id="logo">
          <img src="" alt="">
        </div>
<center>
  <div id="link" class="d-flex justify-content-between mb-3" >
    <a href="https://www.facebook.com/profile.php?id=100016983571333" class="text-white"><i class="fab fa-facebook"></i></a>

    <a href="https://github.com/tankamout" class="text-white"><i class="fab fa-github-square"></i>  </a>
  </div>
        <ul class="container col-lg-4 text-white col-md-6 col-12 d-flex justify-content-between">
          <li>Home</li>
          <li>About</li>
          <li>Skill</li>
          <li>Work</li>
          <li>Contact</li>
        </ul>
</center>

      </div>

</body>
</html>