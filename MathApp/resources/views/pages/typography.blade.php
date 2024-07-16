@extends('layouts.app', ['activePage' => 'typography', 'title' => 'INTERNATIONAL EDUCATION SERVICES', 'navName' => 'Typography', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
   
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">
                        <div class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <i class="fas fa-wifi text-white p-2"></i>
                                    <h5 class="text-white mt-4 mb-5 pb-2">
                                       Challenge ID : C001 
                                    </h5>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">Challenge Admin</p>
                                                <h6 class="text-white mb-0">Jalir Luzinda</h6>
                                            </div>
                                            
                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <img class="w-60 mt-2" src="/img/logos/mastercard.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="fas fa-landmark opacity-10"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h6 class="text-center mb-0">Duration</h6>
                                        <span class="text-xs">Total Time for each</span>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0">20 Minutes</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <div class="card">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            <i class="fab fa-paypal opacity-10"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h6 class="text-center mb-0">Attempts</h6>
                                        <span class="text-xs">Number of attempts within 20 minutes</span>
                                        <hr class="horizontal dark my-3">
                                        <h5 class="mb-0">3 Times</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                    <a class="btn btn-link text-danger text-gradient px-4 mb-0" href="javascript:;"><i
                                    class="far fa-trash-alt me-2">Manage Challenge</i></a>
                                    </div>
                                
                                </div>
                              
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                           
                                            <h6 class="mb-0">
                                              The Administrator can manage The challenge by adding and setting the challenge Parameters as bellow. He can view also the challenges attempted and anything else about the challenge.
                                            </h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                        </div>
                                    
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Challenges Completed</h6>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                            </div>
                        </div>
                    </div> 
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">Challenge 1</h6>
                                    <span class="text-xs">#C001</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">Challenge 2</h6>
                                    <span class="text-xs">#C002</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">Challenge 3</h6>
                                    <span class="text-xs">#C003</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">Challenge 4</h6>
                                    <span class="text-xs">#C004</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="text-dark mb-1 font-weight-bold text-sm">Challenge 5</h6>
                                    <span class="text-xs">#C005</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Set Challenge Parameters</h6>
                    </div>
                    <br><br><br>
<div>
    <form action="{{ route('challenges.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="challenge_id">Challenge ID</label>
            <input type="text" class="form-control" id="challenge_id" name="challenge_id" required>
        </div>
        <div class="form-group">
            <label for="starting_date">Starting Date</label>
            <input type="date" class="form-control" id="starting_date" name="starting_date" required>
        </div>
        <div class="form-group">
            <label for="ending_date">Ending Date</label>
            <input type="date" class="form-control" id="ending_date" name="ending_date" required>
        </div>
        <div class="form-group">
            <label for="duration_per_challenge">Duration Per Challenge</label>
            <input type="number" class="form-control" id="duration_per_challenge" name="duration_per_challenge" required>
        </div>
        <div class="form-group">
            <label for="number_of_questions">Number of Questions</label>
            <input type="number" class="form-control" id="number_of_questions" name="number_of_questions" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

             <br><br><br><br><br>      
                                
                        <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                            class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                            class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0">Challenges Stock </h6>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
                        <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">29 June 2024, at 05:00 AM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                    Pending
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">29 June 2024, at 12:30 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                    Timed Out
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    
                                
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">29 June 2024, at 04:30 AM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                   Within Time
                                </div>
                            </li>
                        </ul>
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    
                                
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">28 June 2024, at 13:45 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                    Within Time
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                   
                                
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">28 June 2024, at 12:30 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                Within Time
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                   
                                    
                  l                  <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">28 June 2024, at 08:30 AM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                Within Time
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                   
                                
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Challenge Closed</h6>
                                        <span class="text-xs">28 June 2024, at 12:30 PM</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                    Timed Out
                                </div>
                            </li>
                        </ul>
                       
                       
                      
                    </div>
                </div>
            </div>
        </div>
       
   

    </div>
@endsection