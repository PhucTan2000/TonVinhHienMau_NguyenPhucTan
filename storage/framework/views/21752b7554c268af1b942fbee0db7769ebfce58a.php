

<?php $__env->startSection('title', 'Sửa/Xóa Tài Khoản'); ?>

<?php $__env->startSection('content'); ?>

      <div id="main-content">
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sửa & Xóa</h3>
                <p class="text-subtitle text-muted">Sửa, Xóa thông tin tài khoản cán bộ.</p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa & Xóa</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <section class="bootstrap-select">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="row">
                        <div class="text-center mt-4 mb-5">
                          <h3>DANH SÁCH TÀI KHOẢN CỦA CÁN BỘ</h3>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-bordered mb-0">
                            <thead>
                              <tr>
                                <th>Số thứ tự</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Tài khoản</th>
                                <th>Email</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($user->Id); ?></td>
                                <td class="text-bold-500"><?php echo e($user->Name); ?></td>
                                <td><?php echo e($user->Phone); ?></td>
                                <td><?php echo e($user->UserName); ?></td>
                                <td><?php echo e($user->Email); ?></td>
                                <td>
                                  <a href="/UpdateTaiKhoan/<?php echo e($user->Id); ?>" class="btn btn-primary btn-size">Sửa</a>
                                </td>
                                <td>
                                  <a href="/XoaTaiKhoan/<?php echo e($user->Id); ?>" class="btn btn-danger btn-size">Xóa</a>
                                </td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Bootstrap Select end -->
        </div>
      </div>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/SuaXoaThongTin.blade.php ENDPATH**/ ?>