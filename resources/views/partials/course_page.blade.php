<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>    
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


    <!-- Main Content -->
    <div class="content">
        <div class="tab-content" id="v-pills-tabContent">

            
            <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab" tabindex="0">
                <div class="container mt-4">
                    <h1>Courses</h1>
                    <button type="button" class="btn btn-success mb-3">Add</button>
                    <!-- Add this at the top of resources/views/users/course.blade.php -->
                    @if(isset($courses))
                    <p>Courses data is available.</p>
                    @else
                    <p>No data found.</p>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Number of Hours</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td scope="row">{{ $course->id }}</td>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->num_hours }}</td>
                                <td>{{ $course->description }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-sm btn-primary me-2">Edit</button>
                                    <!-- Delete Button -->
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              
                  
                </div>
            </div>
              
            
        </div>
    </div>


   
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
