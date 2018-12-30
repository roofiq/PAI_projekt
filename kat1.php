<html>
<head>
<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
  <title>PanDa 3</title>

    <!--IMAGE LIBRARY -->
 

<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap-4.1.3/scss/bootstrap.css">
 <link rel="stylesheet" href="lightbox2-master/dist/css/lightbox.min.css" >

  <script src="bootstrap-4.1.3\site\docs\4.1\assets\js\vendor\jquery-slim.min.js"></script>
  <script src="bootstrap-4.1.3\site\docs\4.1\assets\js\vendor\popper.min.js"></script>
  <script src="bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>

    </head>


<body>



	   <div class="wrapper">
            <header>
<nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              Na Orlowskim Zaciszu
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="index.php" >Home</a></li>

                                 
           
                                    <li><a href="#Contact">Contact</a></li>
                              </ul>
                        </div>
                  </nav>
         
            </header>
</div>

  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategoria</a>
          <ul class="dropdown-menu">
         
          	
<?php
$menu = array("kat1.php" => "Kategoria_1" ,"kat2.php" => "Kategoria_2" ,"kat3.php" => "Kategoria_3");
	foreach($menu as $key=>$value ): ?>

    	<li><a href="<?php echo $key ?>" ><?php echo $value ?></a></li>
 	<?php endforeach ?> 
          </ul>
   </li>
             <div id="Home" class="content">
                  <p>
                        Kategoria 1
                  </p>
                 
            </div>
             <div id="Apartaments" class="content">
           
                  <p>
                  	
                       <a href="images/lol.png" data-lightbox="lol" data-title="My caption">Image #1</a>
<a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="lol"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>


                 
            </div>

                       
                 <div id="Contact" class="content">
                  <p>
                       We hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhhWe hhhhh
                  </p>
                 
            </div>

       <div class="jumbotron text-center" style="margin-bottom:0" >
  <p>Footer</p>
</div>




    <!--IMAGE LIBRARY -->
<script src="lightbox2-master\dist\js\lightbox-plus-jquery.min.js"></script>

</body>
  <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>
 </html>
 