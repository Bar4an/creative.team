<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creative Team</title>
  <link rel="icon"  href="./image/IMG_1464.PNG" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style> 

  .card {
    background-color: transparent;
    border: none;
    border-radius:15px;
    font-family:sans-serif;
    width: 70rem;
    height: 32rem;
    text-align: center;
    transform:
    rotateX(1deg)
    rotateZ(0deg);
  transform-style: preserve-3d;
  border-radius: 32px;

  }

  .imgg{
    width:500px;
    height:500px;

  }
  .card-body{
    margin-top:-80px;
    
  }
  .header{
    margin-top:-120px; 
    font-size:55px;
    font-weight:700;
  }
  .time{
    font-size:50px;font-weight:700;
  }

  
  @media (min-width:1000px ) and (max-width:1028px) {
    .card {
    width: 70rem;
    height: 32rem;


  }}
  @media (max-width:700px) {
    .card {
    width: 70rem;
    height: 36rem;

  }
    .imgg{
        width: 320px;
        height: 320px;
        margin-top: 20px;
    }
    .header{
    margin-top:-30px; 
    font-size:50px;
    font-weight:700;
  }
  .time{
    font-size:40px;font-weight:700;
  }
  }
  @media (width:320px) {
    .card {
    width: 70rem;
    height: 26rem;


  }
    .imgg{
        width: 270px;
        height: 270px;
        margin-top: 20px;
    }
    .header{
    margin-top:-30px; 
    font-size:50px;
    font-weight:700;
  }
  .time{
    font-size:35px;font-weight:700;
  }
  }   body{ margin:0; font:normal 75% Arial, Helvetica, sans-serif;background-color: #040c0c; } 
    canvas{ display: block; vertical-align: bottom; }
     /* ---- particles.js container ---- */ 
     #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #040c0c; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } 
     /* ---- stats.js ---- */ 
     .count-particles{  position: absolute; top: 48px; left: 0; width: 80px; color: #13E8E9; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; }
      .js-count-particles{ display: none; }
       #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } 
       #stats{ border-radius: 3px 3px 0 0; overflow: hidden; }
        .count-particles{ border-radius: 0 0 3px 3px; }

  </style>
<body>

<div id="particles-js"></div>
<div class="count-particles">
  
   <span class="js-count-particles"></span></div> <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class=" card " >
        <div class="card-body text-center ">
   <img class="imgg" src="./image/creative.png" alt="">
          <h1 class="card-subtitle  mb-2 text-white header">Coming Soon...</h1>
          <br>
  
          <!-- <input type="hidden"  id="getTime" value="05:02"> -->
          <script>
var end = new Date('10/07/2023 12:1 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + 'days ';
        document.getElementById('countdown').innerHTML += hours + 'hrs ';
        document.getElementById('countdown').innerHTML += minutes + 'mins ';
        document.getElementById('countdown').innerHTML += seconds + 'secs';
    }

    timer = setInterval(showRemaining, 1000);
</script>
<div id="countdown" class="card-text text-white time" ></div>
        </div>
      </div>
</div><!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
  <script>particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#00D8CE"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":4,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;</script>
</body>
</html>