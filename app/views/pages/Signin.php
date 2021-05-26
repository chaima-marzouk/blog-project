<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleAdmin.css" >
    
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/all.min.css" >
    <title>Document</title>
    
</head>
          
<body>

<header>
           <div class="wrapper"> 
                <div class="logo">
                    <a href="#">BOOKS TIME </a>  
                </div>
                
                <nav>
                    <a href="<?php echo URLROOT;?>/UserController/Home">Home</a>
                </nav>
            </div>
    </header>
    <h1 class="">  Signin</h1>
            <form  onsubmit="validation()" id="form" name="form" action="<?php echo URLROOT; ?>/UserController/login" method="post" style="width: 500px; margin: auto; box-shadow: 2px rgb(0, 0, 0, 0);" > 
            <div class="form-group ">
                <?php if (isset($data['email_err'])) {echo $data['email_err'];} ?>
                <label>Email address</label>
                <input type="email" name="email"  id="email"  class="form-control email <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"  placeholder="Enter email" style="margin-bottom: .5rem">
                <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                The username can't be Empty
                </div>
                <span class="invalid-feedback"><?php echo $data['email_err']?></span>
                <small></small>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password"  name="password" id="password" class="form-control password <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="exampleInputPassword1" placeholder="Password" style="margin-bottom: .5rem">
                <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                The password can't be less than 5 characters
                </div>
                <span class="invalid-feedback"><?php echo $data['password_err']?></span>
            </div>
            <button
                type="submit" value="submit" id="submit" name="submit" style="margin-top: 20px;"
                class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">submit
            </button>
            </form>

                <script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.min.js"></script>
                <script src="<?php echo URLROOT; ?>/js/script.js"></script>
</body>
</html>