<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleAdmin.css" >
    <title>Document</title>
</head>
<body>
<header>
           <div class="wrapper"> 
                <div class="logo">
                    <a href="#">BOOKS TIME </a>
                    
                    
                </div>
                
                <nav>
                    <a href="<?php echo URLROOT;?>/UserControllers/Home">Home</a>
                </nav>
            </div>
    </header>
    <h1 class="">  Signin</h1>

            <form action="<?php echo URLROOT; ?>/UserControllers/login" method="post" style="width: 500px; margin: auto" > 
            <div class="form-group ">
                <?php if (isset($data['email_err'])) {
                                    echo $data['email_err'];
                                } ?>
                <label for="exampleInputEmail1">Email address</label>
                
                <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button
                        type="submit" value="submit" name="submit" style="margin-top: 20px;"
                        class="btn btn-outline-danger btn-rounded"
                        data-mdb-ripple-color="dark"
                        >submit</button>
            </form>
</body>
</html>