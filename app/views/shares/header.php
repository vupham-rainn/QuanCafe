<?php
require_once 'app/helpers/SessionHelper.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý sản phẩm</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Điều chỉnh cho đẹp hơn nếu cần */
    .navbar-nav .nav-item {
      margin-right: 15px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <!-- Brand (tiêu đề) -->
    <a class="navbar-brand" href="/webbanhang/Product/">Quản lý sản phẩm</a>

    <!-- Nút toggle cho màn hình nhỏ -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Danh sách menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto"><!-- ml-auto để menu nằm bên phải -->
        <li class="nav-item">
          <a class="nav-link" href="/webbanhang/Product/">Danh sách sản phẩm</a>
        </li>

        <?php if (SessionHelper::isAdmin()): ?>
          <li class="nav-item">
            <a class="nav-link" href="/webbanhang/Product/add">Thêm sản phẩm</a>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <?php
          if (SessionHelper::isLoggedIn()) {
              echo "<a class='nav-link'>"
                . htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8')
                . " (" . SessionHelper::getRole() . ")</a>";
          } else {
              echo "<a class='nav-link' href='/webbanhang/account/login'>Đăng nhập</a>";
          }
          ?>
        </li>

        <li class="nav-item">
          <?php
          if (SessionHelper::isLoggedIn()) {
              echo "<a class='nav-link' href='/webbanhang/account/logout'>Đăng xuất</a>";
          }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bắt đầu nội dung trang -->
<div class="container mt-4">
