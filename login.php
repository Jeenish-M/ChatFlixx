<?php include_once "header.php"; ?>
<div class="LogReg">
  <div class="LogReg-Section">

    <div class="form-box login">
      <h2>Login</h2>
      <form action="#">
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login & Continue">
        </div>
      </form>
      <div class="link">Don't have an Account? <a href="register.php">Register now</a></div>
    </div>
  </div>
</div>
<script src="JavaScript/nav.js"></script>
</body>

</html>