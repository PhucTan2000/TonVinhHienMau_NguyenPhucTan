

<?php $__env->startSection('title', 'Tạo Tài Khoản'); ?>

<?php $__env->startSection('content'); ?>

      <div id="main-content">
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tạo tài khoản</h3>
                <p class="text-subtitle text-muted">Tạo tài khoản mới cho cán bộ.</p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tạo tài khoản</li>
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
                      <div class="row justify-content-center">
                        <div class="text-center mt-4 mb-4">
                          <h3>TẠO TÀI KHOẢN MỚI</h3>
                        </div>
                        <?php if(session('message')): ?>
                        <span class="aler aler-danger">
                          <strong><?php echo e(session('message')); ?></strong>
                        </span>
                        <?php endif; ?>
                        <div class="col-md-6 col-12">
                          <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <form class="form border border-secondary" method="POST" enctype="multipart/form-data">
                                  <?php echo e(csrf_field()); ?>

                                  <div class="form-body">
                                    <div class="form-group">
                                      <label>Họ Tên</label>
                                      <input type="text" class="form-control mt-2 py-2" name="name">
                                      <?php if($errors->has('name')): ?>
                                      <?php echo e($errors->first('name')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="text" class="form-control mt-2 py-2" name="email">
                                      <?php if($errors->has('email')): ?>
                                      <?php echo e($errors->first('email')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label>Số Điện Thoại</label>
                                      <input type="text" class="form-control mt-2 py-2" name="phone">
                                      <?php if($errors->has('phone')): ?>
                                      <?php echo e($errors->first('phone')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label>Tên Tài Khoản</label>
                                      <input type="text" class="form-control mt-2 py-2" name="username">
                                      <?php if($errors->has('username')): ?>
                                      <?php echo e($errors->first('username')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label for="password-vertical">Mật khẩu mới</label>
                                      <input type="password" id="password" class="form-control mt-2 py-2" name="password" placeholder="********">
                                      <?php if($errors->has('password')): ?>
                                      <?php echo e($errors->first('password')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label for="password-vertical">Xác nhận mật khẩu</label>
                                      <input type="password" id="password-confirm" class="form-control mt-2 py-2" name="password_confirm" placeholder="********">
                                      <?php if($errors->has('password_confirm')): ?>
                                      <?php echo e($errors->first('password_confirm')); ?>

                                      <?php endif; ?>
                                    </div>
                                  </div>
                                  <div class="form-actions d-flex justify-content-end mt-4">
                                    <button type="reset" class="btn btn-light-primary me-2">Hủy bỏ</button>
                                    <button type="submit" class="btn btn-primary ">Lưu</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/TaoTaiKhoan.blade.php ENDPATH**/ ?>