<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  body {
  text-align: center;
  color: white;
  align-content: center;

  background-color: rgb(221, 152, 152);
  animation: mymove 5s infinite;
}
.header{
  display: flex;
  justify-content: space-around;
  margin-left: 70px;

  font-size: 20px;
  margin-bottom: 0px;
  height: 50px;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
}
.header a{
  color: white;
  text-decoration: none;
}
.header a:hover {
  color: rgb(73, 46, 46);
}
#main{
    margin-top: 200px;
    margin-bottom: 200px;
    font-family: 'Frank Ruhl Libre', serif;
}
#main h1{
    font-size: 100px;
    margin-bottom: 0%;
}
#main p{
  font-size: 20px;
}

@keyframes mymove {



  75% {background-color: rgb(127, 211, 186);}
      40% {background-color: #ccbbcb;}
}
.marquee {
  position: relative;
  overflow: hidden;
  --offset: 20vw;
  --move-initial: calc(-50% + var(--offset));
  --move-final: calc(-50% + var(--offset));
}

.marquee__inner {
  width: fit-content;
  display: flex;
  position: relative;
  transform: translate3d(var(--move-initial), 0, 0);
  animation: marquee 5s linear infinite;
  animation-play-state: paused;
}


.marquee span {
  font-size: 10vw;
  padding: 0 2vw;
}

.marquee:hover .marquee__inner  {
  animation-play-state: running;
}

@keyframes marquee {
  0% {
      transform: translate3d(var(--move-initial), 0, 0);
  }

  100% {
      transform: translate3d(var(--move-final), 0, 0);
  }

}

#aboutMe img{
  width: 500px;
  height: 500px;

}
.container {
  width: 100%;
margin-bottom: 500px;

}

#contactUs{
  margin-top: 100px;

}
#r{
  background-image: url(https://padletuploads.blob.core.windows.net/prod/195809177/bcc91c2f23d96d694ddff44381e14494/Leaf_Background.jpg);
  background-size: cover;
  background-repeat: no-repeat;


}
  </style>
    <meta chatset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="script.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">

        <div><a href="{{route('home')}}">Home</a></div>
        <div><a href="{{route('aboutMe')}}"> About me</a></div>

        <div><a href="{{route('contactMe')}}" >Contact me</a></div>

      </div>

      <div id="aboutMe">

          
          <img src="https://sun9-43.userapi.com/impf/C3VKtPCXokFK8VEB9OxKAtCLWQF3EGttkjaTLg/DCJHOrNdEbM.jpg?size=1050x1080&quality=96&sign=4361e85c42c7bd67f35aa2d75bc3d7cd" alt="">

          <p style="font-size: 20px; margin: 0 400px 100px 400px;">I'm Assem Koilanova. I'm 18. I am an engineering student at <a href="http://sdu.edu.kz/">Suleyman Demirel University.</a> with a degree in Information Systems.</p>
      </div>

       <div id="gallery">
       <div class="marquee">
        <div class="marquee__inner" aria-hidden="true">
            <span>Gallery</span>
            <span>Gallery</span>
            <span>Gallery</span>
            <span>Gallery</span>
        </div>
    </div>
    <div class="container" style="margin-top: 100px; width: 1000px; height: 300px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="https://sun9-36.userapi.com/impf/5jXOWwZxHRdXFqbdh_O6BShWyFlQQO_Gdd147w/3kVy2cM_wZM.jpg?size=1280x960&quality=96&proxy=1&sign=cb0716e1e783b09f53cac12302c7c4d5" alt="" style="width:100%x; ">
              <div class="carousel-caption">


              </div>
            </div>

            <div class="item">

              <img src="https://sun9-20.userapi.com/impf/RYrs_qDgt01awZHx5IZQQ7aznGnxHlpTq7RRlA/VvvHkWfZ8XA.jpg?size=1280x960&quality=96&proxy=1&sign=73ca633ba1073398291fe1f800336538" alt="" width="100%">
              <div class="carousel-caption">

              </div>
            </div>

            <div class="item">
              <img src="https://sun9-67.userapi.com/impf/eb0zJVdQGvp2FtRNA7juwWkI_MbfCauiH9sRRA/ldu1oer0bSQ.jpg?size=1280x960&quality=96&proxy=1&sign=f2d04f14a62035d7f29672a14d10b4d3" alt="" style="width:100%;">
              <div class="carousel-caption">

              </div>
            </div>

            <div class="item">
              <img src="https://sun9-26.userapi.com/impf/rui03IRnOPODQPhk_kYNtwfIxwya6zIrlzBmGQ/Kb4F7fjlUcQ.jpg?size=894x668&quality=96&proxy=1&sign=1792bacd8f008c0d318682bc37512cd9" alt="" style="width:100%;">
              <div class="carousel-caption">

              </div>
            </div>

            <div class="item">
              <img src="https://sun9-17.userapi.com/impf/aary4dhj697jac6FWefYrMag3bx39oP0QWjPFw/T-Be2nDMbz4.jpg?size=1280x960&quality=96&proxy=1&sign=ee1dfee5c81ec8b4fe3f24749bc1b6d6" alt="" style="width:100%;">
              <div class="carousel-caption">

              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

</body>
</html>
