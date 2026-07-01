<?php 
session_start();
$page = 'signup.php'; 
include "inc/header.php"; 
?>
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-5 shadow-sm border-0" style="border-radius: 15px;">
        <h3 class="text-center mb-4">Create Account</h3>
          <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger text-center">
              <?php
                $err = $_GET['error'];
                if($err == 'wrongAdminKey') echo "رقم المفتاح السري للمدير غير صحيح!";
                elseif($err == 'invalidEmail') echo "البريد الإلكتروني غير صالح!";
                elseif($err == 'emailExists') echo "هذا البريد مسجل مسبقاً!";
                elseif($err == 'invalidPassword') echo "كلمة السر لا تستوفي الشروط!";
                elseif($err == 'invalidphone') echo "رقم الجوال غير صالح!";
                elseif($err == 'missingSpecialty') echo "الرجاء إدخال التخصص!";
                elseif($err == 'error') echo "حدث خطأ، الرجاء المحاولة مرة أخرى!";
                else echo htmlspecialchars($err, ENT_QUOTES, 'UTF-8');
              ?>
            </div>
          <?php endif; ?>
          <form action="add_user.php" method="post">
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
  <small class="form-text text-muted mt-1" style="font-size: 12px; line-height: 1.4;"> يجب أن تتكون من <strong>6 أحرف</strong> على الأقل، وأن تحتوي على <strong>حرف كبير (A-Z)</strong> و <strong>حرف صغير (a-z)</strong> و <strong>رقم (0-9)</strong> و <strong>رمز خاص (مثل: _, @, #)</strong>.
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
              <label>Register as</label>
              <select name="role" class="form-control" id="roleSelect" required>
                <option value="client">Client (زبون)</option>
                <option value="doctor">Doctor (دكتور)</option>
              </select>
            </div>

            <div class="form-group" id="specialtyField" style="display:none;">
              <label> Specialty ( التخصص)</label>
              <input type="text" name="specialty" class="form-control" placeholder="e.g. Skin Care Specialist">
            </div>

            <button type="submit" class="btn btn-primary py-3 px-5 w-100">تسجيل دخول </button>
            </form>
<script>
document.getElementById('roleSelect').addEventListener('change', function() {
    document.getElementById('specialtyField').style.display = this.value === 'doctor' ? 'block' : 'none';
});
</script>
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