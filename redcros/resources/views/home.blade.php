@extends('layouts.main')
@section('main-container')


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(frontend/assets/img/slide/slide1.jpeg)">
          <div class="carousel-container">
            <div class="container">
              <h1 style="color: white"class="animate__animated animate__fadeInDown">Donate Blood & Save a Life</h1>
              <p class="animate__animated animate__fadeInUp">the blood you donate gives someone another chance at life.</p>
			  <a href="#" class="btn btn-success  bounceInUp"><span class="">Become donor</span></a>

			</div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/slide2.jpeg)">
          <div class="carousel-container">
            <div class="container">

			<h1 style="color: white" class="animate__animated animate__fadeInDown">Donate Blood & Save a Life</h1>
              <p class="animate__animated animate__fadeInUp">the blood you donate gives someone another chance at life.</p>
			  <a href="#" class="btn btn-success  bounceInUp"><span class="">contact us</a>

			</div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/slide3.jpg)">
          <div class="carousel-container">
            <div class="container">

			<h1 style="color: white" class="animate__animated animate__fadeInDown">Donate Blood & Save a Life</h1>
              <p class="animate__animated animate__fadeInUp">the blood you donate gives someone another chance at life.</p>
			  <a href="#" class="btn btn-success  bounceInUp"><span class="">contact us</a>

			</div>
          </div>
        </div>

      </div>

      
    </div>
  </section>
<!--start -->
  <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="" style="color:red;">
                   Online Blood Bank Management System
                </h2>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 ><i class="fas fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                        <a href="{{ url('donor') }}" class="btn btn-danger">View More</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4><i class="fas fa-medkit"></i> Need Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                        <a href="{{ url('doctors') }}" class="btn btn-danger">View More</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4><i class="fas fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                        <a href="{{ url('department') }}" class="btn btn-danger">View More</a>
                    </div>
                </div>
            </div>
			 
        </div>
        <!-- /.row -->

        
  <!--end -->
  {{-- ################### --}}
        


    {{-- ####################################### --}}
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Blood Donor Camps</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="frontend/assets/img/g1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="frontend/assets/img/g2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="frontend/assets/img/g3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="frontend/assets/img/g4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="frontend/assets/img/g5.jpg" alt="">
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="frontend/assets/img/g6.jpg" alt="">
                </a>
                </section>
    </div>

              </div>
            <!-- <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                </a>
            </div>-->
        </div> 
        <!-- /.row -->

    {{-- ####################################### --}}


   <!-- <div class="container">

        <div class="section-title">
          <h2>What is blood banking?</h2>
          <p>Blood banking is the process that takes place in the lab to make sure that donated blood, or blood products, are safe before they are used in blood transfusions and other medical procedures. Blood banking includes typing the blood for transfusion and testing for infectious diseases.</p>
        </div>

        <div class="section-title">
            <h2>Facts about blood banking</h2>
            <p>According to the American Association of Blood Banks as of 2013:

                About 36,000 units of blood are needed every day.

                The number of blood units donated is about 13.6 million a year.

                About 6.8 million volunteers are blood donors each year.

                Each unit of blood is broken down into components, such as red blood cells, plasma, cryoprecipitated AHF, and platelets. One unit of whole blood, once it's separated, may be transfused to several patients, each with different needs.

                Annually, more than 21 million blood components are transfused.
            </p>
        </div>

        <div class="section-title">
            <h2>What tests are done in blood banking?</h2>
            <p>A certain set of standard tests are done in the lab once blood is donated, including, but not limited to, the following:

                Typing: ABO group (blood type)

                Rh typing (positive or negative antigen)

                Screening for any unexpected red blood cell antibodies that may cause problems in the recipient

                Screening for current or past infections, including:

                    Hepatitis viruses B and C

                    Human immunodeficiency virus (HIV)

                    Human T-lymphotropic viruses (HTLV) I and II

                    Syphilis

                    West Nile virus

                    Chagas disease

                Irradiation to blood cells is performed to disable any T-lymphocytes present in the donated blood. (T-lymphocytes can cause a reaction when transfused, but can also cause graft-versus-host problems with repeated exposure to foreign cells.)

                Leukocyte-reduced blood has been filtered to remove the white blood cells that contain antibodies that can cause fevers in the recipient of the transfusion. (These antibodies, with repeated transfusions, may also increase a recipient's risk of reactions to subsequent transfusions.)
            </p>
          </div>


        <div class="section-title">
            <h2>What are the blood types?</h2>
            <p>According to the American Association of Blood Banks, distribution of blood types in the U.S. includes the following:

                O Rh-positive - 39%

                A Rh-positive - 31%

                B Rh-positive - 9%

                O Rh-negative - 9%

                A Rh-negative - 6%

                AB Rh-positive - 3%

                B Rh-negative - 2%

                AB Rh-negative - 1%
            </p>
          </div>

          <div class="section-title">
            <h2>What are the components of blood?</h2>
            <p>While blood, or one of its components, may be transferred, each component serves many functions, including the following:

                Red blood cells. These cells carry oxygen to the tissues in the body and are commonly used in the treatment of anemia.

                Platelets. They help the blood to clot and are used in the treatment of leukemia and other forms of cancer.

                White blood cells. These cells help to fight infection, and aid in the immune process.

                Plasma. The watery, liquid part of the blood in which the red blood cells, white blood cells, and platelets are suspended. Plasma is needed to carry the many parts of the blood through the bloodstream. Plasma serves many functions, including the following:

                    Helps to maintain blood pressure

                    Provides proteins for blood clotting

                    Balances the levels of sodium and potassium

                Cryoprecipitate AHF. The portion of the plasma that contains clotting factors that help to control bleeding.

            Albumin, immune globulins, and clotting factor concentrates may also be separated and processed for transfusions.</p>
          </div>


    </div>-->
     <!-- ======= Frequently Asked Questions Section ======= 
    {{-- <section id="faq" class="faq section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section> }}-->
      <!-- End Frequently Asked Questions Section -->
    
    {{-- ######################################## --}}

@endsection
