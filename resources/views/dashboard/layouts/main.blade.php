<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- link style css --}}
   <link rel="stylesheet" href="css/style.css">
   {{-- Font awesome --}}
   <script src="https://kit.fontawesome.com/5c2c5b6638.js" crossorigin="anonymous"></script>
   {{-- Link Bootstrap css--}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   {{-- font google --}}
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">

   <script src="js/script.js"></script>

   <title>Home</title>
</head>
<body>



<div class="d-flex" id="wrapper">
   <div class="sidebar px-3 pt-5" id="sidebar-wrapper">
      <div class="list-group">
         <div class="px-2 pt-2">
            <div class="py-5">
               <label class="" >MAIN OVERVIEW</label>
               <a href="#home" class=""><i class="fa-solid fa-user"></i>  Account</a>
               <a href="#services"><i class="fa-solid fa-basket-shopping"></i> Expenses</a>
            </div>
            <div class="py-2">
               <label class="">MANAGE EXPENSE</label>
               <a href="#contact"><i class="fa-solid fa-cube"></i> Budgets</a>
               <a href="#contact"><i class="fa-solid fa-screwdriver-wrench"></i> User</a>
               <a href="#contact"><i class="fa-sharp fa-solid fa-file-lines"></i> Approval</a>
            </div>
         </div>
   
         <div class="contact_us d-flex flex-column pt-4">
            <i class="fa-solid fa-gem"></i>
            <p class="text-white pt-3 d-flex flex-column">Need help?
   
               <span class="text-white" style="font-size: 0.7em">Please contact us</span>
            </p>
            <button class="btn btn-outline-light btn_contact">CONTACT US</button>
         </div>
      </div>
    </div>
   <div id="page-content-wrapper">
      <header>
         <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand text-center border-bottom" href="#">
               <img src="image/logo.png" class="img-fluid" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between align-items-center ms-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center ms-5 flex-row">
                  <li class="nav-item">
                    <div class="d-flex flex-column p-0 ">
                       <a class="nav-link p-0" aria-current="page" href="#" style="font-size: 0.8em"><i class="fa-solid fa-store"></i>/account</a>
                       <a class="nav-link p-0" aria-current="page" href="#" style="font-size:0.8em">account</a>
                    </div>             
                  </li>
                  <li class="nav-item ms-5">
                    <button class="btn_sidebarToggle "><i class="fa-solid fa-bars" id="sidebarToggle"></i></button>
                  </li>
                </ul>
                <ul class="navbar-nav px-2">
                  <li class="nav-item">
                     <a href="#" class="nav-link">Welcome, Users <i class="fa fa-user ms-1"></i></a>
   
                  </li>
                </ul>
   
              </div>
            </div>
          </nav>
      </header>
   

   
       <div class="main"> 
   
         @yield('konten')
   
      </div>
      {{-- <div class="container">
      @yield('konten')
     </div> --}}
   
      <footer class="footer">
         <section class="   text-center justify-content-center p-4">
            <div class="col-md d-flex flex-row">
              <p>Copyright &copy; 2022</p>
              <div class="ms-auto d-flex flex-row ">
                 <p class="px-2">BlackCode Team</p>
                 <p class="px-2">About Us</p>
                 <p class="px-2">Blog</p>
                 <p class="px-2">License</p>
              </div>
            </div>
         </section>
      </footer>
   </div>
</div>



   
   

   


{{-- link bootstrap javascript --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
{{-- link bootstrap javascript --}}


<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
   {{-- chart --}}
   <script src="js/chart-pie.js"></script>


</body>
</html>