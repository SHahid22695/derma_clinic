<?php 

$page = 'signup.php'; 
include "inc/header.php"; 
?>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-5 shadow-sm border-0" style="border-radius: 15px;">
          <h3 class="text-center mb-4">Create Account</h3>
          <?php if(isset($_GET['error']) && $_GET['error'] == 'wrongAdminKey'): ?>
  <div class="alert alert-danger text-center" style="font-size: 14px;">
    <strong>Access Denied!</strong> Incorrect Admin Secret Key. You cannot register as an Admin.
  </div>
<?php endif; ?>
          <form action="add_user.php" method="post" enctype="multipart/form-data">

            
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="name" class="form-control required">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control required" >
            </div>
           <div class="form-group">
  <label>Password</label>
  <input type="password" name="password" class="form-control required" >
  
  
  <small class="form-text text-muted mt-1" style="font-size: 12px; line-height: 1.4;">
    Must be at least <strong>6 characters</strong> long, contain an <strong>uppercase letter (A-Z)</strong>, a <strong>lowercase letter (a-z)</strong>, a <strong>number (0-9)</strong>, and a <strong>special character (e.g., _, @, #)</strong>.
  </small>
</div>

            <div class="form-group">
             <label>Phone Number</label>
             <input type="tel" name="phone" class="form-control required">
            </div>

            <div class="form-group">
               <label>Age</label>
            <input type="number" name="age" class="form-control" required min="12" max="100">
             </div>
  <div class="form-group">
  <label>Profile Picture (الصورة الشخصية)</label>
  <input type="file" name="image" class="form-control-file" accept="image/*">
  <small class="form-text text-muted mt-1" style="font-size: 11px;">
    Allowed formats: JPG, JPEG, PNG, GIF (Max size: 5 MB).
  </small>
</div>

            <button type="submit" class="btn btn-primary py-3 px-5 w-100">Sign Up</button>
            </form>
          <div class="text-center mt-3">
            <p>Already have an account? <a href="login.php">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 

include "inc/footer.php"; 
?>
