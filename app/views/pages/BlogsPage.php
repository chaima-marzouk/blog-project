<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleAdmin.css" >
    <title>Blog crud</title>
</head>
<body>
        <!-- header -->
        <header>
           <div class="wrapper"> 
                <div class="logo">
                    <a href="#">BOOKS TIME </a>  
                </div>
                
                <nav> 
                    <a href="<?php echo URLROOT;?>/UserControllers/Home">Home</a>
                    <a href="<?php echo URLROOT;?>/UserControllers/Home">Logout</a>  
                    <!-- add button and form -->
        <button  type="button" class="btn text-white m-2" style="background-color: #0D4E6D;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add new episode</button>
         
                </nav>
            </div>
    </header>
        
        
        <h1 class="text-center m-5">Harry Potter's Episodes</h1>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">New episode</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                 <div class="modal-body">
                                           <!------ form add episode ------>
                            <form action="<?php echo URLROOT ;?>/UserController/insert" method="post">
                            <div class="mb-3">
                            
                                <label for="titre" name="titre" class="col-form-label">Tittre:</label>
                                <input type="text" name="titre" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="description" class="col-form-label">Description:</label>
                                <input class="form-control" name="description" >
                            </div>
                            <div class="mb-3">
                                <label for="contenu"  class="col-form-label">Contenu:</label>
                                <input class="form-control" name="contenu" id="message-text">
                            </div>
                            <button
                        type="submit" value="submit" name="submit_add" style="margin-top: 20px;"
                        class="btn btn-outline-warning btn-rounded"
                        data-mdb-ripple-color="dark"
                        >submit</button>
                        
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
        <!-- header -->
<div class="container">
    <!-- <div class="test"> -->
    <div class="row justify-content-center">
    <?php foreach ($data as $row) :?>
        <div class="col-md-4">
        
            <div class="card text-center shadow m-3" style="width: 18rem;">
                <img src="<?php echo URLROOT; ?>/img/harry.jpg" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row->titre ;?></h5>
                <p class="card-text text-center"><?php echo $row->description ;?></p>
               <!-- Button trigger modal -->
                    <button type="button" class="btn text-white"  style="background-color: #0D4E6D;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tap to read more ...
                    </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"><?php echo $row->titre;?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php echo $row->contenu ;?>
                    </div>
                    <div class="modal-footer">
                        <button style="background-color: rgb(92, 8, 8, 0.9);" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
                    <!-- delete -->
                    <div><a href="<?php echo URLROOT;?>/UserController/delete?id=<?php echo $row->id;?>" button  style="margin: 25px;" type="submit" name="delete" class="btn btn-danger">Delete</button></a>
                    <!-- edit -->
                    

                    <a href="<?php echo URLROOT; ?>/UserController/update/<?php echo $row->id;?>"><button  type="button" name="update" class="btn btn-success m-2" >update</button></a>
                     
             </div>
          </div>
        </div>  
     </div>
     <?php endforeach ?>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
</html>