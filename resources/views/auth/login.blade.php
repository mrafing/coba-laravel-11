<form class="space-y-4 md:space-y-6" method="post" action="/login">
    @csrf
    <h1>Login</h1>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">Sign in</button>
</form>