<?php
$page = "campus_infa";
$page_name = "Campus Infrastructure";
require "inc/hero.php";
require "inc/navbar.php";
?>
<!-- Breadcrumb Section Begin -->


<div class="breadcrumb-about " style="background-image:linear-gradient( to right, rgba(0, 7, 53, 0.481),rgba(0, 15, 83, 0.421)),url(../image/campus_banner.jpg);">
<div class="red-button">
                    <a>Campus Infrastructure</a>
                </div>
</div>
<!-- Breadcrumb Section END -->
  
<!-- OUR GALLERY SECTION START -->
<!-- OUR GALLERY SECTION START -->
<div class="container gallery-section">
          <h2 class="text-center" style="font-weight: 700;">OUR <span style="color: #d40000;">CAMPUS INFRASTRUCTURE</span></h2>
          <h6 class="text-center "  style="font-weight: 600;">The institute is reputed for its state of the art infrastructure, well stocked air-conditioned library, advanced technology laboratories, a sports complex with swimming pool, food court, separate boys and girls hostels with rooms having attached baths, 24 hours running water with hot water facilities for winters, night canteens inside hostels, an electrical sub-station for 24 hour generator support etc.</h6>
      <div id="gallery-section" class="pt-5">
        <div id="thumbnail-gallery-container">
    
            <!---- Top Row --->
    
            <a class="thumbnail" href="#lightbox-image-1"><img class="thumbnail-image" src="../image/waterfall_garden1.jpg" alt="Waterfall Garden"/></a>
            
            <a class="thumbnail" href="#lightbox-image-2"><img class="thumbnail-image" src="../image/mechanical_block.jpg"alt="Mechanical Block"/></a>
    
            <a class="thumbnail" href="#lightbox-image-3"><img class="thumbnail-image" src="../image/mainentrance.jpg" alt="MainEntrance"/></a>
    
        
            <!--- Bottom Row --->
    
            <a class="thumbnail" href="#lightbox-image-4"><img class="thumbnail-image" src="../image/campus-1.JPG" alt="Drone View"/></a>
    
            <a class="thumbnail" href="#lightbox-image-5"><img class="thumbnail-image" src="../image/campus-2.JPG" alt="Sky View"/></a>
    
            <a class="thumbnail" href="#lightbox-image-6"><img class="thumbnail-image" src="../image/campus-3.JPG" alt="Campus"/></a>
            
    
        </div><!-- thumbnail-gallery-container -->
    </div><!--- gallery-section --->
    
    
    <!--- Lightbox overlay. Below content is hidden until :target activated --->
    
         <div class="lightbox-overlay" id="lightbox-image-1">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/waterfall_garden1.jpg" alt="Waterfall Garden" />
    
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
            
    
        <div class="lightbox-overlay" id="lightbox-image-2">
    
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/mechanical_block.jpg" alt="Mechanical Block" />
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-1"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-3">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/mainentrance.jpg" alt="Academic Block" />
                
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-4">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/campus-1.JPG" alt="Drone View" />
                
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-5">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/campus-2.JPG" alt="Sky View" />
        
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-6"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-6">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/campus-3.JPG" alt="Campus View" />
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-left"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
      </div>




<!-- OUR GALLERY SECTION END -->
<?php include "inc/footer.php";?>