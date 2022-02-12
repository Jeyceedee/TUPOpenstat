<div id="signInPage">
    <button id="closeSignIn">&#10005;</button>
    <form method="post" action="<?= base_url("login/") ?>">
        <h2>SIGN IN</h2>
        <label for="loginEmail">Email</label>
        <input id="loginEmail" type="email" name="loginEmail" required><br>
        <label for="loginPassword">Password</label>
        <input id="loginPassword" type="password" name="loginPassword" required>

        <p>No account? <a href="<?= base_url("register/") ?>">Register here</a></p>

        <button type="submit">Sign In</button>
    </form>

</div>
