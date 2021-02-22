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


  <div id="contactMe" >
    <div class="marquee">
        <div class="marquee__inner" aria-hidden="true">
            <span>ContactMe</span>
            <span>ContactMe</span>
            <span>ContactMe</span>
            <span>ContactMe</span>
        </div>
        <div id="r">
            <h1 style="font-size:50px">Contacts:</h1>
            <p style="font-size:20px">Mobile numbers: +7(7292)777 7777, +7(7292)700 0000</p>
      <p style="font-size:20px">Email: assem.koilanova@stu.sdu.edu.kz</p>
      <p style="font-size:20px">Adress: KZ, Mangystau, Aktau</p>
          <footer class="hh">
            <a href="https://www.facebook.com/mangystaukz/"><img src="https://www.clipartmax.com/png/full/107-1071822_facebook-logo-red-transparent.png"  style="width: 50px; margin-top: 200px; margin-right: 10px;" alt="" ></a>
            <a href="https://www.instagram.com/asmmok"><img src="https://citronium.com/wp-content/uploads/2019/02/im.svg" style="width: 50px; margin-top: 200px; margin-right: 10px;" alt=""></a>
            <a href="https://www.youtube.com/user/kazakhstanaktau"><img src="http://cdn.onlinewebfonts.com/svg/img_24892.png" style="width: 50px; margin-top: 200px;margin-right: 10px;" alt=""></a>
            <a href="https://www.pinterest.ru/maxsvet/mangystau-region/"><img src="http://cdn.onlinewebfonts.com/svg/img_106006.png" style="width: 50px;margin-top: 200px;margin-right: 10px;" alt=""></a>
            <a href="https://twitter.com/mangystautv"><img src="https://sguru.org/wp-content/uploads/2018/02/5a2fe479cc45e43754640849.png" style="width: 50px;margin-top: 200px;margin-right: 10px;" alt=""></a>
        </footer>
        </div>
  </div>
</body>
</html>
