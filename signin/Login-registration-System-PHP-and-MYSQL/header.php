<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 4 Navigation Bar</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <script
      async=""
      src="https://www.google-analytics.com/analytics.js"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
    </script>
   
    <script src="//cdn.snigelweb.com/sncmp/latest/sncmp_stub.min.js"></script>
   
    <style>
      *{
        padding:0;
        margin:0;
      }
      .nav-link,
      .navbar-brand {
        color: black;
        font-size: 0.7em;
      
      }
      .nav-link:hover,
      .navbar-brand:hover {
        color:black;
        text-decoration: underline;
      }
      #logo_header{
        width:5em;
        
      }
      .navbar_background{
        background: rgb(219,253,187);
    background: linear-gradient(69deg, rgba(219,253,187,1) 0%, rgba(200,252,226,1) 30%, rgba(64,186,254,1) 100%);
      }
      .nav-item{
        padding-right: 3em;
      }
      .nav-link{
        font-size: 1.2em;
      }
      #main_div{
        position:relative;
        margin-top:8%;
         
          width:70%;
          
          margin-left:20%;
      }
      #text label{
        font-size:large;
        font-weight:bold;
      }
      #option label{
        font-size:large;
        font-weight:bold;
      }
      #location label {
        font-size:large;
        font-weight:bold;
      }
      #messgae{
        font-size:large;
        font-weight:bold;
      }

      #second_div{
          display:flex;
          flex-direction:row;
          
      }
      #location{
        margin-left:31.5%;
      }
      #feild{
          padding-right:60%;
      }
      #post_button{
        padding:2px 2em 2px 2em;
      }
     
    </style>
   
  </head>

  <body>
    <nav
      class="navbar navbar-expand-lg navbar navbar_background "
      style="margin: 0px 0"
    >
      <a class="navbar-brand" href="main.html"><img id="logo_header" src="Images/logo.png"/></a>
      <button
        class="navbar-toggler navbar-toggler-right collapsed"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
        aria-expanded="false"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navb">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="mypost.php">My Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="header.php">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Read.php">Read</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Setting</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
         <a href="sign.html"><button class="btn btn-success my-2 my-sm-0" type="button">
            SignUp/Login 
          </button></a> 
        </form>
      </div>
    </nav>
    <section>
      <form method="post" action="post.php">
          <div id="main_div">
          <div id="text">
      <label id="first_label" for="title">Title</label>:<br />
        <input type="text" name="title" id="feild" value=""/><br />
    </div>
          <div id="second_div">
              <div id="option">
            <label for="type">Type</label>:<br />
            <select name="type" id="feild">
              <option value="Harassment">Harassments</option>
              
                <option  value="rape">Rape</option>
                <option value="child abuse">Child Abuse</option>
                <option value="catcalling">Catcalling</option>
                <option value="Trans">Trans Acceptance</option>
                <option value="Sexual Assualt">Sexual Assault</option>
                <option value="Trafficking">Trafficking</option>
                <option value="Financial Abuse">Financial Abuse</option>
                <option value="other">Other</option>
                
             
            </select>
    </div>
            <div id="location">
            <label for="locn">Location:</label><br />
            <input type="text" name="locn" id="feild" />
          </div>
        </div>
        <label id="messgae" for="message">Message:</label><br>
        <textarea name="message" id="feild"  rows="5" cols="23" style="resize:none"></textarea>
        <br>
        <button id="post_button" type="submit" name="POST">POST</button>
    </div>
     
    </form>
    </section>
  </body>
</html>