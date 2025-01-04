<header class="text-white header" style="background-color: #00508D; display: flex; align-items: center; justify-content: space-between; padding: 0 20px; width: 100%; position: fixed; top: 0; left: 0; z-index: 999;">
    <img src="{{ asset('img/Logo2.png') }}" alt="Logo" class="login-logo" style="width: 330px; height: auto;">
    
    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}"  style="background-color: #00508D; border: none;">
        @csrf
        <button onclick="event.preventDefault(); this.closest('form').submit();" 
            class="text-white  bg-danger border border-white rounded px-4 py-2 hover:bg-white hover:text-blue-700 transition">
            {{ __('Log Out') }}
        </button>
    </form>
</header>
