<?php include_once 'header.php' ?>

<div class="w-50 mx-auto" style="padding-top: 100px;">
  <h1 class="mb-3">Please sign up</h1>
  <form action="loginLogic.php" method="POST">


    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form2Example5" class="form-control" name="username" />
      <label class="form-label" for="form2Example1">Username</label>
    </div>


    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" name="password" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" + data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Han an account? <a href="#!">Sign in>

    </div>

    <?php include_once 'footer.php' ?>