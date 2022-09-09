@extends('dashboard.layouts.main')

@section('konten')

<div class="container">
    <div class="row mt-5 pt-5 justify-content-center"> 
        <div class="col-md main_menu d-flex flex-column py-2 ">
            <div class="row justify-content-center"> 
                {{-- debit card --}}
                <div class="col-md debit_card d-flex flex-column ms-2 mt-2 py-2">
                    <i class="fa-solid fa-wifi text-white p-2"></i>
                    <p class="text-white pt-3 mt-4">4562 1122 4594 7852</p>
                    <div class="d-flex flex-row align-items-end justify-content-between">
                        <div class="d-flex flex-column p-0">
                            <span class="p-0" style="font-size:0.8em;color:rgb(237, 237, 237)">Card Holder</span>
                            <p class="p-0 text-white">Khairul Kanters</p>
                        </div>
                        <div class="d-flex flex-column px-2">
                            <span class="p-0" style="font-size:0.8em;color:rgb(237, 237, 237)">Expires</span>
                            <p class="p-0 text-white">11/22</p>
                        </div>
                        <div class="d-flex flex-column px-2">
                            <img src="image/mastercard.png" class="img-fluid" style="width:5em" alt="">
                        </div>
                    </div>
                 </div>
                 {{-- end debit card --}}

                 {{-- your limit --}}
                <div class="col-md y_limit d-flex flex-row align-items-center mt-2 py-2 ms-2 justify-content-center shadow-sm">
                    <div class=" d-flex flex-column text-center">
                        <i class="fa-solid fa-credit-card" style="font-size: 3rem;color:#b416a8;"></i>
                        <p class="p-0">Your Limit</p>
                        <span class="p-0" style="font-size: 0.6em">Belong to you superior</span>
                        <hr>
                        <h6>$2000</h6>
                    </div>
                </div>
                {{-- end your limit --}}

                {{-- total expenses --}}
                <div class="col-md t_expenses d-flex flex-row align-items-center mt-2 py-2 ms-2 justify-content-center shadow-sm">
                    <div class=" d-flex flex-column text-center">
                        <i class="a-sharp fa-solid fa-cart-shopping" style="font-size: 3rem;color:#b416a8"></i>
                        <p class="p-0">Your Limit</p>
                        <span class="p-0" style="font-size: 0.6em">Belong to you superior</span>
                        <hr>
                        <h6>$2000</h6>
                    </div>
                </div>
                {{-- end total expenses --}}
            </div>

            {{-- graphics --}}
            <div class="graphic d-flex flex-column mt-3 p-2 ">
                <div class="d-flex flex-row">

                    <div class="p-3">
                        <i class="a-sharp fa-solid fa-cart-shopping" style="font-size: 2em;color:#b416a8"></i>
                    </div>
                    <div class="p-2 d-flex flex-column">
                        <span>Expenses This Month</span>
                        <span>455</span>
    
                    </div>
                    <div class="p-2 ms-auto">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-label="Default striped example" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card chart-container">
                    <canvas id="chart"></canvas>
                  </div>
           

            </div>
            {{-- end graphics --}}


            {{-- your budget --}}
            <div class="y_budget d-flex flex-column mt-3">
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <p>Your Budget</p>
                    </div>
                    <div class="p-2 ms-auto"> 
                        <button class="btn btn-outline-light req_btn">+Request Now</button>
                    </div>
                </div>
                <div class="d-flex flex-column mb-3 px-2 mt-2">
                    {{-- y_budget_card --}}
                    <div class="row">
                        <div class="col-md py-2">
                            <div class="y_budget_card  shadow d-flex flex-column px-2">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <img src="image/img_meal.jpg" class="img-fluid" style="width:3em" alt="">
                                    </div>
                                    <div class="d-flex flex-column py-3 ms-auto">
                                        <div class="d-flex flex-row">
                                            <p style="font-size: 0.6em; font-weight:800">Meat & Meal</p>
                                            <a href=""><i class="fa-solid fa-ellipsis-vertical text-black ms-3"></i></a>
                                        </div>
                                        <div class="">
                                            <img src="" alt="">
                                        </div>
        
                                    </div>
                                </div>
                                <div class="d-flex flex-column px-2 mb-2"> 
                                    <span style="font-size: 0.7em">department : sales</span>
                                    <span style="font-size: 0.7em">category : meal</span>
                                    <span style="font-size: 0.7em">limit : Rp. 1.000.000</span>
                                    <span style="font-size: 0.7em">budget used : Rp. 800.000</span>
                                    <div class="d-flex flex-row">
                                        <div class="d-flex flex-column">
                                            <span style="font-size: 0.7em">5</span>
                                            <span style="font-size: 0.7em">Members</span>
                                        </div>
                                        <div class="d-flex flex-column ms-auto text-end">
                                            <span style="font-size: 0.7em">02.03.22</span>
                                            <span style="font-size: 0.7em">Expired Date</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md py-2">
                            <div class="y_budget_card  shadow d-flex flex-column px-2">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <img src="image/img_meal.jpg" class="img-fluid" style="width:3em" alt="">
                                    </div>
                                    <div class="d-flex flex-column py-3  ms-auto">
                                        <div class="d-flex flex-row">
                                            <p style="font-size: 0.6em; font-weight:800">Meat & Meal</p>
                                            <a href=""><i class="fa-solid fa-ellipsis-vertical text-black ms-3"></i></a>
                                        </div>
                                        <div class="">
                                            <img src="" alt="">
                                        </div>
        
                                    </div>
                                </div>
                                <div class="d-flex flex-column px-2 mb-2"> 
                                    <span style="font-size: 0.7em">department : sales</span>
                                    <span style="font-size: 0.7em">category : meal</span>
                                    <span style="font-size: 0.7em">limit : Rp. 1.000.000</span>
                                    <span style="font-size: 0.7em">budget used : Rp. 800.000</span>
                                    <div class="d-flex flex-row">
                                        <div class="d-flex flex-column">
                                            <span style="font-size: 0.7em">5</span>
                                            <span style="font-size: 0.7em">Members</span>
                                        </div>
                                        <div class="d-flex flex-column ms-auto text-end">
                                            <span style="font-size: 0.7em">02.03.22</span>
                                            <span style="font-size: 0.7em">Expired Date</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md py-2">
                            <div class="y_budget_card  shadow d-flex flex-column px-2">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <img src="image/img_meal.jpg" class="img-fluid" style="width:3em" alt="">
                                    </div>
                                    <div class="d-flex flex-column py-3 ms-auto">
                                        <div class="d-flex flex-row">
                                            <p style="font-size: 0.6em; font-weight:800">Meat & Meal</p>
                                            <a href=""><i class="fa-solid fa-ellipsis-vertical text-black ms-3"></i></a>
                                        </div>
                                        <div class="">
                                            <img src="" alt="">
                                        </div>
        
                                    </div>
                                </div>
                                <div class="d-flex flex-column px-2 mb-2"> 
                                    <span style="font-size: 0.7em">department : sales</span>
                                    <span style="font-size: 0.7em">category : meal</span>
                                    <span style="font-size: 0.7em">limit : Rp. 1.000.000</span>
                                    <span style="font-size: 0.7em">budget used : Rp. 800.000</span>
                                    <div class="d-flex flex-row">
                                        <div class="d-flex flex-column">
                                            <span style="font-size: 0.7em">5</span>
                                            <span style="font-size: 0.7em">Members</span>
                                        </div>
                                        <div class="d-flex flex-column ms-auto text-end">
                                            <span style="font-size: 0.7em">02.03.22</span>
                                            <span style="font-size: 0.7em">Expired Date</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                  
                    {{-- end of y_budget_card --}}
                </div>
            </div>
            {{-- end your budget --}}
       


        </div>
        <div class=" col-md quick py-2 mt-2">
            <div class="quick_access shadow bg-white  px-3">
                <h6>Quick Access</h6>
                <div class="d-flex flex-row justify-content-between">
                    <div class="  quick_access_card  d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-briefcase text-white mt-3"></i>
                        <p class="text-white" style="font-size: 0.6em">Expenses</p>
                    </div>
              
                    <div class="  quick_access_card ms-2 d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-briefcase text-white mt-3"></i>
                        <p class="text-white" style="font-size: 0.6em">Expenses</p>
                    </div>
              
                    <div class="  quick_access_card ms-2 d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-briefcase text-white mt-3"></i>
                        <p class="text-white" style="font-size: 0.6em">Expenses</p>
                    </div>
                    <div class="  quick_access_card ms-2 d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-sharp fa-solid fa-briefcase text-white mt-3"></i>
                        <p class="text-white" style="font-size: 0.6em">Expenses</p>
                    </div>
         
              
                </div>
            </div>

            <div class="categories shadow py-2 mt-4">
                <div class="d-flex flex-row ">
                    <div class="col-md d-flex flex-column">
                        <div class="d-flex flex-row"> 
                            <div class="p-2">
                                <img src="image/categories.jpg" class="img-fluid" style="width: 3em" alt="">
                            </div>
                            <div class="p-2 d-flex flex-column">
                                <span class="p-0" style="font-size: 0.8em">Categories</span>
                                <span class="p-0"  style="font-size: 0.8em">115</span>
                            </div>
                        </div>
                        <div class="px-3">
                            <div class="d-flex flex-row">
                                <span class="dot me-2"></span>
                                <span style="font-size:0.8em">Meal</span>
                            </div>
                            <div class="d-flex flex-row">
                                <span class="dot me-2"></span>
                                <span style="font-size:0.8em">Entertain</span>
                            </div>
                            <div class="d-flex flex-row">
                                <span class="dot me-2"></span>
                                <span style="font-size:0.8em">Gift</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex flex-row px-2">
                        <div class="ms-auto">
                        <img src="image/chart-pie.png" class="img-fluid" style="width: 9em" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="recent_expenses shadow py-2 mt-4">
                <div class="d-flex flex-row">
                    <div class="p-3">
                        <p class="" style="font-size: 1em">Recent Expenses</p>
                    </div>
                    <div class="p-3 ms-auto">
                        <button class="btn btn-outline-light btn_recent_view">View All</button>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row p-3">
                        <div class="d-flex flex-column">
                            <span>19 Agustus 2022</span>
                            <span style="font-size: 0.7em">#MS-415646</span>
                        </div>
                        <div class="mx-auto">
                            <span>$180</span>
                        </div>
                        <div class="d-flex ms-auto">
                            <i class="fa-solid fa-cart-shopping me-2" style="font-size: 1.3rem;color:#848484"></i>
                            <span style="font-size: 0.9em">RECEIPT</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row p-3">
                        <div class="d-flex flex-column">
                            <span>19 Agustus 2022</span>
                            <span style="font-size: 0.7em">#MS-415646</span>
                        </div>
                        <div class="mx-auto">
                            <span>$180</span>
                        </div>
                        <div class="d-flex ms-auto">
                            <i class="fa-solid fa-cart-shopping me-2" style="font-size: 1.3rem;color:#848484"></i>
                            <span style="font-size: 0.9em">RECEIPT</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row p-3">
                        <div class="d-flex flex-column">
                            <span>19 Agustus 2022</span>
                            <span style="font-size: 0.7em">#MS-415646</span>
                        </div>
                        <div class="mx-auto">
                            <span>$180</span>
                        </div>
                        <div class="d-flex ms-auto">
                            <i class="fa-solid fa-cart-shopping me-2" style="font-size: 1.3rem;color:#848484"></i>
                            <span style="font-size: 0.9em">RECEIPT</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>



        

    </div>


</div>


@endsection