<?php
$page = "about-us";
$page_name = "About Us";
require "inc/hero.php";
require "inc/navbar.php";
?>

<!-- Breadcrumb Section Begin -->


<div class="breadcrumb-about " style="background-image:linear-gradient( to right, rgba(0, 7, 53, 0.481),rgba(0, 15, 83, 0.421)),url(../dept-images/smit-banner.jpg);">
<div class="red-button">
                    <a>About US</a>
                </div>
</div>
<!-- Breadcrumb Section END -->


<!-- STUDENT ACHIEVEMENTS START -->
<div class="container py-5">
        <h4 class="row ml-2">
            <div class="red-line mt-3 mr-3"></div> ABOUT US
        </h4>
        <div class="row align-items-center justify-content-center">
            <!-- Left Column -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-3 about-us" data-aos="fade-left">
                <h2 class="font-size-25 pb-3 pt-3" style="font-weight: 700;">
                    SMIT <span style="color: #d40000;">A TOP-RANKED INSTITUTE</span>
                </h2>
                <img src="https://images.shiksha.com/mediadata/images/1678358628phpTUHbll.jpeg" class="images">
                <div class="contents">
                    <div class="row text-center">
                        <div class="col mb-4">
                            <h4 style="font-weight: 800; color: red; font-size:27px">6+ Crores</h4>
                            <h6 style="font-weight: 700; color: #08041e;">Scholarship</h6>
                        </div>
                        <div class="col mb-4">
                            <h4 style="font-weight: 800; color: red; font-size:27px">50+</h4>
                            <h6 style="font-weight: 700; color: #08041e;">Funded Projects</h6>
                        </div>
                        <div class="col mb-4">
                            <h4 style="font-weight: 800; color: red; font-size:27px">95%</h4>
                            <h6 style="font-weight: 700; color: #08041e;">Placement</h6>
                        </div>
                    </div>
                </div>
            </div>
  

            <!-- Right Column -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-3" data-aos="fade-right">
    <p style="font-size: medium;">
        Sikkim Manipal Institute of Technology was established with the fundamental objective of strengthening the connection between education and skill development. The primary goal is to empower the youth of Sikkim, making them educated, skilled, and employable. This, in turn, equips them with the ability to explore diverse opportunities both within and outside the state, ultimately addressing the issue of growing unemployment in the region.
    </p>
    <p style="font-size: medium;">
        Founded in 1995, Sikkim Manipal Institute of Technology represents a pioneering government-private initiative in the area. Recognized by the University Grants Commission and approved by the Government of India, SMU stands as the first-ever Public-Private Partnership (PPP) in the country for higher education and healthcare services.
    </p>
    <p style="font-size: medium;">
        Sikkim Manipal Institute of Technology is dedicated to providing quality education to students from the North and Northeastern parts of India while also delivering state-of-the-art healthcare facilities at affordable costs to the people of Sikkim. Throughout its existence, the university has achieved significant milestones, with plans to expand its educational campus to new horizons.
    </p>
  
</div>
</div>


<!-- Expanded Last Paragraph (Not on the right side) -->
<div class="col-12 pb-3" data-aos="fade-up">
    <p style="font-size: medium;">
    The highly qualified, competent, and dedicated faculty members of SMU play a pivotal role in the university's success. Committed to ensuring that graduating students are well-prepared to face the challenges of their chosen professions in a competitive world, the university contributes significantly to the nation's talent pool. Noteworthy features include transparent procedures, merit-based intake criteria, and ongoing efforts to provide the best facilities for its students.
    </p>
</div>
    <div class="col-12 pb-3" data-aos="fade-up">
        <p style="font-size: medium;">
        In conclusion, Sikkim Manipal Institute of Technology continues to evolve and adapt to the dynamic educational landscape, striving to offer the best possible learning experience to its students. By maintaining high standards, fostering innovation, and staying committed to the holistic development of individuals, the university remains a beacon of quality education and skill development in the region.
        </p>
</div>
</div>

    <div class="container py-5">
    <h2 class="font-size-25 pb-3 pt-3" style="font-weight: 700;">
      THINK <span style="color: #d40000;"> PLACEMENTS</span>
                </h2>
                <?php include "inc/placement.php";?>
  </div>

<!-- STUDENT ACHIEVEMENTS END -->

<?php include "inc/footer.php";?>