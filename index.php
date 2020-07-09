<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap site</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">
  <script src="./js/all.js"></script>
  <link rel="stylesheet" href="./js/">
  <link rel="stylesheet" href="main.css">
</head>

<body>

<div class="container-default">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand text-light m-auto " href="#"><strong style="font-size: 140%;"> Youtube video
        converter</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mr-5" id="navbarNav">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>


      </ul>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 mt-5">
        <div class="heading text-center">
          <h2 class="text-danger"><strong>Place Youtube Video<span class="text-primary"> Link</span> Here</strong></h2>
          <div class="col-md-12">
            <i class=" text-danger fa fa-arrow-down fa-2x" aria-hidden="true"></i>
          </div>
        </div>

      </div>
    </div>
  </div>


  <section class="input-button-container">
    <div class="jumbotron ">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="input-group ">
            <input type="text" id="youtubeVideoUrl" class="form-control" placeholder="Place video link here" style="padding: 25px;">
            <div class="input-group-append">
              <button class="btn btn-success ml-2" type="submit" onclick="showButtons();">Convert</button>
            </div>

          </div>

          <div class="btn-group m-2">
		  <iframe id="mp3Button" style="width:100%;min-width:200px;max-width:350px;height:57px;border:0;overflow:hidden; margin:10px;display:none;" scrolling="no" src="https://break.tv/widget/button/?link=https://www.youtube.com/watch?v=i62Zjga8JOM&color=DA4453&text=fff"></iframe>
		  
		  <!-- <button class="btn btn-danger ">mp3</button>
            <button class="btn btn-danger ">mp4</button>
          -->
		  
		  </div>

        </div>

      </div>
    </div>
  </section>

  <section class="main-text-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-danger">Youtube to mp3 converter</h1>
          <p class="text-left">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque dolor eius veritatis fugit perspiciatis?
            Eligendi iste fugiat nobis aliquam dicta sit minima blanditiis repellat quas quis ex quidem, voluptatum
            corrupti?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur atque quos quo ipsam? Mollitia ea
            quibusdam sed beatae repudiandae assumenda perferendis, atque voluptates, doloribus cumque ab nam inventore
            culpa quae!
          </p>
          <br>
          <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sit consectetur, fuga ipsum
            quae maiores quo. Accusamus id delectus, assumenda debitis magnam laudantium labore, voluptatem quos, totam
            repellendus esse aut!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quis pariatur reprehenderit totam iusto
            necessitatibus vitae hic ducimus saepe labore, laudantium, magnam, id aliquam cumque eos ullam sequi quam.
            Praesentium?
          </p>

        </div>
      </div>
    </div>

  </section>



  <section class="footer  mb-1 " style="background-color: black;">

    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <footer-nav class="nav justify-content-center footer-links-style m-3">
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link" href="#">Copyright Claims<a>
                <a class="nav-link" href="#">Privacy Policy</a>
                <a class="nav-link" href="#">Terms of use</a>
          </footer-nav>

          <div id="copyright" class="text-center mb-1 footer-links-style">© 2020 Copyright:
            <a class="footer-links-style" href="#">VideoConverter.com </a>
          </div>



        </div>
      </div>
    </div>
  </section>
</div>
  <!--Jquery-->
  <script src="./js/jquery-3.5.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>


  <!--Bootstrap-->
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>





<script>

function showButtons(){

var videoUrl = document.getElementById("youtubeVideoUrl").value;

if(videoUrl == ""){
alert("Please Enter Video Url");
}
else{

document.getElementById("mp3Button").style.display = "block";

videoId = subStrAfterChars(videoUrl, '=','b');


console.log(videoId);

var newSrc = "https://break.tv/widget/button/?link=https://www.youtube.com/watch?v="+videoId+"&color=DA4453&text=fff";


document.getElementById("mp3Button").src = newSrc;

}




}

function subStrAfterChars(str, char, pos)
{
  if(pos=='b')
   return str.substring(str.indexOf(char) + 1);
  else if(pos=='a') 
   return str.substring(0, str.indexOf(char));
  else
  return str;  
}

</script>


</html>