<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      
  <title>Upload your files</title>
</head>
<body>
<nav>
  <div class="nav-wrapper cookie2">
     <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  <a class="brand-logo" href="index.html" style="padding-left: 1vw;">Extensions Store</a>
   <!--<img src="https://lh3.googleusercontent.com/kfDBQi0smpMPgpWlXMZ2ow9M6uURgIGhY_sZSkk1lbANAU1PCfEVgwlHwaPVypIFYzxJ=s180" width="32" height="32">-->

<ul id="nav-mobile" class="right hide-on-med-and-down">
      <li>
        <a href="index.html">Extensions</a>
      </li>
      <li>
        <a href="create.html">Create</a>
      </li>
      <li>
        <a  href="//cookiejarapps.com/extensions/upload.php">Upload</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="//cookiejarapps.com/extensions/convert.php">Convert</a>
      </li>-->
    </ul>
  </div>
  </div>
</nav>
<ul id="slide-out" class="sidenav">
  <center>
    <li><div class="user-view">
      <a href="#user"><img class="circle" src="https://lh3.googleusercontent.com/kfDBQi0smpMPgpWlXMZ2ow9M6uURgIGhY_sZSkk1lbANAU1PCfEVgwlHwaPVypIFYzxJ=s180"></a>
      <a href="#name"><span class="black-text name">Extensions Store</span></a>
    </div></li></center>
        <li><div class="divider"></div></li>

    <li><a href="index.html"><i class="material-icons">extension</i>Extensions</a></li>
    <li><a href="create.html"><i class="material-icons">create</i>Create</a></li>
    <li><a href="#!"><i class="material-icons">cloud_upload</i>Upload</a></li>
  
  </ul>
<div class="container">
    <form enctype="multipart/form-data" action="upload.php" method="POST">
      <div class="row">
      <div class="col s4">
      </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">email</i>
          <input id="exampleInputEmail1" name="email" type="text" class="validate">
          <label for="exampleInputEmail1">Email</label>
        </div>
       </div>
       <div class="col s4">
      </div>
       <div class="row">
       <div class="col s4">
      </div>
       <div class="input-field col s4">
          <i class="material-icons prefix">title</i>
          <input id="icon_telephone" type="text" class="validate" required>
          <label for="icon_telephone">Extension Name</label>
        </div>
        <div class="col s4">
      </div>
        </div>
        <div class="row">
        <div class="col s4">
      </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">format_align_center</i>
          <input id="icon_telephone" type="text" class="validate" required>
          <label for="icon_telephone">Extension Description</label>
        </div>
        <div class="col s4">
      </div>
        </div>
        <div class="row">
        <div class="col s4">
      </div>
        <div class="input-field col s4">
        <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file"  name="uploaded_file" class="form-control-file" id="exampleFormControlFile1" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        </div>
        <div class="col s4">
      </div>
        </div>
        
      </div>
      <br>
      <center>
      <button type="submit" class="btn cookie2">Upload</button>

<br>
<br>
    </form>
  </div>
  

    <small id="emailHelp" class="form-text text-muted">It may take up to a week before your extension appears in the store. Please note files with spaces in the name cannot be uploaded.</small>
    </center>
  </div>
    
  </form>
  </div>
</body>
</html>
<?php
$filename = $_FILES['uploaded_file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if( $ext !== 'zip' && !empty($_FILES['uploaded_file'])) {echo 'Only .zip files are allowed.';}
else{
    if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $basename = basename( $_FILES['uploaded_file']['name']);
    $newBasename = $_REQUEST['email'] . " " . uniqid() . ".zip";
    $path = $path . $newBasename;

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
}

  
?>
<style>
  .cookie1 {
  background-color: #C88C36 !important;
}

  .cookie2 {
  background-color: #8E4F00 !important;
}
.card .card-action {
	border-top: 1px solid rgba(255,255,255,0.5);
}
</style>
          
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>