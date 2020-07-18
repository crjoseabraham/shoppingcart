<div class="popup_login">
    <div class="greeting">
        <h3>Welcome back</h3>
        <p class="mt-2">Become a Member — you'll enjoy exclusive deals, offers, invites and rewards.</p>
        <img class="mt-2" src="./dist/img/login.svg" alt="Secure login">
    </div>

    <form action="login" method="post" id="login_form" class="mt-2">
        <!-- Email -->
        <div class="form-group">
            <label for="login_email">Email address</label>
            <div class="input-group">
                <input type="email" name="email" id="login_email">
            </div>
            <ul class="input-errors"></ul>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="loginpass">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="loginpass">
            </div>
            <ul class="input-errors"></ul>
        </div>

        <!-- Remember me & Forgotten Password -->
        <div class="form-group" id="login_options">
            <label>
                <input class="form-checkbox" type="checkbox" name="remember_me" id="remember_me">
                Remember me
            </label>

            <a href="#" class="simple">I forgot my password</a>
        </div>

        <!-- Buttons -->
        <div class="form-buttons">
            <button type="submit" class="btn btn--primary">
                Log In
            </button>
            <button type="button" class="btn btn--blank" data-popup="signup">
                Sign Up
            </button>
        </div>
    </form>
</div>