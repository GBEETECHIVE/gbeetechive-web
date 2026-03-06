 @extends('layouts.app')

 @section('content')



         <!-- Breadcrumbs Start -->
         <div class="rs-breadcrumbs img2">
             <div class="breadcrumbs-inner text-center">
                 <h1 class="page-title">Recent Projects</h1>
                 <ul>
                     <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                         <a class="active" href="index.html">Home</a>
                     </li>
                     <li title="Go To Services">
                         <a class="active" href="index.html">Services</a>
                     </li>
                     <li>Recent Projects</li>
                 </ul>
             </div>
         </div>
         <!-- Breadcrumbs End -->


         <!-- Recent Projects Section Start -->
         <div class="recent-projects-area pt-120 pb-120 md-pt-80 md-pb-80">
           <div class="container">
             <div class="recent-projects-box mb-40">
               <div class="text-center mb-30">
                 <h2 class="recent-projects-heading mb-10">Look At Some Of Our <span>Recent Projects</span></h2>
                 <p class="recent-projects-subtitle mb-0">
                   explore gbtechieve’s project portfolio—delivering impactful digital solutions across education,
                   governance, and enterprise in gilgit-baltistan and beyond.
                 </p>
               </div>

               <ul class="nav nav-pills justify-content-center recent-projects-tabs" id="recent-project-tabs"
                 role="tablist">
                 <li class="nav-item" role="presentation">
                   <a class="nav-link active" id="uiux-tab" data-toggle="pill" href="#uiux" role="tab"
                     aria-controls="uiux" aria-selected="true">UI/UX</a>
                 </li>
                 <li class="nav-item" role="presentation">
                   <a class="nav-link" id="graphic-tab" data-toggle="pill" href="#graphic" role="tab"
                     aria-controls="graphic" aria-selected="false">Graphic Design</a>
                 </li>
                 <li class="nav-item" role="presentation">
                   <a class="nav-link" id="web-tab" data-toggle="pill" href="#web" role="tab"
                     aria-controls="web" aria-selected="false">Web Development</a>
                 </li>
                 <li class="nav-item" role="presentation">
                   <a class="nav-link" id="billing-tab" data-toggle="pill" href="#billing" role="tab"
                     aria-controls="billing" aria-selected="false">Medical Billing</a>
                 </li>
                 <li class="nav-item" role="presentation">
                   <a class="nav-link" id="docs-tab" data-toggle="pill" href="#docs" role="tab"
                     aria-controls="docs" aria-selected="false">Medical Documentation</a>
                 </li>
                 <li class="nav-item" role="presentation">
                   <a class="nav-link" id="marketing-tab" data-toggle="pill" href="#marketing" role="tab"
                     aria-controls="marketing" aria-selected="false">Digital Marketing</a>
                 </li>
               </ul>
             </div>

             <div class="tab-content" id="recent-projects-tab-content">
               <div class="tab-pane fade show active" id="uiux" role="tabpanel" aria-labelledby="uiux-tab">
                 <div class="recent-project-card">
                   <div class="row align-items-center">
                     <div class="col-lg-5 md-mb-30">
                       <h3 class="recent-project-title">Ibn Sina Foundation<br>Website</h3>
                       <p class="recent-project-desc">
                         designed a custom content management system (cms) for ibn e sina to manage
                         healthcare content, staff records, patient updates, and internal documentation
                         efficiently.
                       </p>
                       <a class="recent-project-btn" href="{{ route('contact') }}">
                         Explore More about
                         <span><i class="fa fa-arrow-right"></i></span>
                       </a>
                     </div>
                     <div class="col-lg-7">
                       <div class="recent-project-carousel owl-carousel" data-project-carousel>
                         <div class="project-image-slide">
                           <img src="images/1_1.jpg" alt="UI UX project image 1">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/2_1.jpg" alt="UI UX project image 2">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/3_1.jpg" alt="UI UX project image 3">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="tab-pane fade" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
                 <div class="recent-project-card">
                   <div class="row align-items-center">
                     <div class="col-lg-5 md-mb-30">
                       <h3 class="recent-project-title">Brand Identity &<br>Creative Assets</h3>
                       <p class="recent-project-desc">
                         delivered complete visual branding, social media creatives, and print-ready assets
                         for organizations looking to build a clear and consistent market identity.
                       </p>
                       <a class="recent-project-btn" href="{{ route('contact') }}">
                         Explore More about
                         <span><i class="fa fa-arrow-right"></i></span>
                       </a>
                     </div>
                     <div class="col-lg-7">
                       <div class="recent-project-carousel owl-carousel" data-project-carousel>
                         <div class="project-image-slide">
                           <img src="images/4_1.jpg" alt="Graphic design image 1">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/5.jpg" alt="Graphic design image 2">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/6.jpg" alt="Graphic design image 3">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web-tab">
                 <div class="recent-project-card">
                   <div class="row align-items-center">
                     <div class="col-lg-5 md-mb-30">
                       <h3 class="recent-project-title">Enterprise Web<br>Portals</h3>
                       <p class="recent-project-desc">
                         built responsive and scalable portals for educational institutes and organizations
                         with secure dashboards, role-based access, and content workflows.
                       </p>
                       <a class="recent-project-btn" href="{{ route('web_development') }}">
                         Explore More about
                         <span><i class="fa fa-arrow-right"></i></span>
                       </a>
                     </div>
                     <div class="col-lg-7">
                       <div class="recent-project-carousel owl-carousel" data-project-carousel>
                         <div class="project-image-slide">
                           <img src="images/1_2.jpg" alt="Web development image 1">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/2_2.jpg" alt="Web development image 2">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/3_2.jpg" alt="Web development image 3">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
                 <div class="recent-project-card">
                   <div class="row align-items-center">
                     <div class="col-lg-5 md-mb-30">
                       <h3 class="recent-project-title">Medical Billing<br>Automation</h3>
                       <p class="recent-project-desc">
                         implemented billing workflows for healthcare teams to reduce processing time,
                         improve claim tracking, and maintain accurate financial reporting.
                       </p>
                       <a class="recent-project-btn" href="{{ route('contact') }}">
                         Explore More about
                         <span><i class="fa fa-arrow-right"></i></span>
                       </a>
                     </div>
                     <div class="col-lg-7">
                       <div class="recent-project-carousel owl-carousel" data-project-carousel>
                         <div class="project-image-slide">
                           <img src="images/4_2.jpg" alt="Medical billing image 1">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/2_3.jpg" alt="Medical billing image 2">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/3_3.jpg" alt="Medical billing image 3">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="tab-pane fade" id="docs" role="tabpanel" aria-labelledby="docs-tab">
                 <div class="recent-project-card">
                   <div class="row align-items-center">
                     <div class="col-lg-5 md-mb-30">
                       <h3 class="recent-project-title">Clinical Records &<br>Documentation</h3>
                       <p class="recent-project-desc">
                         structured digital documentation modules for patient history, treatment records,
                         and compliance-ready audit trails in healthcare environments.
                       </p>
                       <a class="recent-project-btn" href="{{ route('contact') }}">
                         Explore More about
                         <span><i class="fa fa-arrow-right"></i></span>
                       </a>
                     </div>
                     <div class="col-lg-7">
                       <div class="recent-project-carousel owl-carousel" data-project-carousel>
                         <div class="project-image-slide">
                           <img src="images/1_3.jpg" alt="Medical documentation image 1">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/2_4.jpg" alt="Medical documentation image 2">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/1_4.jpg" alt="Medical documentation image 3">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                 <div class="recent-project-card">
                   <div class="row align-items-center">
                     <div class="col-lg-5 md-mb-30">
                       <h3 class="recent-project-title">Digital Campaign<br>Growth</h3>
                       <p class="recent-project-desc">
                         launched targeted digital marketing campaigns with measurable lead generation,
                         engagement growth, and conversion-focused landing pages.
                       </p>
                       <a class="recent-project-btn" href="{{ route('contact') }}">
                         Explore More about
                         <span><i class="fa fa-arrow-right"></i></span>
                       </a>
                     </div>
                     <div class="col-lg-7">
                       <div class="recent-project-carousel owl-carousel" data-project-carousel>
                         <div class="project-image-slide">
                           <img src="images/3_2.jpg" alt="Digital marketing image 1">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/5_1.jpg" alt="Digital marketing image 2">
                         </div>
                         <div class="project-image-slide">
                           <img src="images/6_1.jpg" alt="Digital marketing image 3">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- Recent Projects Section End -->

         <style>
           .recent-projects-box,
           .recent-project-card {
                 border: 1px dashed #4e95ed;
             padding: 28px;
             border-radius: 6px;
             background: #fff;
           }

           .recent-projects-heading {
             font-size: 46px;
             line-height: 1.2;
             color: #121212;
             font-weight: 700;
           }

           .recent-projects-heading span {
                 color: #03228f;
           }

           .recent-projects-subtitle {
             max-width: 760px;
             margin: 0 auto;
           }

           .recent-projects-tabs .nav-item {
             margin: 0 6px 10px;
           }

           .recent-projects-tabs .nav-link {
             border-radius: 30px;
             background: #f4f4f4;
             color: #111;
             padding: 8px 20px;
             font-weight: 500;
           }

           .recent-projects-tabs .nav-link.active,
           .recent-projects-tabs .nav-link:hover {
                 background-image: linear-gradient(250deg, #4e95ed 19%, #03228f 100%);
             color: #fff;
           }

           .recent-project-title {
             font-size: 52px;
             line-height: 1.08;
             margin-bottom: 18px;
           }

           .recent-project-desc {
             font-size: 28px;
             line-height: 1.55;
             color: #555;
             margin-bottom: 24px;
             text-transform: lowercase;
           }

           .recent-project-btn {
             display: inline-flex;
             align-items: center;
             justify-content: space-between;
             min-width: 280px;
                 background-image: linear-gradient(250deg, #4e95ed 19%, #03228f 100%);
             color: #fff;
             padding: 9px 10px 9px 24px;
             border-radius: 40px;
             font-size: 25px;
             font-weight: 600;
           }

           .recent-project-btn span {
             width: 44px;
             height: 44px;
             border: 2px solid #fff;
             border-radius: 50%;
             display: inline-flex;
             align-items: center;
             justify-content: center;
             margin-left: 16px;
             font-size: 17px;
           }

           .recent-project-btn:hover {
                 background-image: linear-gradient(180deg, #03228f 19%, #4e95ed 100%);
             color: #fff;
           }

           .project-image-slide img {
             width: 100%;
             border-radius: 8px;
           }

           .recent-project-carousel .owl-dots {
               display: flex;
               justify-content: center;
               align-items: center;
               margin-top: 18px;
               width: 100%;
               position: relative;
               left: 50%;
               transform: translateX(-50%);
           }

           .recent-project-carousel .owl-dot span {
             width: 9px;
             height: 9px;
             margin: 0 4px;
             background: #ddd;
             display: block;
             border-radius: 50%;
           }

           .recent-project-carousel .owl-dot.active span {
                 background: #106eea;
           }

           @media (max-width: 991px) {
             .recent-projects-heading {
               font-size: 34px;
             }

             .recent-project-title {
               font-size: 36px;
             }

             .recent-project-desc {
               font-size: 18px;
             }

             .recent-project-btn {
               min-width: 240px;
               font-size: 18px;
             }
           }

           @media (max-width: 575px) {

             .recent-projects-box,
             .recent-project-card {
               padding: 20px 15px;
             }

             .recent-projects-heading {
               font-size: 28px;
             }

             .recent-project-title {
               font-size: 30px;
             }
           }
         </style>

         <script>
           document.addEventListener('DOMContentLoaded', function() {
             if (!window.jQuery || !jQuery.fn.owlCarousel) {
               return;
             }

             function initProjectCarousel(carouselElement) {
               var $carousel = jQuery(carouselElement);

               if ($carousel.hasClass('owl-loaded')) {
                 $carousel.trigger('refresh.owl.carousel');
                 return;
               }

               $carousel.owlCarousel({
                 loop: true,
                 items: 1,
                 margin: 0,
                 autoplay: true,
                 autoplayTimeout: 4000,
                 smartSpeed: 700,
                 dots: true,
                 nav: false,
                 animateOut: 'fadeOut',
                 mouseDrag: true,
                 touchDrag: true
               });
             }

             jQuery('[data-project-carousel]').each(function() {
               if (jQuery(this).closest('.tab-pane').hasClass('active')) {
                 initProjectCarousel(this);
               }
             });

             jQuery('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
               var targetPane = jQuery(jQuery(e.target).attr('href'));
               targetPane.find('[data-project-carousel]').each(function() {
                 initProjectCarousel(this);
               });
             });
           });
         </script>

@endsection