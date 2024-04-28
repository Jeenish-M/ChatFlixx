<?php include_once "header.php"; ?>
<div class="LogReg">
  <div class="LogReg-Section">

    <div class="form-box register">
      <h2>Register Account</h2>
      <form action="#">

        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Create & Continue">
        </div>
      </form>
      <div class="link">Already have an Account? <a href="login.php">Login now</a></div>
    </div>
  </div>
</div>
<script src="JavaScript/nav.js"></script>
</body>

</html>