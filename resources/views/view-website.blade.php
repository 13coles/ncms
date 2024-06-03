<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Application Form</title>
</head>
<body>
    <header class="bg-light p-3 d-flex align-items-center justify-content-between" style="margin-left: auto; margin-right: auto;">
        <div class="d-flex align-items-center ms-md-5 me-md-3">
            <img id="logo" src="images/NOLITC LOGO FINAL V2 white bg 1 (1).png" alt="NOLITC LOGO" class="me-2" style="height: 50px;">
            <h1 class="h4 mb-0" style="color: #168753; font-family: Inter; font-weight: bold; font-size: 18px;">NEGROS OCCIDENTAL LANGUAGE <br>AND INFORMATION TECHNOLOGY CENTER</h1>
        </div>
  
        <nav class="navbar navbar-expand-lg me-md-5">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home" style="color: #403F91; font-family: Inter;font-size: 18px;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#programs" style="color: #403F91; font-family: Inter; font-size: 18px;">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#updates" style="color: #403F91; font-family: Inter; font-size: 18px;">Updates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" style="color: #403F91; font-family: Inter; font-size: 18px;">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" style="color: #403F91; font-family: Inter; font-size: 18px;">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid  bg-success border border-secondary">
            <div class="container m-3 p-3">
                <h2 style="color: #fcfcff; font-family: Inter;">REGISTRATION FORM </h2>
                <i style="color: #fcfcff; font-family: Inter;">note:This page is under development</i>
            </div>
        </div>
        <div class="conatiner m-2 justify-content-center">
            <form action="" method="post">
                <div class="container p-3 m-3 border-bottom">
                    <h2 class="text-sm-start">LEARNERS PROFILE FORM</h2>
                </div>
                
                <div class="qualifications p-3 m-3">
                    <fieldset>
                        <p>Qualifications *</p>
                        <h3>Preferred Qualification</h3>
                        <div class="w-25">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
        
                <div class="conatiner p-3 m-3">
                    <h2 >Learner/Manpower Profile</h2>
                    <div class="row">
                        <h4>Full Name</h4>
                        <div class="col p-2">
                            <fieldset>
                               <p>Last Name*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                       <div class="col p-2">
                            <fieldset>
                                <p>First Name*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col p-2">
                            <fieldset>
                                <p>Middle Name*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col p-2">
                            <fieldset>
                                <p>Suffix*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                            <p class="m-2">(eg. Jr., Sr., III, if any)</p>
                        </div>
                    </div>
                </div>
        
                <!-- Complete Mailing Address Section -->
                <div class="conatiner p-3 m-3">
                    <h2>Complete Permanent Mailing Address</h2>
                    
                    <div class="row">
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                               <p>Number, Street*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                       <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Region*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Province*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-3 w-25 p-2 border-bottom border-danger">
                            <fieldset>
                                <p>City/ Municipality*</p>
                                <input type="text" class="form-control border-0" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        
                       <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>District*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Zipcode*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div> 
        
                    </div>
        
                    <div class="row">
                        <div class="col-3 w-25  p-2">
                            <fieldset>
                                <p>Nationality*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                               <p>Contact Number*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                       <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Email*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                    </div>
                </div>
        
                <!-- Personal INformation Section -->
                <div class="container personal-info p-3 m-3">
                    <h2>Personal Information</h2>
                    <div class="row">
                        <div class="col">
                            <p>Sex*</p>
                            <div><input type="checkbox" checked> Male</div>
                            <div><input type="checkbox"> Female</div>
                        </div>
                        <div class="col">
                            <p>Civil Status*</p>
                            <div><input type="checkbox" checked> Single</div>
                            <div><input type="checkbox"> Married</div>
                            <div><input type="checkbox"> Widowed</div>
                            <div><input type="checkbox"> Divorced</div>
                            <div><input type="checkbox"> Pre-School (Nursery/Kinder/Prep)</div>
                        </div>
                        <div class="col">
                            <p>Employment Status (before the training)*</p>
                            <div><input type="checkbox"> Employed</div>
                            <div><input type="checkbox" checked> Unemployed</div>
                        </div>
                    </div>
                </div>
                
                <!-- birthday section -->
                <div class="container birthday p-3 m-3">
                    <h2>Birth Date</h2>
                    <p>Date</p>
                    <input type="date">
                </div>
        
                <!-- birthplace section -->
                <div class="container birthplace m-3">
                    <h2>Birth Place</h2>
                    <div class="row">
                        <div class="col w-25">Region*
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Region</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col w-25">Province*
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Province</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col w-25">City*
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select City</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
        
                <!-- Educational Attainment -->
                <div class="container p-3 m-3">
                    <h2>Educational Attainment Before The Training (Trainee)</h2>
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="checkbox" checked> No Grade Completed</div>
                            <div class="col"><input type="checkbox"> Pre-School (Nursery/Kinder/Prep)</div>
                            <div class="col"><input type="checkbox"> High School Undergraduate</div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="checkbox"> High School Graduate</div>
                            <div class="col"><input type="checkbox"> Elementary Undergraduate </div>
                            <div class="col"><input type="checkbox"> Post Secondary Undergraduate</div>
                        </div>
            
                        <div class="row">
                            <div class="col"><input type="checkbox" checked> College Undergraduate</div>
                            <div class="col"><input type="checkbox"> College Graduate or Higher</div>
                            <div class="col"><input type="checkbox"> Elementary Graduate</div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="checkbox"> Post Secondary Graduate</div>
                            <div class="col"><input type="checkbox"> Junior High Graduate</div>
                            <div class="col"><input type="checkbox"> Senior High Graduate</div>
                        </div>
                    </div>
                    
                </div>
        
                <!-- parent ro guardian section -->
                <div class="conatiner p-3 m-3">
                    <h2 >Parent/Guardian</h2>
                    <div class="row">
                        <h4>Full Name</h4>
                        <div class="col p-2">
                            <fieldset>
                               <p>Last Name*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                       <div class="col p-2">
                            <fieldset>
                                <p>First Name*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col p-2">
                            <fieldset>
                                <p>Middle Name*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col p-2">
                            <fieldset>
                                <p>Suffix*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                            <p class="m-2">(eg. Jr., Sr., III, if any)</p>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col p-2">
                            <fieldset>
                                <p>contact number*</p>
                                <input type="number" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                    </div>
                  
                </div>
        
                <!-- Complete Mailing Address Section -->
                <div class="conatiner p-3 m-3">
                    <h2>Complete Permanent Mailing Address</h2>
                    
                    <div class="row">
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                               <p>Number, Street*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                       <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Region*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Province*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                               <p>City/ Municipality*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                       <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>District*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                                <p>Zipcode*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div> 
        
                    </div>
        
                    <div class="row">
                        <div class="col-3 w-25  p-2">
                            <fieldset>
                                <p>Nationality*</p>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                        <div class="col-3 w-25 p-2">
                            <fieldset>
                               <p>Contact Number*</p>
                               <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </fieldset>
                        </div>
                    </div>
                </div>
        
                <!--  Learner/Trainee/Student (Clients) Classification-->
                <div class="container p-3 m-3">
                    <h2>Learner/Trainee/Student (Clients) Classification</h2>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input" checked> 
                            <label class="form-check-label">Students</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Informal Workers</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Indigenous People & Cultural Communities</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Out-of-School-Youth</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Industry Workers</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Disadvantaged Women</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Solo Parent</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Cooperatives</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Victim of Natural Disasters and Calamities</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Solo Parent's Children</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Family Enterprises</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Victim or Survivor of Human Trafficking</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Senior Citizens</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Micro Entrepreneurs</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Displaced HEIs Teaching Personnel</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Family Members of Microentrepreneur</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">TVET Trainers</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Displaced Workers</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Farmers and Fisherman</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Inmates and Detainees</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Rebel Returnees or Decommissioned Combatants</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Family Members of Farmers and Fisherman</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Wounded-in-Action AFP & PNP Personnel</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Community Trng. & Employment Coordinator</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">JTESDA Alumni</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Employees with Contractual/Job-Order Status</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Returning/Repatriated Overseas Filipino Workers</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Family Members of Inmates and Detainees</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Overseas Filipino Workers (OFW) Dependents</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Family Members of AFP and PNP Killed-and-Wounded-in-Action</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Uniformed Personnel</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">4P's Pantawid Pamilya Program</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Persons with Disabilities</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="checkbox" class="form-check-input"> 
                            <label class="form-check-label">Others:</label>
                            <input type="text" class="form-control" placeholder="Please specify">
                        </div>
                    </div>
                </div>
                
                <div class="container text-center mt-3">
                    <button type="button" class="btn btn-success btn-lg">Next -></button>
                </div>
            </form>
        </div>
        
        
    
    </main>
    
  
    
</body>
</html>