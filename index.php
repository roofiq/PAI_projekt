<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PanDa 3</title>
  
 <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap-4.1.3\scss\bootstrap.css">
  <script src="bootstrap-4.1.3\site\docs\4.1\assets\js\vendor/jquery-slim.min.js"></script>
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

    	<li><a href="<?php echo $key ?>"><?php echo $value ?></a></li>
 	<?php endforeach ?> 
          </ul>
   </li>
             <div id="Home" class="content">
                  <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                 
            </div>
             <div id="Apartaments" class="content">
           
                  <p>
                  	

                       We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. 
                  </p>
                 
            </div>

                 <div id="Contact" class="content">
                  <p>
                       We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. We have apartaments for renting. 
                  </p>
                 
            </div>

       <div class="jumbotron text-center" style="margin-bottom:0" >
  <p>Footer</p>
</div>





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
 