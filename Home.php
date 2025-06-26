<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ</title>
  <style>
    html, body {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Sử dụng font chữ đẹp hơn */
}

.container {
  width: 100%;
  height: 100%;
  background-color: #f5f5f5; /* Màu nền xám nhạt */
}

.header {
  background-color: #3498db; /* Màu xanh dương nhạt */
  color: #fff;
  padding: 20px;
  text-align: left;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
}

.header h1 {
  margin: 0;
}

.sidebar {
  float: left;
  width: 250px;
  background-color: #2980b9; /* Màu xanh dương đậm */
  color: #fff;
  height: 100%;
  padding: 20px;
}

.sidebar a {
  display: block;
  color: #fff;
  text-decoration: none;
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 5px; /* Bo tròn góc */
  transition: background-color 0.3s ease; /* Hiệu ứng hover */
}

.sidebar a:hover {
  background-color: #34495e; /* Màu xanh đậm khi hover */
}

.sidebar ul {
  display: none;
  list-style: none;
  padding: 0;
  margin-top: 10px;
}

.sidebar ul li {
  margin-bottom: 5px;
}

.sidebar a.active + ul {
  display: block;
}

.content {
  margin-left: 270px;
  padding: 20px;
  height: 100%;
  background-color: #fff;
  color: #333;
}

.menu-icon {
  width: 20px;
  height: 20px;
  vertical-align: middle;
  margin-right: 10px;
}
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Chào mừng ADMIN</h1> 
    </div>

    <div class="sidebar">
      <a href="#">
        <img src="MenuIcon_TrangChu.png" alt="Trang Chủ" class="menu-icon">
        Trang Chủ
      </a>
      <a href="#" class="menu-toggle"> 
        <img src="MenuIcon_Menu.png" alt="Menu" class="menu-icon">
        Menu
      </a>
      <ul>
  <li><a href="quanly_ho_so_nhan_su.html">Quản lý hồ sơ nhân sự</a></li>
  <li><a href="quanly_phong_ban.html">Quản lý phòng ban</a></li>
  <li><a href="quanly_lich_su_cong_tac.html">Quản lý lịch sử công tác</a></li>
  <li><a href="quanly_nghi_phep.html">Quản lý nghỉ phép</a></li>
  <li><a href="tim_kiem_tra_cuu.html">Tìm kiếm và tra cứu thông tin nhân sự</a></li>
</ul>
      <a href="#">
        <img src="MenuIcon_ThongBao.png" alt="Thông Báo" class="menu-icon">
        Thông Báo
      </a>
      <a href="#">
        <img src="MenuIcon_DanhGia.png" alt="Xem đánh giá" class="menu-icon">
        Xem đánh giá
      </a>
    </div>

    <div class="content">
      </div>
  </div>

  <script>
    // JavaScript để xử lý menu (giống như trước)
    const menuToggle = document.querySelector('.menu-toggle');
    const menuList = menuToggle.nextElementSibling;

    menuToggle.addEventListener('click', function() {
      this.classList.toggle('active');
    });
  </script>
</body>
</html>