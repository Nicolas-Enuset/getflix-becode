<?php 
    include("head.php")
?>
<title>Main page</title>
</head>

<!-- body -->
<body>
 
<!-- Nav Bar -->
<?php 
    include("navBar.php")
?>
<!--Section Movies w/ Carousels-->
<!--<div id="carrousel">
    <ul>
        <li><img src="http://lorempixel.com/700/200/" /><p></p></li>
	<li><img src="http://lorempixel.com/g/700/200/" /></li>
	<li><img src="http://lorempixel.com/700/200/abstract/" /></li>
    </ul>
</div>
-->
      
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
          <div class="carousel-item active h-100">
            <img class="d-block w-100 h-100" src="http://lorempixel.com/700/200/" alt="">
          </div>
          <div class="carousel-item h-100">
            <img class="d-block w-100 h-100" src="http://lorempixel.com/700/200/" alt="">
          </div>
          <div class="carousel-item h-100">
            <img class="d-block w-100 h-100" src="http://lorempixel.com/700/200/" alt="">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<!-- footer -->
<?php 
    include("footer.php")
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>

       $(document).ready(function(){
    
    let $carrousel = $('#carrousel'), 
        $img = $('#carrousel img'), 
        indexImg = $img.length - 1, 
        i = 0, 
        $currentImg = $img.eq(i); 
    
    $img.css('display', 'none'); 
    $currentImg.css('display', 'block'); 
    
    $carrousel.append('<div class="controls"> <span class="prev">Precedent</span> <span class="next">Suivant</span> </div>');
    
    $('.next').click(function(){ 
    
        i++; 
    
        if( i <= indexImg ){
            $img.css('display', 'none'); 
            $currentImg = $img.eq(i); 
            $currentImg.css('display', 'block'); 
        }
        else{
            i = indexImg;
        }
    
    });
    
    $('.prev').click(function(){ 
    
        i--; 
    
        if( i >= 0 ){
            $img.css('display', 'none');
            $currentImg = $img.eq(i);
            $currentImg.css('display', 'block');
        }
        else{
            i = 0;
        }
    
    });
    
    function slideImg(){
        setTimeout(function(){ 
                            
            if(i < indexImg){ 
            i++; 
        }
        else{ 
            i = 0;
        }
    
        $img.css('display', 'none');
    
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    
        slideImg(); 
    
        }, 7000); 
    }
    
    slideImg(); 
    
    });
    
   </script>
</body>
</html>