<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css" >
    <title>Home page</title>
</head>
    
<body>
    <div class="box-area">
        <header>
           <div class="wrapper"> 
                <div class="logo">
                    <a href="#">BOOKS TIME </a>  
                </div>
                
                <nav>
                    
                    <a href="">Contact</a>
                    <a href="">About</a>
                    <a href="">Episodes</a>

                        <a href="<?php echo URLROOT;?>/UserController/Admin"> <button
                        type="submit" value="submit" name="submit_add" 
                        class="btn btn-outline-warning btn-rounded"
                        data-mdb-ripple-color="dark"
                        >Signin</button></a>
                        
                </nav>
            </div>
    </header>
    <div class="banner-area">
        <!-- <p>Vendue à plus de 450 millions d’exemplaires dans 200 pays</p> -->
        <div class="loading">
        <span>Vendue à plus de 450 millions d’exemplaires dans 200 pays</span>
        </div>
    
    </div>
    <div class="content-area row">
        <h2 class="">A fiew words about me</h2>
        <img class="col-6 text-center "  src="<?php echo URLROOT; ?>/img/image.jpg" alt="">
        <p class="col-5" style="margin-left: 57vh;">Joanne Rowling,born 31 July 1965),British author, philanthropist, film producer television 
            producer, and screenwriter. She is best known for writing the Harry Potter fantasy series,
            which has won multiple awards and sold more than 500 million copies,The books are the basis 
            of a popular film series, over which Rowling had overall approval on the scripts 
        </p>
        <h2 class="">About the book</h2>
        <img class="col-6 " style=" width: 60vh; margin: 5vh 20vh"src="<?php echo URLROOT; ?>/img/book.jpeg" alt="book">
        <p class="col-5 text-dark" style="margin-top: 3vh; font-family: bignoodleftling;">une série littéraire de low fantasy écrite par l'auteure britannique J. K. Rowling, dont la suite romanesque s'est achevée en 2007. Une pièce de théâtre, considérée comme la « huitième histoire » officielle, a été jouée et publiée en 2016. Les livres et le script de la pièce ont été traduits en français par Jean-François Ménard. La série de sept romans raconte les aventures d'un jeune sorcier nommé Harry Potter et de ses amis Ron Weasley et Hermione Granger à l'école de sorcellerie Poudlard, dirigée par Albus Dumbledore. L'intrigue principale de la série met en scène le combat de Harry contre Lord Voldemort, un mage noir à la recherche de l'immortalité ayant autrefois assassiné les parents du garçon. À la tête de ses fidèles adeptes, les Mangemorts, Voldemort cherche depuis des décennies à acquérir le pouvoir absolu sur le monde des sorciers et des Moldus (les humains sans pouvoirs magiques).Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence
        bouleversée. Un géant vient le chercher pour l’emmener à
        Poudlard, une école de sorcellerie! Voler en balai, jeter des
        sorts,combattre les trolls : Harry Potter se révèle un sorcier 
                doué.Mais un mystère entoure sa naissance et l’effroyable V..., le
                mage dont personne n’ose prononcer le nom. Amitié, surprises, 
                dangers, scènes comiques, Harry découvre ses pouvoirs et la vie 
                à Poudlard.Le premier tome des aventures du jeune héros vous 
                ensorcelle aussitôt!
        </p>
    
        
         <!-- tittre + icone livre -->
        <h1 class="m-4">Harry Potter's Episodes <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg> 
        </h1>
        //  <!-- barre de recherche -->
        <div ></div>
         <input name="myInput" id="myInput" placeholder="Search for Episodes" style="width: 500px; margin: auto; box-shadow: 2px rgb(0, 0, 0, 0);" onkeyup="myFunction()">
        <!-- Card -->
<div class="container">
    <div class="row ">
      <?php foreach ($data as $row) :?>
        <div class="col-md-3">
        <!-- <ul id="myUL"> -->
            <div class="card text-center shadow m-4" style="width: 18rem;">
                <img src="<?php echo URLROOT; ?>/img/harry.jpg" class="card-img-top" alt="">
                <div class="card-body" >
                
                <h5 class="card-title" id="element"><?php echo $row->titre ;?></h5>
                
        
                <p class="card-text text-center" ><?php echo $row->description ;?></p>
               <!-- Button trigger modal -->
                    <button type="button" class="btn text-white"  style="background-color: #0D4E6D;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Click to read more ...
                    </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $row->titre ;?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php echo $row->contenu ;?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div> 
             </div>
          </div>
        </div> 
        <?php  endforeach ?>  
     </div>
    
</div>
                 <!-- JAVASCRIPT -->
                 <!-- <script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    console.log(a);
}
</script> -->
    
</body>
</html>