<?php include 'app/views/shares/header.php'; ?>

<h1 class="text-center">Danh sách sản phẩm</h1>

<!-- Chỉ admin mới thấy nút Thêm sản phẩm -->
<?php if (SessionHelper::isAdmin()): ?>
  <a href="/webbanhang/Product/add" class="btn btn-success mb-2">
    Thêm sản phẩm mới
  </a>
<?php endif; ?>

<ul class="list-group">
  <?php foreach ($products as $product): ?>
    <li class="list-group-item">
      <h2>
        <a href="/webbanhang/Product/show/<?php echo $product->id; ?>">
          <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
        </a>
      </h2>
      
      <!-- Hiển thị ảnh nếu có -->
      <?php if ($product->image): ?>
        <img
          src="/webbanhang/<?php echo $product->image; ?>"
          alt="Product Image"
          style="max-width: 100px;"
        >
      <?php endif; ?>

      <p><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
      <p>Giá: <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</p>
      <p>
        Danh mục: 
        <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
      </p>

      <!-- Thay thế nút Sửa/Xóa/Thêm cũ bằng code mới -->
      <div class="mt-4">
        <div class="d-flex gap-2 flex-wrap">
          <?php if (SessionHelper::isAdmin()): ?>
            <a
              href="/webbanhang/Product/edit/<?php echo $product->id; ?>"
              class="btn btn-warning btn-sm w-100 fw-bold text-white rounded-pill transition-all hover-btn"
              onclick="return confirm('Bạn có chắc chắn muốn sửa sản phẩm này?');"
            >
              <i class="fas fa-edit me-1"></i> Sửa
            </a>
            <a
              href="/webbanhang/Product/delete/<?php echo $product->id; ?>"
              class="btn btn-danger btn-sm w-100 fw-bold rounded-pill transition-all hover-btn delete-btn"
              onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');"
            >
              <i class="fas fa-trash me-1"></i> Xóa
            </a>
          <?php endif; ?>

          <!-- Cập nhật liên kết "Thêm vào giỏ" -->
          <a
            href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>"
            class="btn btn-primary btn-sm w-100 fw-bold rounded-pill transition-all hover-btn"
          >
            <i class="fas fa-cart-plus me-1"></i> Thêm vào giỏ
          </a>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>

<?php include 'app/views/shares/footer.php'; ?>
