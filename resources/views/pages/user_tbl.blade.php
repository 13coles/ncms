<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>    
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
    </style>
</head>
<body>
    <!-- Top Navbar -->
    @include('partials.header')
    @include('partials.sidenav')
    <div class="div p-5"></div>
    <div class="container main-content">
        <div class="container ms-5">
            <div class="container ms-5 p-5">
                <h1>Users Table Management</h1>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registrationModal">Add New User</button>
                <table class="table ms-5">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created at</th>
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
                            <td>{{ $user->created_at }}</td>
                            <td>
            
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal"
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
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
    </div>
    

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
    // Populate the update modal with the user data
    const updateModal = document.getElementById('updateModal');
            updateModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-bs-user-id');
                const userName = button.getAttribute('data-bs-user-name');
                const userEmail = button.getAttribute('data-bs-user-email');
                const userRole = button.getAttribute('data-bs-user-role');

                const modal = this;
                modal.querySelector('#updateUserForm').action = '/update/' + userId;
                modal.querySelector('#user_id').value = userId;
                modal.querySelector('#user_name').value = userName;
                modal.querySelector('#email').value = userEmail;
                modal.querySelector('#role').value = userRole;
            });
        
    
</script>
   
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
