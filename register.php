<?php include_once "header.php"; ?>


<div class="w-50 mx-auto" style="padding-top: 100px;">
  <h1 class="mb-3">Please sign up</h1>
  <form action="registerLogic.php" method="POST">

    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form2Example3" class="form-control" name="name" />
      <label class="form-label" for="form2Example1">Name</label>

    </div>

    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form2Example4" class="form-control" surname="surname" />
      <label class="form-label" for="form2Example1">Surname</label>
    </div>

    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" id="form2Example5" class="form-control" username="username" />
      <label class="form-label" for="form2Example1">username</label>
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" email="email" />
      <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" password="password" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Han an account? <a href="#!">Sign in</a></p>

    </div>
  </form>

  <form action="registerLogic.php">
    <input type="text" name="name">
    <input type="submit">
  </form>
</div>
<?php include_once "footer.php"; ?>
</body>

</html>