<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hein Htet Aung</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <x-links/>
</head>
<body>
  <div class="nanobar my-class" id="my-id" style="position: fixed;"><div class="bar"></div></div>
    
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
                <a class="nav-link" href="#about">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skill">My Skill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#projects" tabindex="-1" aria-disabled="true">My Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#contact" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#contact">
                <button class="btn btn-dark">Hire Me</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="content" class=" " >
            <center>
                <div id="content-body">
                <p id="hello">Hello I'm</p>
              
                <img src="{{asset('img/Group 8 (1).png')}}" data-aos="fade-down"   data-aos-duration="2000" alt="">
            </div>
            <h1 id="web">WEB</h1>
            <h3 id="developer">DEVELOPER</h3>
            </center>
      </div>

      {{-- about --}}
      <div id="about" class="container py-4 ">
        <h3 class="text-center mb-5" data-aos="fade-down"><b>About</b> Me</h3>
        <center><p class="text-center mb-4" id="about-p" style="width:320px;">My name is Hein Htet Aung.I am currently studying Computer Science at University of Computer Studies Yangon.I'm a newbie web developer.<br/><br/>I love design.I love to develop.</p>
        <div id="link" class="d-flex justify-content-between" >
          <a href="https://www.facebook.com/profile.php?id=100016983571333"><i class="fab fa-facebook"></i></a>
      
          <a href="https://github.com/tankamout"><i class="fab fa-github-square"></i>  </a>
        </div>
      </center>
      </div>

      <div id="skill" class="container py-4 ">
        <h3 class="text-center mb-5" data-aos="fade-down"><b>My</b> Skill</h3>
       <center><div class="row my-5 justify-content-between col-lg-6 ">
          <div data-aos="zoom-in"  data-aos-duration="1000" class="rounded-circle  p-2 border mb-3 border-dark"style="width:120px;height:120px;line-height:120px;" >
            <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
                HTML
            </div>
        </div>
        <div  data-aos="zoom-in"  data-aos-duration="1500" class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;" >
          <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
              CSS
          </div>
        </div>
        <div  data-aos="zoom-in"  data-aos-duration="2000" class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
          <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
              JS
          </div>
        </div>
        <div  data-aos="zoom-in"  data-aos-duration="2500" class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
          <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
              REACT
          </div>
        </div>
   

    
      <div  data-aos="zoom-in"  data-aos-duration="1000" class="rounded-circle  p-2 border mb-3  border-dark"style="width:120px;height:120px;line-height:120px;" >
        <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
            BOOTSTRAP
        </div>
    </div>
    <div  data-aos="zoom-in"  data-aos-duration="1500" class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
      <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
          PHP 
      </div>
    </div>
    <div  data-aos="zoom-in"  data-aos-duration="2000" class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
      <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
         Laravel
      </div>
    </div>
    <div  data-aos="zoom-in"  data-aos-duration="2500" class="rounded-circle  p-2 border mb-3  border-dark" style="width:120px;height:120px;line-height:120px;">
      <div id="1"  class="rounded-circle border bg-dark text-white text-center align-middle" style="width:100px;height:100px;line-height:100px;">
         Web Design
      </div>
    </div>
   
    </center>
      </div>
      
      <div id="projects" class="container py-4 ">
        <h3 class="text-center mb-5" data-aos="fade-down"><b>My</b> Projects</h3>
       <center><div class="row justify-content-between col-12 mb-4">

          <div data-aos="flip-up"  data-aos-duration="1000" class="col-lg-5 col-12 col-md-6 mb-4">
            <div class="bg-info"style="height:200px">
            <img src="{{asset('img/Group 11.png')}}" id="imgs" alt="" width="100%" height="100%"></div>
            <div class=" col-12 p-2" style="background: #F2F2F2;">
              <p class="text-left" style="text-align: left;">Laravel</p>
              <div class="d-flex justify-content-between px-2 py-2">
                <span>Smart Attendance</span>
                  <a href="http://attendance-smart.herokuapp.com/"><button class="btn btn-outline-dark">View</button></a>
              </div>
            </div>
          </div>

          <div data-aos="flip-up"  data-aos-duration="1500" class="col-lg-5 col-12 col-md-6 mb-4">
            <div class="bg-info"style="height:200px">
              <img src="{{asset('img/Group 13.png')}}" id="imgs" alt="" width="100%" height="100%"</div>
            <div class=" col-12 p-2" style="background: #F2F2F2;">
              <p class="text-left" style="text-align: left;">React</p>
              <div class="d-flex justify-content-between px-2 py-2">
                <span>Covid-19 Report App</span>
                <a href="https://tankamout.000webhostapp.com/"><button class="btn btn-outline-dark">View</button></a>
              </div>
            </div>
          </div>

        </div>
      </center> 
      </div>

      <div id="contact" class="container mt-lg-0 mt-md-0 mt-5 py-4">
        <h3 class="text-center mb-2 " data-aos="fade-down"><b>Contact</b> Me</h3>
        
        <div id="noti" class="bg-dark text-white mb-3" >Thanks</div>
     
        <form action="" id="contact_form" class="container col-lg-10 col-md-10 col-12">
          @csrf

            <div class="row justify-content-between container mb-3">
            <div class="col-lg-6 col-12 ">
              <label for="name" class="form-label d-block text-left" style="text-align: left;">Name</label>
              <input type="text" class="col-12" id="name"  required >
        </div>

        <div class="col-lg-6">
          <label for="email" class="form-label d-block text-left" style="text-align: left;">Email </label>
    <input type="email" class="col-12" id="email" aria-describedby="emailHelp"  required>
        </div>
        </div>

        <div class="container ">
          <div class="container">
        <label for="exampleInputEmail1" class="form-label d-block text-left" style="text-align: left;">Your Message</label>
        <textarea name="" id="msg"  class="col-12"rows="10" required ></textarea>
      </div>
    </div>

    <center>
      <button class="btn btn-dark px-3 my-3">
      Send Message</button>
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
          <a href="#" class="text-white"><li class="">Home</li></a>
          <a href="#about" class="text-white"><li>About</li></a>
          <a href="#skill"class="text-white"><li>Skill</li></a>
          <a href="#projects" class="text-white"><li>Work</li></a>
          <a href="#contact" class="text-white"><li>Contact</li></a>
        </ul>
</center>

      </div>
      <script>
        AOS.init();

var options = {
	classname: 'my-class',
    id: 'my-id'
};
var nanobar = new Nanobar( options );
nanobar.go( 30 );
nanobar.go( 76 );
nanobar.go(100);
 
 var form=document.forms["contact_form"];
 form.onsubmit=function(e){
   e.preventDefault();
   var name=document.getElementById("name");
   var email=document.getElementById("email");
   var msg=document.getElementById("msg");
   
axios.post('/api/contact/',{
  "name":name.value,
  "email":email.value,
  "msg":msg.value,
}).then(res=>{
  // console.log(res)
  if(res.data=="good"){
    document.getElementById("noti").style.width="100px";
  }
}).catch(res=>{
  console.log(res)
});
 }

      </script>
</body>
</html>