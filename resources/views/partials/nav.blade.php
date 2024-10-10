<nav>
    <div class="navbar-container">
        <a href="/">Inicio</a>
        @guest
            <a href="/login">Login</a>
            <a href="/register">Register</a>  <!-- Agregado el enlace de registro -->
        @else
            <a href="/dashboard">Dashboard</a>
            <form style="display: inline" action="/logout" method="post">
                @csrf
                <a href="#" onclick="this.closest('form').submit()">Logout</a>
            </form>
        @endguest

        @if(session('status'))
            <div class="status-message">{{ session('status') }}</div>
        @endif
    </div>
</nav>

<style>
    nav {
        background-color: #007bff;
        padding: 15px;
        width: 100%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    nav a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    nav a:hover {
        background-color: #0056b3;
    }

    .status-message {
        color: #ffcc00;
        margin-left: 20px;
    }
</style>
