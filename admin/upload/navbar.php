<?php
/* ฟังก์ชันที่ใช้ตรวจสอบว่า ไฟล์ของเพจปัจจุบันตรงกับเมนูใด
* เพื่อจะทำให้เมนูของเพจปัจจุบันอยู่ในสถานะ active (ถูกเลือก) */
 function is_active(...$file) {
       $path = $_SERVER['PHP_SELF'];   //ห้ามใช้: __FILE__
       foreach ($file as $f) {
             if (stripos($path, $f) != null) {
                  return ' active';         //คลาส active ของ Bootstrap
            }
       }
       return '';
 }
?>

<!--  navbar ของ bootstrap โดยให้ขยายออกในหน้าจอขนาด md
        และซ่อนในหน้าจอเล็กว่า md (เปิดแสดงโดยคลิกที่ไอคอน hamburger)  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand text-warning" href="admin.php">โครงการ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
            <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-2  mt-md-0">
                  <li class="nav-item<?= is_active('/admin.php') ?>">
                        <a class="nav-link" href="admin.php">หน้าแรก</a>
                  </li>
                  <li class="nav-item<?= is_active('/order.php') ?>">
                        <a class="nav-link" href="#">รายการคนจองทริป</a>
                  </li>
                  <li class="nav-item<?= is_active('/query.php') ?>">
                        <a class="nav-link" href="query.php">จัดการโครงการ</a>
                  </li>
                  <li class="nav-item<?= is_active('/insertproduct.php') ?>">
                        <a class="nav-link" href="insertproduct.php">เพิ่มข้อมูลโครงการ</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="logout.php">ออกจากระบบ</a>
                  </li>
            </ul>
      </div>
</nav>