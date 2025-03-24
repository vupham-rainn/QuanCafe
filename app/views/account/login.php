<?php include 'app/views/shares/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  >
  <!-- Font Awesome (dùng để hiển thị icon mạng xã hội) -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  >
  <style>
    /* Đổi background thành màu trắng */
   
    /* Card login ở giữa */
    .login-card {
      background: #fff;
      border-radius: 15px;
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    /* Tiêu đề Login */
    .login-card h2 {
      font-weight: 700;
      margin-bottom: 30px;
      color: #333;
    }
    /* Các trường input */
    .login-card .form-control {
      border-radius: 0;
      border: none;
      border-bottom: 2px solid #ddd;
      margin-bottom: 20px;
      box-shadow: none;
    }
    .login-card .form-control:focus {
      border-color: #4e54c8;
      box-shadow: none;
    }
    /* Nút Login gradient */
    .btn-gradient {
      background: linear-gradient(to right, #4e54c8, #8f94fb);
      color: #fff;
      border: none;
      border-radius: 30px;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      transition: 0.3s ease;
    }
    .btn-gradient:hover {
      opacity: 0.8;
    }
    /* Link Forgot password */
    .forgot-password {
      float: right;
      font-size: 14px;
      text-decoration: none;
      color: #666;
    }
    .forgot-password:hover {
      color: #4e54c8;
      text-decoration: underline;
    }
    /* Phần chia với dòng chữ Or Sign Up Using */
    .divider {
      text-align: center;
      margin: 25px 0;
      color: #999;
      font-weight: 600;
    }
    /* Icon mạng xã hội */
    .social-login a {
      display: inline-block;
      margin: 0 10px;
      color: #fff;
      font-size: 20px;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
      border-radius: 50%;
      background: #4e54c8;
      text-decoration: none;
      transition: 0.3s;
    }
    .social-login a:hover {
      background: #8f94fb;
    }
    /* Liên kết Sign Up */
    .sign-up-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }
    .sign-up-link a {
      color:rgb(57, 117, 194);
      font-weight: 600;
      text-decoration: none;
    }
    .sign-up-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="login-card">
  <h2 class="text-center">Login</h2>

  <!-- Thông báo lỗi nếu có -->
  <?php if (!empty($error)): ?>
    <div class="alert alert-danger">
      <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
    </div>
  <?php endif; ?>

  <form action="/webbanhang/account/checkLogin" method="POST">
    <div class="form-group">
      <label for="username" class="sr-only">Username</label>
      <input 
        type="text" 
        class="form-control" 
        id="username" 
        name="username" 
        placeholder="Type your username" 
        required
      >
    </div>
    <div class="form-group">
      <label for="password" class="sr-only">Password</label>
      <input 
        type="password" 
        class="form-control" 
        id="password" 
        name="password" 
        placeholder="Type your password" 
        required
      >
    </div>

    <a href="#" class="forgot-password">Forgot password?</a>

    <button type="submit" class="btn btn-gradient mt-4">LOGIN</button>

    <div class="divider">Or Sign Up Using</div>
    <div class="social-login text-center">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-google"></i></a>
    </div>

    <div class="sign-up-link">
      Have not account yet?
      <a href="/webbanhang/account/register">SIGN UP</a>
    </div>
  </form>
</div>

<!-- Bootstrap JS (tùy chọn) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"
></script>
</body>
</html>



<?php include 'app/views/shares/footer.php'; ?>
