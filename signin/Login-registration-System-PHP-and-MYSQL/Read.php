<!DOCTYPE html>
<html>
    <head>
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
           body{
            width:100vw;
	height:100vh;
            background: rgb(219,253,187);
    background: linear-gradient(69deg, rgba(219,253,187,1) 0%, rgba(200,252,226,1) 30%, rgba(64,186,254,1) 100%);
           }
           *{
        padding:0;
        margin:0;
      }
      .navbar{
        box-shadow: 5px 5px 8px #888888;
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
           #card{
    background-color:rgba(255,255,255,0.6);
    width:100%;
    margin-top:1em;
    padding-top:1em;
    padding-bottom:1em;
    
   
}
#comments_conn{
    margin-top:1em;
    display:flex;
    flex-direction:row;
    margin-left:1em;
    width:100%;
}
#comment_label{
    font-weight:bold;

}
#text_area{
    padding:0.3em 5em 0.3em 5em ;
    border-radius:10px;
    border:none;
    margin-right:1em;
    background-color:rgba(1,1,1,0.3);
}


#message_con{
    word-break:break-all;
    width:80%;
    
}
#comment_button{
    border:none;
    padding:4px 1em 4px 1em;
    background-color:rgba(1,1,1,0.3);
    cursor: pointer;
}
#comment_button:hover{
    background-color:blue;
}
#main_card{
    margin-top:2em;
    width:60%;
    margin-right:auto;
    margin-left:auto;
}
#container{
    
    display:flex;
    flex-direction:row;
}
#post_title{
    position:relative;
    background-color:rgba(0,0,0,0.3);
 
    width:fit-content;
    padding:2px 1em 2px 1em;
    font-size:1em;
    font-weight:bold;
    margin-bottom:1em;
    border-radius:10px;
    
}
#title_con{
    font-size:larger;
    font-weight:bolder;
}
.gap{
    padding-top:0.4em;
}

#image_container{
    padding-left :1em;
    padding-right:1.5em;
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
    <?php
    include "db_conn.php";
    $query=" SELECT * FROM post";
    $result2 = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result2)){
      ?>
      <div id="main_card">
          <div id="post_title"> <?php echo $row['type']?></div>
          <div id="card">
              <div id="container">
              <div id="image_container">
                  <img src="https://image.flaticon.com/icons/png/128/201/201634.png"/>
                  </div>
                      <div id="text_container">
                          <div class ="gap" id="date"><?php echo date("l jS \of F Y h:i:s A");
                          
?></div>
<br>
<div id="third_container">
<div class="gap" id="title_con"> <?php echo $row['title']?></div>
<br>
<div class="gap" id="message_con"><?php echo $row['message']?></div>
    </div>
    </div>
    </div>
    <div id="comments_conn">
    <div id="comments_container">
        <label id="comment_label">Comments :</label>
        <input id="text_area" type="text" placeholder="share your support" name="comments" />
    </div>
        <div id="button_conn">
        <button id="comment_button" type="submit" name="comment">Comment</button>
    </div>
    

    </div>

    </div>
    </div>
    
              

        


  <?php  }?>
    
</body>
    </html>