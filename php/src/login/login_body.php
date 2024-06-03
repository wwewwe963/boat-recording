<div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" onsubmit="return validateForm()" action="login.php" method="post">
      <input type="text" id="username" name="username" placeholder="Username" required>
      <br>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <br>
      <button type="submit">Login</button>
    </form>

    <div class="error-message" id="errorMessage"></div>
  </div>