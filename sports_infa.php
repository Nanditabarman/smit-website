<?php
$page = "sports_infa";
$page_name = "Sports Infrastructure";
require "inc/hero.php";
require "inc/navbar.php";
?>
<!-- Breadcrumb Section Begin -->


<div class="breadcrumb-about " style="background-image:linear-gradient( to right, rgba(0, 7, 53, 0.481),rgba(0, 15, 83, 0.421)),url(../image/sports_banner.jpg);">
<div class="red-button">
                    <a>Sports Infrastructure</a>
                </div>
</div>
<!-- Breadcrumb Section END -->
  
<!-- OUR GALLERY SECTION START -->
<!-- OUR GALLERY SECTION START -->
<div class="container gallery-section">
          <h2 class="text-center" style="font-weight: 700;">OUR <span style="color: #d40000;">SPORTS INFRASTRUCTURE</span></h2>
          <h6 class="text-center "  style="font-weight: 600;">State of the art sports complex named MARENA with indoor swimming pool, basketball court, squash court and a health gym. The campus also has a lush green football ground.</h6>
      <div id="gallery-section" class="pt-5">
        <div id="thumbnail-gallery-container">
    
            <!---- Top Row --->
    
            <a class="thumbnail" href="#lightbox-image-1"><img class="thumbnail-image" src="../image/sports_infra1.jpg" alt="Cricket Playground"/></a>
            
            <a class="thumbnail" href="#lightbox-image-2"><img class="thumbnail-image" src="../image/sports_infrastructure2.jpg"alt="Indoor Basketball Court"/></a>
    
            <a class="thumbnail" href="#lightbox-image-3"><img class="thumbnail-image" src="../image/sports_infrastructure6.jpg" alt="Gym"/></a>
    
        
            <!--- Bottom Row --->
    
            <a class="thumbnail" href="#lightbox-image-4"><img class="thumbnail-image" src="../image/sports_infrastructure5.jpg" alt="OUTDOOR Tennis Court"/></a>
    
            <a class="thumbnail" href="#lightbox-image-5"><img class="thumbnail-image" src="../image/sports_infrastructure1.jpg" alt="Indoor Swimming Pool"/></a>
    
            <a class="thumbnail" href="#lightbox-image-6"><img class="thumbnail-image" src="../image/sports_infrastructure4.jpg" alt="Badminton Court"/></a>
    
        </div><!-- thumbnail-gallery-container -->
    </div><!--- gallery-section --->
    
    
    <!--- Lightbox overlay. Below content is hidden until :target activated --->
    
         <div class="lightbox-overlay" id="lightbox-image-1">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/sports_infra1.jpg" alt="Cricket Playground" />
    
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
            
    
        <div class="lightbox-overlay" id="lightbox-image-2">
    
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/sports_infrastructure2.jpg" alt="Indoor Basketball Court" />
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-1"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-3">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/sports_infrastructure6.jpg" alt="Gym" />
                
          <p class="lightbox-navigation"><a class="back" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-4">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/sports_infrastructure5.jpg" alt="OUTDOOR Tennis Court" />
                
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-5">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/sports_infrastructure1.jpg" alt="Indoor Swimming Pool" />
        
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-6"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-6">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/sports_infrastructure4.jpg" alt="Badminton Court" />
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-left"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
      </div>




<!-- OUR GALLERY SECTION END -->
<?php include "inc/footer.php";?>