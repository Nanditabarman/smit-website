<?php
$page = "student_activity_infa";
$page_name = "Student Activity Club";
require "inc/hero.php";
require "inc/navbar.php";
?>
<!-- Breadcrumb Section Begin -->


<div class="breadcrumb-about " style="background-image:linear-gradient( to right, rgba(0, 7, 53, 0.481),rgba(0, 15, 83, 0.421)),url(../image/student_club_banner.jpg);">
<div class="red-button">
                    <a>Hostel Infrastructure</a>
                </div>
</div>
<!-- Breadcrumb Section END -->
  
<!-- OUR GALLERY SECTION START -->
<!-- OUR GALLERY SECTION START -->
<div class="container gallery-section">
          <h2 class="text-center" style="font-weight: 700;">STUDENT<span style="color: #d40000;">ACTIVITY CLUB</span></h2>
          <h6 class="text-center "  style="font-weight: 600;">There are various clubs in SMIT which engages the students to build their personality and achieve a holistic growth. SMIT has a unique club named Trek Club where students engage themselves in both low altitude and high altitude trekking which includes the famous Sandakhphu and Phalut trek.</h6>
      <div id="gallery-section" class="pt-5">
        <div id="thumbnail-gallery-container">
    
            <!---- Top Row --->
    
            <a class="thumbnail" href="#lightbox-image-1"><img class="thumbnail-image" src="../image/stu-activity1.JPG" alt="Student Activity"/></a>
            
            <a class="thumbnail" href="#lightbox-image-2"><img class="thumbnail-image" src="../image/presentation.jpeg"/></a>
    
            <a class="thumbnail" href="#lightbox-image-3"><img class="thumbnail-image" src="../image/supracompetition.jpg" alt="Supra Competition"/></a>
    
        
            <!--- Bottom Row --->
    
            <a class="thumbnail" href="#lightbox-image-4"><img class="thumbnail-image" src="../image/stu-activity2.JPG" alt="Tracking Club"/></a>
    
            <a class="thumbnail" href="#lightbox-image-5"><img class="thumbnail-image" src="../image/ramp_walk.jpg" alt="Ramp Walk"/></a>
    
            <a class="thumbnail" href="#lightbox-image-6"><img class="thumbnail-image" src="../image/musical_competition.jpeg" alt="Musical Competition"/></a>
    
        </div><!-- thumbnail-gallery-container -->
    </div><!--- gallery-section --->
    
    
    <!--- Lightbox overlay. Below content is hidden until :target activated --->
    
         <div class="lightbox-overlay" id="lightbox-image-1">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/stu-activity1.JPG" alt="Student Activity." />
    
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
            
    
        <div class="lightbox-overlay" id="lightbox-image-2">
    
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/presentation.jpeg" alt="Presentatiion" />
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-1"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-3">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/supracompetition.jpg" alt="Supra Competition" />
                
          <p class="lightbox-navigation"><a class="back" href="#lightbox-image-2"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
    
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-4">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/stu-activity2.JPG" alt="Tracking Club" />
                
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-3"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-5">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
                <img class="lightbox-image" src="../image/ramp_walk.jpg" alt="Ramp Walk" />
        
    
                <p class="lightbox-navigation"><a class="back" href="#lightbox-image-4"><i class="fa-solid fa-circle-arrow-left"></i></a><a class="next" href="#lightbox-image-6"><i class="fa-solid fa-circle-arrow-right"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
    
        <div class="lightbox-overlay" id="lightbox-image-6">
            <div class="lightbox-content">
    
                <a class="close" href="#gallery-section"></a>
    
    
                <img class="lightbox-image" src="../image/musical_competition.jpeg" alt="Musical Competition" />
    
                <p class="lightbox-navigation"><a class="next" href="#lightbox-image-5"><i class="fa-solid fa-circle-arrow-left"></i></a></p>
            </div><!-- lightbox-content -->
        </div><!--- lightbox-overlay --->
      </div>




<!-- OUR GALLERY SECTION END -->
<?php include "inc/footer.php";?>