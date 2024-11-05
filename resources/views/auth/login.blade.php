<h1>
    Login
</h1>

<form method="post" action="{{route('login')}}">
    @csrf
    <input type="email" name="email" id="email" value="super@super.com">
    <input type="password" name="password" id="password" value="super@super.com">

    <button>
        Sign In
    </button>
</form>


<a href="/dashboard">Dashboard</a>
