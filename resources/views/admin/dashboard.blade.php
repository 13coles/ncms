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
    @include('partials.header')
    @include('partials.sidenav')
        <!-- Side Navbar -->
        {{-- <div class="sidebar mt-5">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link" id="v-pills-users-tab" data-bs-toggle="pill" data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users" aria-selected="false">Users</button>
                <a class="nav-link" id="v-pills-courses-tab" href="{{ route('course_page') }}" role="tab" aria-controls="v-pills-courses" aria-selected="false">Courses</a>
                <a class="nav-link" id="v-pills-applicants-tab" href="{{ route('applicant') }}" role="tab" aria-controls="v-pills-applicants" aria-selected="false">Applicants</a>
            </div>
        </div> --}}


    <!-- Main Content -->
    <div class="content">
        <div class="tab-content" id="v-pills-tabContent">

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
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->user_name }}</td> 
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>
 
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal"
                                        data-bs-user-id="{{ $user->id }}"
                                        data-bs-user-name="{{ $user->user_name }}"
                                        data-bs-user-email="{{ $user->email }}"
                                        data-bs-user-role="{{ $user->role }}">
                                        Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>                        
                    </table>
                
                    @include('partials.create_new_user')
                    @include('partials.update_user')
                </div>
            </div>

            @include('partials.applicant')

            @include('partials.course_page')
            
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
