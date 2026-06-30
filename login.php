<?php 

session_start();

if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$page = 'login.php'; 
include "inc/header.php"; 
?>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card p-5 shadow-sm border-0" style="border-radius: 15px;">
          <h3 class="text-center mb-4">Login</h3>

          
          <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger text-center">
              <?php
                if($_GET['error'] == 'email is empty') echo "Please enter your email!";
                elseif($_GET['error'] == 'password is empty') echo "Please enter your password!";
                elseif($_GET['error'] == 'incorrect password') echo "Incorrect password!";
                elseif($_GET['error'] == 'not registered') echo "This email is not registered!";
                elseif($_GET['error'] == 'please login first') echo "Please login first!";
                elseif($_GET['error'] == 'access denied') echo "Access denied!";
                else echo htmlspecialchars($_GET['error']);
              ?>
            </div>
          <?php endif; ?>

          <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-success text-center">Account created! Please login.</div>
          <?php endif; ?>

          
          <form action="validateLogin.php" method="POST">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary py-3 px-5 w-100">Login</button>
          </form>
          <div class="text-center mt-3">
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 

include "inc/footer.php"; 
?>
