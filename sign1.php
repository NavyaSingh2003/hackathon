
<html>
    <head>
        
        
        
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>
    Home Page
</title>
<script>
   var counter =0;
$('#next').click(function(){
  var pos = $('#fig').position();
  if(counter < 4){
    console.log(counter);
    counter++;
      $('#fig').css("left",pos.left-( $(window).innerWidth() ));
  }
  else{
    $('#fig').css("left","0px");
    counter=0;
  }
});
</script>
    </head>

   
<body style="">

    <div id="bg">
    <div class="container-fluid bg bg-danger">
      <nav class="nav nav-tab bg bg-danger">
       
        <ul class="nav nav-tabs" >
          <li class="nav-item">
             <span class="glyphicon glyphicon-home">Home</span></li>
       
            <li class="nav-item">   About
                <div class="dropdown">
                    <button class="dropbtn"></button>
                    <div class="dropdown-content" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 
                    Geneva, Verdana, sans-serif; font-size: medium;" >
                       
                    </div>
                
                  </div>
                </li>
        
          <li class="nav-item">
            <span class="glyphicon glyphicon-earphone">Contact</span></li>
          <li class="nav-item">
            <span class="glyphicon glyphicon-list-alt"><a href="sign.php">Create New Account</a></span>
          </li>
           
          
        </ul>
      </nav>
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="logo" >
        
        <img src="hackathon-website.png" width="200px" height="200px" 
        style="position: relative;left: 500px; ">
        <h2>We Care For You</h2>
        <h2 style="position: relative; left:300px">We Believe In You</h2>

        </div>
        <div class="container mx-auto mt-4">
            <div class="row">
              <div class="col-md-4" style="width:18rem">
                <div class="card">
            <img src="https://i0.wp.com/journomed.com/wp-content/uploads/2021/11/gynecology-concept-illustration_23-2148653934.jpg?resize=626%2C470&ssl=1" 
            class="card-img-top" alt="..." width="200px" height="200px">
            <div class="overlay">
                <div class="text">Hello World</div>
              </div>
            <div class="card-body">
              <h3 class="card-title" >Health-Care</h3>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="health1.html" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
             
            </div>
            </div>
              </div>    
                 <div class="col-md-4">
          <div class="card" style="">
            <img src="https://biznews.fiu.edu/wp-content/uploads/2016/02/power-up-summit_feature.jpg"
             class="card-img-top" alt="..." width="200px" height="200px" >
             <div class="overlay">
                <div class="text">Hello World</div>
              </div>
            <div class="card-body" >
              <h3 class="card-title">Career Opportunities And Resources</h3>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn  mr-2 "><i class="fas fa-link text text-centre"></i> Visit Site</a>
             
            </div>
            </div>
              </div>  
              <div class="col-md-4">
                <div class="card" style="">
                  <img src="https://previews.123rf.com/images/llesia/llesia1510/llesia151000098/46550723-set-of-colorful-profession-woman-flat-style-icons-businesswoman-doctor-artist-designer-cook-police-t.jpg" 
                  class="card-img-top" alt="..." width="200px" height="200px">
                  <div class="overlay">
                   Hello World
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Services</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                   
                  </div>
                  </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <!--Photo Gallery-->
                  <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#" method="post">
                    <h1>Sign Up</h1>
                    
                    <label>
                        <input type="text" placeholder="Name" name="username" autocomplete="off" required/>
                    </label>
                    <label>
                        <input type="email" placeholder="Email" name="email" autocomplete="off" required/>
                    </label>
                    <label>
                        <input type="password" placeholder="Password" name="password" autocomplete="off" required/>
                    </label>
                    <button type="submit" class="btn" >Sign Up</button>
      
                </form>
            </div>

                  <div></div>
                  <div id="next">Next</div>
                  
                </body>
                  
</html>