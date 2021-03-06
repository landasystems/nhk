<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title> New Hongkong Restaurant Malang | Restaurant Masakan Cina di Malang </title>

<!-- **Favicon** -->
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- **CSS - stylesheets** -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- **Additional - stylesheets** -->
<link href="responsive.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" 
title="prettyPhoto main stylesheet" charset="utf-8" />

<!-- **jQuery** -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/spa.custom.js"></script>
<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("area[rel^='prettyPhoto']").prettyPhoto();
        $(".gallery-berita-foto:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        });
      </script>

</head>

<body class="home" style="background:url('images/top-bg.jpg')">


<!-- **Header** -->
<div id="header">
    <div class="container">
    
        <!-- **Top-Menu** -->
        <!-- **Top-Menu** -->
        <?php include 'container/menu.php'; ?>
        <!-- **Top-Menu - End** -->
       <!-- **Top-Menu - End** -->
        
        <!-- **Logo** -->
        
       <!-- **Searchform - End** -->
        
    </div>
</div><!-- **Header - End** -->
<?php include 'container/slider.php'; ?>

<!-- ** Main** -->
<div>

    <!-- **Breadcrumb** -->
    
        
    <!-- **Main Container** -->
    <br>
    <div class="main-container">
    
        <!-- **Content Full Width** -->
        <div class="content content-full-width">  
            <h1 class="title"> <span> Gallery Restaurant</span> </h1>
            <div class="gallery-wrapper">
                <!-- **Gallery Container** -->
                <div class="gallery-container">
                    <div class="row gallery-berita-foto">
                        <div class="col-sm-12">
                        <?php 
                        $cFolder = "app/img/gallery";  
                        $cHandle = opendir($cFolder); 
                        $i = 1;  
                        $cImageExtension = array('png', 'jpg', 'jpeg', 'gif');  
                        while(false !== ($file = readdir($cHandle))){  
                        $fileAndExt = explode('.', $file);  
                        if(in_array(end($fileAndExt), $cImageExtension)){ 
                            //Remove Extension
                            $cName = str_replace($cImageExtension, " ", $file); 
                        ?>
                             <div class="col-sm-4">
                                <a href="app/img/gallery/<?=$file?>" rel="prettyPhoto[gallery1]">
                                <img src="app/img/gallery/<?=$file?>" style="height:250px;width:400px;box-shadow: #999 2px 2px 2px"/></a>
                                <div class="gallery-title">
                                    <h5> <a href="#" title=""> <?=$cName?> <br/>  </a> </h5>
                                </div> 
                            </div>
                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                    
                </div><!-- **Gallery Container - End** -->
                
            
            </div><!-- **Gallery Wrapper** -->
            
        </div> <!-- **Content Full Width - End** -->    
        
    </div><!-- **Main Container - End** -->
    
    <!-- ** Footer** -->
    <?php include 'container/footer.php'; ?>
    <!-- **Footer - End** -->
    
<!--   **Footer Bottom** 
    <div class="footer-bottom"> 
        <div class="main-container">        
            <p> Copyright &copy; 2015 New Hongkong Restaurant  </p>        
        </div>
    </div> **Footer Bottom - End** 

</div> **Main - End**-->



</body>
</html>
