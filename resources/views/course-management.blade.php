<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            padding-top: 56px;
            width: 250px;
            background-color: #f8f9fa;
        }
        .content {
            margin-left: 250px;
            padding-top: 56px;
        }
        .navbar {
            padding: 1rem;
        }
        .alert {
            max-width: 500px; 
            margin: 0 auto; 
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    @include('partials.header')
    @include('partials.sidenav')
    <div class="div p-5"></div>
    <div class="container main-content">
        <div class="container-insde  ms-5">
            <div class="container ms-5 p-5 ">
                <h1>Course Table Management</h1>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCourseModal">Add New Course</button>
                <table class="table ms-5">
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
                        @foreach ($courses as $course)
                                <tr>
                                    <th scope="row">{{ $course->id }}</th>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->num_hours }} Hours</td>
                                    <td>{{ $course->description }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updatecourseModal"
                                                data-bs-course-id="{{ $course->id }}"
                                                data-bs-course-name="{{ $course->course_name }}"
                                                data-bs-course-hours="{{ $course->num_hours }}"
                                                data-bs-course-description="{{ $course->description }}">
                                                Edit
                                            </button>
                                            <div class="ms-2"></div>
                                             <!-- Delete button -->
                                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('staff.add')
                @include('staff.update')
            </div>
        </div>
        
    </div>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const passwordInput = document.getElementById('password');
    //     const passwordToggle = document.getElementById('password-toggle');

    //     passwordToggle.addEventListener('click', function() {
    //         if (passwordInput.type === 'password') {
    //             passwordInput.type = 'text';
    //             passwordToggle.textContent = 'Hide';
    //         } else {
    //             passwordInput.type = 'password';
    //             passwordToggle.textContent = 'Show';
    //         }
    //     });
    // });
    
// const updateModal = document.getElementById('updatecourseModal');
// updateModal.addEventListener('show.bs.modal', function (event) {
//     const button = event.relatedTarget;
//     const courseId = button.getAttribute('data-bs-course-id');
//     const courseName = button.getAttribute('data-bs-course-name');
//     const numHours = button.getAttribute('data-bs-num-hours');
//     const description = button.getAttribute('data-bs-description');

//     const modal = this;
//     const form = modal.querySelector('#updateCorseForm');
//     form.action = `/update/${courseId}`;
//     modal.querySelector('#course_id').value = courseId;
//     modal.querySelector('#course_name').value = courseName;
//     modal.querySelector('#num_hours').value = numHours;
//     modal.querySelector('#description').value = description;
// });
</script>
    

<script>
    // Hide login success message after 2 seconds
    setTimeout(() => {
        const loginSuccessMessage = document.getElementById('loginSuccessMessage');
        if (loginSuccessMessage) {
            loginSuccessMessage.style.display = 'none';
        }
    }, 2000);
    // Remove login success message after 3 seconds
    setTimeout(() => {
        const loginSuccessMessage = document.getElementById('loginSuccessMessage');
        if (loginSuccessMessage) {
            loginSuccessMessage.remove();
        }
    }, 3000);

    // Hide role message after 2 seconds
    setTimeout(() => {
        const roleMessage = document.getElementById('roleMessage');
        if (roleMessage) {
            roleMessage.style.display = 'none';
        }
    }, 2000);
    // Remove role message after 3 seconds
    setTimeout(() => {
        const roleMessage = document.getElementById('roleMessage');
        if (roleMessage) {
            roleMessage.remove();
        }
    }, 3000);
    // Additional script to remove the message from the DOM after animation
    setTimeout(() => {
            const loginSuccessMessage = document.getElementById('loginSuccessMessage');
            if (loginSuccessMessage) {
                loginSuccessMessage.remove();
            }
            const roleMessage = document.getElementById('roleMessage');
            if (roleMessage) {
                roleMessage.remove();
            }
        }, 3000);
</script>
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
