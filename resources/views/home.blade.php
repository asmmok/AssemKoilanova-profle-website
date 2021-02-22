<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  body {
  text-align: center;
  color: white;
  align-content: center;
  background-image: url(https://padletuploads.blob.core.windows.net/prod/195809177/bcc91c2f23d96d694ddff44381e14494/Leaf_Background.jpg);
      background-repeat: no-repeat;
      background-size: cover;
  background-color: rgb(221, 152, 152);
  animation: mymove 5s infinite;
}
.header{
  display: flex;
  justify-content: space-around;
   background-color: black;

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
  color: rgb(175, 108, 108);
}
#main{

    margin-top: 200px;
    margin-bottom: 200px;
    font-family: 'Frank Ruhl Libre', serif;
}
#main h1{
    font-size: 140px;
    margin-bottom: 0%;
}
#main h2{
  background-color: white;
  font-size: 30px;
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

        <div><a href="index.html">Home</a></div>
        <div><a href="{{route('aboutMe')}}"> About me</a></div>

        <div><a href="{{route('contactMe')}}" >Contact me</a></div>

      </div>
      <div id="main">
      <h1>Hello</h1>
      <h2>I'm Assem. Web-developer</h2>

      <div id="myDIV"></div>
      </div>


</body>
</html>
