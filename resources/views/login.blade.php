<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .content-wrapper {
            display: flex;
            flex-direction: row;
            align-items: stretch;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;

        }
        .content-card {
            flex: 1;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login{
            border-right: #0000;
        }
        .img-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .password-toggle {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container-wrapper bg-light">
        <div class="content-wrapper shadow p-3 mb-5 bg-body rounded ">
        
            <div class="content-card border border-end-1 border-success">
                
                <form class="w-100" action="{{ route('login') }}" method="POST">
                    @csrf
                     {{-- <img src="{{ asset('images/NOLITC LOGO FINAL V2 white bg 1 (1).png') }}" alt="Berto Image" class="mx-auto"> --}}
                    <h2 class="text-center mb-4">Login Form</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" aria-describedby="password-toggle" required>
                            <span class="input-group-text password-toggle" id="password-toggle">Show</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option selected disabled>Select role</option>
                            <option value="admin">Admin</option>
                            <option value="cms_admin">CMS Admin</option>
                            <option value="nolitc_staff">NOLITC Staff</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
            {{-- <div class="content-card border border-end-1 border-success">
                <div class="img-container">
                    <img src="{{ asset('images/berto Final 1.png') }}" alt="Berto Image">
                </div>
            </div> --}}
        </div>
    </div>

    <script>
        document.getElementById('password-toggle').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });
    </script>
</body>
</html>
