<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleAdmin.css" >
    <title>Edit</title>
</head>
<body>
<!-- <header>
           <div class="wrapper"> 
                <div class="logo">
                    <a href="#">BOOKS TIME </a>  
                </div>
                
                <nav>
                    <a href="<?php echo URLROOT;?>/UserController/Home">Home</a>
                </nav>
            </div>
    </header> -->

    
 
<div class="container" style="margin: 60px auto ; width: 890px; border: 1px solid; box-shadow: 20px 20px 50px #732a2a; ">
<h1 class="" style="margin-top: 30px;"> Update</h1>
<form action="<?php echo URLROOT; ?>/UserController/update/<?php echo $data->id ?>" method="post" style="width: 526px; margin: auto; margin-top: 50px; font-family:Tahoma;">
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" value="<?php echo $data->titre ;?>" name="titre" class="form-control"  placeholder=""><br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" value="<?php echo $data->description ;?>" class="form-control" ><br>
  </div>

  <div class="form-group">
   
    <label for="content">Content</label>
    <textarea name="contenu" placeholder="hfjhc" id="content" cols="70" rows="11" style="padding: 10px;"><?php echo $data->contenu ;?> </textarea>

  </div>
  
  
  <button type="submit" style="margin-top: 20px; margin-bottom: 30px;"class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark" name="submit_edit">Submit</button>
</form>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>