<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <title>Corona Updates</title>
    <style>

      *{
        scroll-behavior: smooth;
      }
    
    
      .main h1{
        display: block;
        color: black;
        font-size: 1.7rem;
        text-align: center;
        margin: 50px 10px;
        font-family: 'Chelsea Market', cursive;

      }

      .case_head{
        text-align: center;
        font-size: 1.7rem;
        color: rgb(231, 75, 13);
        font-family: 'Merriweather', serif;
        margin-top: 60px;
        margin-bottom: 50px;
        
      }

      .precautions_head{
        text-align: center;
        font-size: 1.7rem;
        color: rgb(231, 75, 13);
        font-family: 'Merriweather', serif;
        margin-top:40px;
        margin-bottom: 10px;

      }

      .symptoms_head{
        text-align: center;
        font-size: 1.7rem;
        color: rgb(231, 75, 13);
        font-family: 'Merriweather', serif;
        margin-bottom: 50px;
        margin-top:20px;

      }

      .about_head{
        text-align: center;
        font-size: 1.7rem;
        color: rgb(231, 75, 13);
        font-family: 'Merriweather', serif;
        margin-bottom: 50px;
        margin-top:20px;

      }

      .case_world{
        text-align: center;
        font-size: 1.7rem;
        color: rgb(231, 75, 13);
        font-family: 'Merriweather', serif;
        margin-top: 60px;
        margin-bottom: 50px;
      }

      .border{
        color: rgb(255, 255, 255);
        background-color: rgb(255, 174, 0);
        border-radius: p;
        border-top: hidden;
        margin: 10px;
        box-shadow: 5px 7px grey;
      }

      .border p{
        margin: 3px 50px; 
      }

      .footer h1{
        font-size: 1.5rem;
        
      }

      .footer p{
        font-size: 1 rem;
       

      }

      .log0{
        margin: 2px 60px;
      }

      .contact a{
        padding: 20px;
      }

      .font{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        padding: 8px 4px;
        font-size: 1.5rem;
        }

      .foot_head{
        padding-top: 20p4;
      }

      .footer{
        margin: 0px;
        padding-top: 20px;
      }

      .footer p,h1,h3{
        color: white;
      }

      .data{
        color: black;
        font-size: 2rem;
        font-family: Arial, Helvetica, sans-serif;
      }




    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar nav_bg navbar-expand-lg navbar-dark bg-warning">
      <a class="navbar-brand" href="#">COVID-19 UPDATES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#cases_india">CASES(india)<span class="sr-only"></span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#cases_world">CASES(world)<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#precautions">Precautions <span class="sr-only"></span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#symptoms">Symptons <span class="sr-only"></span></a>
            </li>
          </ul>
        </div>
      </nav>
      
      <!-- main header    -->
      <div class="main">
        <h1 >STAY HOME STAY SAFE</h1>
      </div>
      

       <!-- *************cases in india******************** -->
      <div id="cases_india">
        <h1 class="case_head" >TOTAL CASES IN INDIA</h1>
      </div>

      <!-- PHP -->
      <?php

      $data = file_get_contents('https://api.covid19india.org/data.json');
      $corona = json_decode($data, true);

      $count  = count($corona['statewise']);

      ?>

      <div class="india"> 
      <tr>
        <div class="border text-center"> <td><p class="font ">UPDATED ON</p><p class="data"><?php echo $corona['statewise'][0]['lastupdatedtime']."<br>"?></p></td></div>
        <div class="border text-center"> <td><p class="font ">ACTIVE CASES</p><p class="data"><?php echo $corona['statewise'][0]['active'] . "<br>"?></p></td></div>      
         <div class="border text-center"> <td><p class="font ">CONFIRMED CASES</p><p class="data"><?php echo $corona['statewise'][0]['confirmed'] . "<br>"?></p></td></div> 
         <div class="border text-center"> <td><p class="font ">RECOVERED </p><p class="data"><?php echo $corona['statewise'][0]['recovered'] . "<br>"?></p></td></div>
         <div class="border text-center"> <td><p class="font ">TOTAL DEATHS </p><p class="data"><?php echo $corona['statewise'][0]['deaths'] . "<br>"?></p></td></div>
      </tr>
      </div>

          <!-- *****************cases in world******************* -->



      <div id="cases_world">
        <h1 class="case_world" >TOTAL CASES(WORLD)</h1>
      </div>

       <!-- PHP -->
      <?php

      $data = file_get_contents('https://api.covid19api.com/summary');
      $corona = json_decode($data, true);

      $count  = count($corona['Global']);

      ?>

      <div class="world"> 
      <tr>     
         <div class="border text-center"> <td><p class="font">CONFIRMED CASES</p><p class="data"><?php echo $corona['Global']['TotalConfirmed'] . "<br>"?></p></td></div> 
         <div class="border text-center"> <td><p class="font">RECOVERED</p><p class="data"><?php echo $corona['Global']['TotalRecovered'] . "<br>"?></p></td></div>
         <div class="border text-center"> <td><p class="font">TOTAL DEATHS</p><p class="data"><?php echo $corona['Global']['TotalDeaths'] . "<br>"?></p></td></div>
      </tr>
      </div>






      <!-- ****************precautions****************** -->
      <div id="precautions">
<h1 class="precautions_head">PRECAUTIONS</h1>

<div class="conatiner">
  <div class="row">
    <div class="mt-5">
      <div class="row">
        <div class="col-12">
          <figure class="text-center">
            <img src="IMG/water.png" class="img-fluid" height="90" width="90">
          </figure>
        </div>
        <div class="col-12 text-center"><p >
          wash ur hands frequently with soap <br> or hand sanitizers
        </p></div>
        <div class="col-12">
          <figure class="text-center">
            <img src="IMG/social-distancing.png" class="img-fluid" height="90" width="90">
          </figure>
        </div>
        <div class="col-12 text-center"><p >
          keep at least 1m distance from everyone
        </p></div>
        <div class="col-12">
          <figure class="text-center">
            <img src="IMG/coronavirus.png" class="img-fluid" height="90" width="90">
          </figure>
        </div>
        <div class="col-12 text-center"><p >
          cover your mouth and nose while <br> going out with mask or any cloth
        </p></div>
      </div>
    </div>
  </div>
</div>
</div>

      <!-- ********************symptoms*********************** -->
<div id="symptoms">

<h1 class="symptoms_head">SYMPTOMS</h1>
<div class="container">
  <div class="row">
    <div class="col-12">
      <figure class="text-center">
        <img src="IMG/cough.png" class="img-fluid" height="120" width="120">
        <figcaption><cough>cough</figcaption>
      </figure>
    </div>
    <div class="col-12">
      <figure class="text-center">
        <img src="IMG/cold.png" class="img-fluid" height="120" width="120">
        <figcaption><cough>cold</figcaption>
      </figure>
    </div>
    <div class="col-12">
      <figure class="text-center">
        <img src="IMG/fever.png" class="img-fluid" height="120" width="120">
        <figcaption><cough>fever</figcaption>
      </figure>
    </div>
    <div class="col-12">
      <figure class="text-center">
        <img src="IMG/breathing.png" class="img-fluid" height="120" width="120">
        <figcaption><cough>Breathing problem</figcaption>
      </figure>
    </div>
    <div class="col-12">
      <figure class="text-center">
        <img src="IMG/allergy.png" class="img-fluid" height="120" width="120">
        <figcaption><cough>Runny nose</figcaption>
      </figure>
    </div>
  </div>
</div>
</div>






<!-- Footer -->
<div class="footer bg-warning">
  <h1 class="text-center foot_head">Created by : UJJWAL SHARMA</h1>
<p class="text-center">  || This website is created to spread the awarness regarding the disease COVID-19 ||  </p>

<hr>

<div class="contact text-center">
<h3>Contact me</h3>
<a target="_blank" href="http://instagram.com/_.ujjwal_"><span><img src="IMG/instagram-sketched.png" height="40" width="40"></span></a>
<a target="_blank" href="https://www.facebook.com/ujjwal.sharma55"><span><img src="IMG/facebook.png" height="40" width="40"></span></a>
<a target="_blank" href="http://twitter.com/ujjwalS47049897"><span><img src="IMG/twitter.png" height="40" width="40"></span></a>
<a target="_blank" href="http://gmail.com/_.ujjwal_"><span><img src="IMG/gmail.png" height="40" width="40"></span></a>
</div>
<hr>
</div>

<!-- Footer -->









      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>