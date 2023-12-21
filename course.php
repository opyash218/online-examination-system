 <?php
require('header.php');
?>
<head>
	<style type="text/css">
		.card-custom {
  overflow: hidden;
  min-height: 400px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}

	</style>
</head>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
    

        <div class="d-flex justify-content-between align-items-center">
     
          <h2>Our Courses</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Course</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->    
<body>
  <div class="container">
    <div class="row pt-5 m-auto">
      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="assets/img/c++.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">C++</h4>
            <p class="card-text">C++ programs are directly compiled into machine-executable codes which consumes less time to execute the code. Hence, it is widely used in competitive programming where you are expected to optimise time and memory. So, if you are interested to explore competitive programming then it is good to start with C++ language</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="course_details.php" class="btn btn-primary">Enrol Now</a>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
            <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="assets/img/javalogo.png " alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">java</h4>
            <p class="card-text">Java programs are easy to understand, structured and less prone to errors. Also, they are platform independent and portable which makes it a good choice for mobile, web and desktop applications. So, if you are looking for a career in software development then it is good to start with the Java language
              <br>
              
            </p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="coursecard2.php" class="btn btn-primary">Enrol Now</a>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
            <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src=" assets/img/pythonlogo.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">python</h4>
            <p class="card-text">Python programs are simple in syntax with extensive library support which helps the programmers to come up with required logic with few lines of code. It is popular and widely used in the data domains So, if you are looking for a career in the field of Artificial Intelligence then it is good to start with the Python language
              <br>
            </p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="coursecard3.php" class="btn btn-primary">Enrol Now</a>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
    </div>
<!-- 
2nd Row Started in Hear
 -->
 <div class="row pt-5 m-auto">
      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Bootstrap</h4>
            <p class="card-text">Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="coursecard3.php" class="btn btn-primary">Enrol Now</a>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
            <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src=" assets/img/HTML5_logo.png" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">HTML</h4>
            <p class="card-text">The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript..</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="coursecard3.php" class="btn btn-primary">Enrol Now</a>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
            <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src=" assets/img/CSS3_logo.png" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">CSS</h4>
            <p class="card-text">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="coursecard3.php" class="btn btn-primary">Enrol Now</a>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
          </div>
        </div>
        <!-- Copy until here -->

      </div>
    </div>
  </div>

</body>
    </main>  
<?php
require('footer.php');
?>       