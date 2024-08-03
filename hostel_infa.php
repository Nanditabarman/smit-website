<?php
$page = "hostel_infa";
$page_name = "Hostel Infrastructure";
require "inc/hero.php";
require "inc/navbar.php";
?>
<!-- Breadcrumb Section Begin -->


<div class="breadcrumb-about " style="background-image:linear-gradient( to right, rgba(0, 7, 53, 0.481),rgba(0, 15, 83, 0.421)),url(../dept-images/hostel_banner.jpg);">
<div class="red-button">
                    <a>Hostel Infrastructure</a>
                </div>
</div>
<!-- Breadcrumb Section END -->
  
<!-- OUR GALLERY SECTION START -->
<!-- OUR GALLERY SECTION START -->
<div class="container gallery-section">
          <h2 class="text-center" style="font-weight: 700;">OUR <span style="color: #d40000;">HOSTEL INFRASTRUCTURE</span></h2>
          <h6 class="text-center "  style="font-weight: 600;">The hostels provide excellent accommodation to nearly 3000 students. All rooms have attached bathrooms. To cater to the student’s nutrition needs, the institute provides canteens and food courts apart from a professionally run mess.</h6>
      <div id="gallery-section" class="pt-5">
        <div id="thumbnail-gallery-container">
    
            <!---- Top Row --->
    
            <a class="thumbnail" href="#lightbox-image-1"><img class="thumbnail-image" src="../dept-images/hostel1.jpg" alt="Hostel building"/></a>
            
            <a class="thumbnail" href="#lightbox-image-2"><img class="thumbnail-image" src="../dept-images/smit8.jpg"/></a>
    
            <a class="thumbnail" href="#lightbox-image-3"><img class="thumbnail-image" src="../dept-images/smit9.jpg" alt="Hostel view."/></a>
    
        
            <!--- Bottom Row --->
    
            <a class="thumbnail" href="#lightbox-image-4"><img class="thumbnail-image" src="../dept-images/hostel_room.jpg" alt="girls and boys hostel"/></a>
    
            <a class="thumbnail" href="#lightbox-image-5"><img class="thumbnail-image" src="../dept-images/smit14.jpg" alt="hostelview"/></a>
    
            <a class="thumbnail" href="#lightbox-image-6"><img class="thumbnail-image" src="../dept-images/smit20.jpg" alt="hosteview"/></a>
    
        </div><!-- thumbnail-gallery-container -->
    </div><!--- gallery-section --->
    
    
    <!--- Lightbox overlay. Below content is hidden until :target activated --->
    
         <div class="lightbox-overlay" id="lightbox-image-1">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../dept-images/hostel1.jpg" alt="Hostel building." />
    
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
            
    
        <div class="lightbox-overlay" id="lightbox-image-2">
    
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../dept-images/smit8.jpg" alt="Hostel bedroom view" />
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-1"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-3">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../dept-images/smit9.jpg" alt="Hostel view" />
                
          <p class="lightbox-navigation"><a class="back" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-4">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../dept-images/hostel_room.jpg" alt="Hostel view" />
                
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-5">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../dept-images/smit14.jpg" alt="Hostel view" />
        
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-6"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-6">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../dept-images/smit20.jpg" alt="Hostel view" />
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-left"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
      </div>




<!-- OUR GALLERY SECTION END -->
<?php include "inc/footer.php";?>