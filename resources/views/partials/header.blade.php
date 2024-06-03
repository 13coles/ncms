<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg shadow p-3 mb-5 bg-success fixed-top p-3">
    <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('images/NOLITC LOGO FINAL V2 white bg 1 (1).png') }}" alt="Logo">
            </a>
            <h1 class="h4 mb-3 d-inline" style="color: #ffffff; font-family: Inter; font-weight: bold;">NEGROS OCCIDENTAL LANGUAGE AND INFORMATION TECHNOLOGY CENTER</h1>
        </div>
        <div>
            @if (session('success'))
                <div id="successMessage" style="color: white;">{{ session('success') }}</div>
                <audio id="notification" src="{{ asset('path/to/notification.mp3') }}" preload="auto"></audio>
                <script>
                    // Play notification sound
                    const notificationSound = document.getElementById('notification');
                    notificationSound.play();
                    // Hide the success message after 5 seconds
                    setTimeout(() => {
                        const successMessage = document.getElementById('successMessage');
                        successMessage.style.display = 'none';
                    }, 3000);
                </script>
            @endif
        </div>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</nav>
<!-- Session Messages -->
    @if(session('login_success'))
        <div id="loginSuccessMessage" class="alert alert-success mb-3 mt-3">
            {{ session('login_success') }}
        </div>
    @endif
    
    @if(Auth::check())
        <div id="roleMessage" class="alert alert-info">
            Logged in as: {{ session('role') }}
        </div>
    @endif