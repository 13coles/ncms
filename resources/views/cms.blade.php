<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Page</title>    
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
            max-width: 500px; /* Set a max width for the alert messages */
            margin: 0 auto; /* Center the alert messages */
        }
        .partner-logo {
        width: 200px; /* Set your desired width */
        height: 200px; /* Set your desired height */
        object-fit: contain; /* Ensures the image scales correctly */
        display: block;
        margin: 0 auto;
    }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    @include('partials.header')
    <div class="div p-5"></div>
   

    <div class="sidebar mt-5 border border-success shadow-sm">
     
        <nav class="nav flex-column">
            <a class="nav-link m-3" href="{{ route('dashboard') }}">Dashboard</a>
            @if(Auth::check() && (Auth::user()->role === 'cms_admin' || Auth::user()->role === 'admin'))
                <a class="nav-link m-3" href="{{ route('cms.home') }}">Home</a>
                <a class="nav-link m-3" href="{{ route('cms.programs') }}">Programs</a>
                <a class="nav-link m-3" href="{{ route('cms.update') }}">Updates</a>
                <a class="nav-link m-3" href="{{ route('cms.score_card') }}">Score Card</a>
                <a class="nav-link m-3" href="{{ route('cms.partners') }}">Partners</a>
            @endif
        </nav>
        
        
    </div>
    
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
