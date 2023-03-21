<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"/>
</head>
<body>
    <main>
      <!-- navbar -->
      <nav  class="navbar navbar-expand-md  navbar-dark fixed-top ">
        <div class="container-fluid d w-100">
          <img src="images/britia logo (1).png"  class="me-4 rounded-pill" alt="pic" height="50px" width="50px">
          <a href="javascript:void(0)" class="navbar-brand " style=" font-weight: bold;">BIRITRI</a>
          <button  class="navbar-toggler"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapsibleNavbar"  >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
                  <ul class="navbar-nav text-center  ">
                  <li class="nav-item  mx-3">
                    <a href="#home" class="nav-link  active">home</a>
                  </li>
                  <li class="nav-item mx-3 ">
                    <a href="#info" class="nav-link ">information</a>
                  </li>
                  <li class="nav-item  mx-3">
                    <a class="nav-link " href="#service" >Our Service</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a href="#submit" class="nav-link ">product</a>
                  </li>
                  <li class="nav-item mx-3"><a href="#aboutus" class="nav-link ">AboutUs</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- home-page -->
      <section id="home" class="home container-fluid  d-flex flex-wrap justify-content-center justify-content-md-end w-100 ">
          <video autoplay muted loop class="back-video">
            <source src="images/pexels-c-technical-6502636.mp4">
          </video>
        <!-- home-contect -->
            <div class="home-content p-3 ">
                <div class="home-item p-4 mx-auto">
                <h3 class="header-text">Biritia Consulting</h3>
                <span class="home-text ">Attract a larger volume of patients to your clinic today!</span>
                <p class="home-prag pt-2">Transform your dental clinic into a thriving practice with our proven marketing strategies that attract and 
                    retain new patients at lightning-fast speeds.</p>
                <button class="btn  home-btn  btn-lg shadow w-100 mt-4"> <a href="" class="btnn-item">Book a Consult</a> </button>  
            </div>
            </div>
    </section>
    <!-- info-page -->
    <section class="container-fluid  info-page" id="info"> 
    <div class=" d-flex  justify-content-evenly flex-wrap-reverse">  
      <div class="col-md-5 col-12  info-item">
        <div class="container">
             <h3 class="header-text info-text">We have the ability to boost your clinic's profits!</h3>
             <p>
                Welcome to our dental clinic consulting service. We specialize in helping dentists and practices achieve growth and success. We work collaboratively to understand your unique needs and develop a customized plan to help you achieve your goals.
                 Book your meeting with us today to take your practice to the next level.</p>
        </div>
      </div>
      <div class=" col-md-4 col-12 info-item ">
        <img src="images/meeting.png" alt="" width="100%" height="80%" class="mt-4">
      </div>

      </div>
    </section>
    <!-- service-page -->
        <section id="service" class="container-fluid  service-page w-100"> 
    <div class=" row flex-wrap justify-content-between ">  
      <div class="col-md-6 col-12  header d-flex flex-column justify-content-center align-items-center">
             <h1 class="service-text">OUR SERVICES</h1>
             <p>to boost your clinic's profits</p>
      </div>
        <div class=" col-md-6  col-12 service-item-2 d-flex flex-column align-items-center ">
          <ul class="service-content list-group mt-5">
            <li class="list-group-item my-4">GET MORE PATIENTS</li>
            <li class="list-group-item my-4">PATIENT RETENTION</li>
            <li class="list-group-item my-4">MAKE YOUR CLINIC EASY TO FIND</li>
            <li class="list-group-item my-4">COMMERCIAL GROWTH</li>
            <li class="list-group-item my-4">MARKETING STRATEGIES</li>
            <li class="list-group-item my-4">STAND OUT FROM COMPETITORS</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- submit-form -->
    <section id="submit" class="container-fluid pb-4 submit-page info-page w-100"> 
      <div>
        <img src="images/mm.png" alt="" class="img-logo">
      </div>
      <div class=" d-flex flex-wrap-reverse justify-content-evenly  ">  
        <div class="col-md-5 col-12  mt-5 service-header d-flex flex-column  text-center">
               <h3 class="submit-text">Schedule a Consultation for FREE!</h3>
              <form action="insert.php" method="post" class="was-validated w-75 position-relative mx-auto">
                <p>
                   <label for="ClinicName" class="form-label">Clinic Name:</label>
                  <input type="text" minlength="3" name="Clinic_Name" id="ClinicName" class="form-control" required>
                </p>
                <p>
                   <label for="ClinicAdress" class="form-label">Clinic Adress:</label>
                  <input type="text" minlength="3" name="Clinic_Adress" id="ClinicAdress" class="form-control" required>
                </p>
                <p>
                   <label for="ContactName" class="form-label">Contact Name:</label>
                  <input type="text" minlength="3" name="Contact_Name" id="ContactName" class="form-control" required>
                </p>
                <p>
                   <label for="ContactEmail" class="form-label">Contact Email:</label>
                  <input type="email"  name="Contact_Email" id="ContactEmail" class="form-control" required>
                </p>
                <p>
                   <label for="YourDesiredService" class="form-label">Your Desired Service:</label>
                  <input type="text" minlength="3" name="Your_Desired_Service" id="YourDesiredService" class="form-control" >
                </p>
                <p>
                   <label for="ClinicsOnlinePresence" class="form-label">Clinics Online Presence:</label>
                  <input type="text" minlength="3" name="Clinics_Online_Presence" id="ClinicsOnlinePresence" class="form-control" >
                </p>
                <input type="submit" value="Submit" class="form-btn  p-1">
                <p class="arrow-item"><i class="fas fa-arrow-right arrow" style="color: #7889a5;"></i></p>
             </form> 
        </div>
        <div class=" col-md-4 col-12 submit-item">
          <img src="images/meeting.png" alt="" width="100%" height="70%" class="mt-4">
        </div>
        </div>
      </section>
      <!-- ////////////// ABOUT US ////////////////////////////// -->
      <section id="aboutus" class="container-fluid  about-page w-100"> 
        <div class=" row flex-wrap  ">  
          <div class="col-md-6  col-12 header d-flex  justify-content-center align-items-center">
                 <h1 class="service-text">About us!</h1>
          </div>
            <div class=" col-md-6  col-12 about-img about-img-1">
            </div>
        </div>
        <div class=" row flex-wrap-reverse about-item">  
            <div class=" col-md-6 col-12 about-img about-img-2">
            </div>
            <div class="col-md-4 col-12 mx-auto ">
              <div class="container pt-5">
                  <p>
                    Welcome to our consulting company, where we specialize
                    in helping dentist clinics increase their profits. Our
                    experienced team provides customized solutions in
                    finance, marketing, operations, and management to
                    maximize revenue potential and improve overall business
                    performance.</p>
                    <p>
                      Whether you're a small private practice or a large dental
                      group, we work closely with you to identify growth
                      opportunities and develop a comprehensive action plan.
                      Book your meeting with us today to take your practice to
                      the next level!  </p>
              </div>
          </div>
        </div>
        </section>
        </main>
        <!-- ******************* FOOTER ************************ -->
        <footer class="footer border-top-1">
        
          <div class="container-fluid py-5 text-white text-center row flex-wrap-reverse justify-content-center justify-content-between">
            <div class="col-md-3 col-12 my-auto">
              <h5>We have the ability to boost your
                clinic's profits!</h5>
            </div>
            <div class="d-flex flex-column col-md-3 col-12 my-2 ">
              <p>You can reach us at:</p>
              <p>biritia.consulting@gmail.com</p>
              <ul class="d-flex nav mx-auto social-item">
                <li class="nav-item"><a class="nav-link " href=""><i class="fab fa-facebook-f" ></i></a></li>
                <li class="nav-item"><a class="nav-link " href=""><i class="fab fa-linkedin-in" ></i></a></li>
                <li class="nav-item"><a class="nav-link " href=""><i class="fab fa-instagram" ></i></a></li>
                <li class="nav-item"><a class="nav-link " href=""><i class="fab fa-twitter" ></i></a></li>
              </ul>
            </div>
            <div class="col-md-3 col-12 my-auto">
              <img src="images/britia logo (1).png" width="150px" height="100px" alt="">
            </div>
            
          </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>