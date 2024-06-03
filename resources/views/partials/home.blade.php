<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            padding-top: 56px; /* Height of the navbar */
            width: 250px;
            background-color: #f8f9fa;
        }
        .content {
            margin-left: 250px;
            padding-top: 56px; /* Height of the navbar */
        }
        .navbar {
            padding: 1rem; /* Add padding to the navbar */
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Side Navbar -->
    <div class="sidebar mt-5">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link" id="v-pills-view-website-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view-website" type="button" role="tab" aria-controls="v-pills-view-website" aria-selected="true">View Website</button>
            <button class="nav-link" id="v-pills-users-tab" data-bs-toggle="pill" data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users" aria-selected="false">Users</button>
            <button class="nav-link" id="v-pills-courses-tab" data-bs-toggle="pill" data-bs-target="#v-pills-courses" type="button" role="tab" aria-controls="v-pills-courses" aria-selected="false">Courses</button>
            <button class="nav-link" id="v-pills-applicants-tab" data-bs-toggle="pill" data-bs-target="#v-pills-applicants" type="button" role="tab" aria-controls="v-pills-applicants" aria-selected="false">Applicants</button>
            <button class="nav-link" id="v-pills-cms-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cms" type="button" role="tab" aria-controls="v-pills-cms" aria-selected="false">CMS</button>
            <button class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout" aria-selected="false">Log out</button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade" id="v-pills-view-website" role="tabpanel" aria-labelledby="v-pills-view-website-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>View Website</h1>
                    <p>Content for the View Website section.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>Users Table Management</h1>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registrationModal">Add New User</button>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Course 1</td>
                              <td>500 Hours</td>
                              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam asperiores molestiae ex tempore impedit excepturi incidunt odio voluptates dignissimos, amet, numquam quae adipisci accusantium soluta fuga sit nisi veniam ipsa.</td>
                              <td><button type="button" class="btn btn-primary">Edit</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Course 1</td>
                              <td>500 Hours</td>
                              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam asperiores molestiae ex tempore impedit excepturi incidunt odio voluptates dignissimos, amet, numquam quae adipisci accusantium soluta fuga sit nisi veniam ipsa.</td>
                              <td><button type="button" class="btn btn-primary">Edit</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Course 1</td>
                              <td>500 Hours</td>
                              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam asperiores molestiae ex tempore impedit excepturi incidunt odio voluptates dignissimos, amet, numquam quae adipisci accusantium soluta fuga sit nisi veniam ipsa.</td>
                              <td><button type="button" class="btn btn-primary">Edit</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                              </td>
                            </tr>
                          </tbody>                 
                    </table>
                
                    <!-- Registration Modal -->
                    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter user name">
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select class="form-select" id="role" name="role">
                                                <option selected disabled>Select role</option>
                                                <option value="admin">Admin</option>
                                                <option value="cms_admin">CMS Admin</option>
                                                <option value="nolitc_staff">NOLITC Staff</option>
                                            </select>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" aria-describedby="password-toggle">
                                                <button class="btn btn-outline-secondary" type="button" id="password-toggle">Show</button>
                                            </div>
                                        </div>
                                    
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            {{-- Courses Section --}}
            <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>Courses</h1>
                    <button type="button" class="btn btn-success">Add</button>
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#ID</th>
                            <th scope="col"> Course Title</th>
                            <th scope="col">Number of Hours</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Course 1</td>
                            <td>500 Hours</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam asperiores molestiae ex tempore impedit excepturi incidunt odio voluptates dignissimos, amet, numquam quae adipisci accusantium soluta fuga sit nisi veniam ipsa.</td>
                            <td><button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Course 1</td>
                            <td>500 Hours</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam asperiores molestiae ex tempore impedit excepturi incidunt odio voluptates dignissimos, amet, numquam quae adipisci accusantium soluta fuga sit nisi veniam ipsa.</td>
                            <td><button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Course 1</td>
                            <td>500 Hours</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam asperiores molestiae ex tempore impedit excepturi incidunt odio voluptates dignissimos, amet, numquam quae adipisci accusantium soluta fuga sit nisi veniam ipsa.</td>
                            <td><button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>

             {{-- Applicants Section --}}
            <div class="tab-pane fade" id="v-pills-applicants" role="tabpanel" aria-labelledby="v-pills-applicants-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>Applicants</h1>
                    <p>Content for the Applicants section.</p>
                </div>
            </div>

             {{-- CMS Section --}}
            <div class="tab-pane fade" id="v-pills-cms" role="tabpanel" aria-labelledby="v-pills-cms-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>CMS</h1>
                    <p>Content for the CMS section.</p>
                </div>
            </div>

             {{-- Log out Section --}}
            <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>Log out</h1>
                    <p>Content for the Log out section.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- password show function --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.getElementById('password-toggle');
    
            passwordToggle.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordToggle.textContent = 'Hide';
                } else {
                    passwordInput.type = 'password';
                    passwordToggle.textContent = 'Show';
                }
            });
        });
    </script>
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
