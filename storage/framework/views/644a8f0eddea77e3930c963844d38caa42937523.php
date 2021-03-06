<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/app.css')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(url('assets/images/favicon.svg')); ?>" type="image/x-icon" />
</head>

<body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl ms-3">
                <a href="<?php echo e(url('/Index')); ?>">
                  <img src="<?php echo e(url('assets/images/faces/1.jpg')); ?>" alt="Logo" srcset="" />
                </a>
              </div>
              <div class="ms-3 name">
                <h5 class="font-bold"><?php echo e(Session::get('name')); ?></h5>
                <h6 class="text-teal mb-0"><?php echo e('@'.Session::get('username')); ?></h6>
              </div>
              <div class="toggler ms-2">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item <?php echo $__env->yieldContent('trang-chu'); ?>">
                <a href="<?php echo e(url('/Index')); ?>" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Trang ch???</span>
                </a>
              </li>

              <li class="sidebar-item has-sub <?php echo e(Request::is('ImportCoSo')||Request::is('TimKiemTonVinh') ? ' active' : ''); ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Qu???n l?? t??n vinh</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item<?php echo e(Request::is('ImportCoSo') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/ImportCoSo')); ?>">Ki???m Duy???t T??n Vinh</a>
                  </li>
                  <li class="submenu-item<?php echo e(Request::is('TimKiemTonVinh') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/TimKiemTonVinh')); ?>"> T??m ki???m th??ng tin </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub <?php echo e(Request::is('TaoMoiTonVinh')||Request::is('XemKetQua') ? ' active' : ''); ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-hexagon-fill"></i>
                  <span>L???ch s??? t??n vinh</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item<?php echo e(Request::is('TaoMoiTonVinh') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/TaoMoiTonVinh')); ?>">T???o M???i T??n Vinh</a>
                  </li>
                  <li class="submenu-item<?php echo e(Request::is('XemKetQua') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/XemKetQuaTonVinh')); ?>">Xem K???t Qu???</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub <?php echo e(Request::is('ImportBenhVien') ? ' active' : ''); ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-droplet-fill"></i>
                  <span>Qu???n l?? ngu???n m??u</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item<?php echo e(Request::is('ImportBenhVien') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/ImportBenhVien')); ?>">Import T??? B???nh vi???n</a>
                  </li>
                </ul>
              </li>


              <li class="sidebar-item has-sub <?php echo e(Request::is('TaoTaiKhoan')||Request::is('DoiMatKhau')||Request::is('UpdateTaiKhoan') ? ' active' : ''); ?>">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Qu???n l?? t??i kho???n</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item<?php echo e(Request::is('TaoTaiKhoan') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/TaoTaiKhoan')); ?>">T???o t??i kho???n</a>
                  </li>
                  <li class="submenu-item<?php echo e(Request::is('DoiMatKhau') ? ' active' : ''); ?>">
                    <a href="<?php echo e(url('/DoiMatKhau')); ?>">?????i m???t kh???u</a>
                  </li>
                  <li class="submenu-item<?php echo e(Request::is('UpdateTaiKhoan') ? ' active' : ''); ?> ">
                    <a href="<?php echo e(url('/UpdateTaiKhoan')); ?>">S???a/X??a t??i kho???n</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="<?php echo e(url('/Logout')); ?>" class="sidebar-link">
                  <i class="bi bi-arrow-bar-right"></i>
                  <span>????ng xu???t</span>
                </a>
              </li>
            </ul>
          </div>
          <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
          </button>
        </div>
      </div>

        <div id="main" class="layout-navbar">
            <header class="mb-3">
                <nav class="navbar navbar-expand navbar-light">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-envelope bi-sub fs-4 text-gray-600"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-bell bi-sub fs-4 text-gray-600"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"><?php echo e(Session::get('name')); ?></h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="<?php echo e(url('assets/images/faces/1.jpg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?php echo e(Session::get('name')); ?>!</h6>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-mid bi bi-gear me-2"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(url('/Logout')); ?>">
                                            <i class="icon-mid bi bi-box-arrow-left me-2"> </i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script src="<?php echo e(url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/layouts/app.blade.php ENDPATH**/ ?>