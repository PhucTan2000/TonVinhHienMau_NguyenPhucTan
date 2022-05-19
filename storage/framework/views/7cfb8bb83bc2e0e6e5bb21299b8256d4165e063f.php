

<?php $__env->startSection('title', 'Sửa Tài Khoản'); ?>

<?php $__env->startSection('content'); ?>

      <div id="main-content">
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sửa tài khoản</h3>
                <p class="text-subtitle text-muted">Sửa thông tin tài khoản cho cán bộ.</p>
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
                          <h3>SỬA THÔNG TIN TÀI KHOẢN</h3>
                        </div>
                        <div class="col-md-6 col-12">
                          <div class="card">
                            <div class="card-content">
                              <div class="card-body">
                                <form class="form border border-secondary" method="POST" action="/UpdateTaiKhoan/<?php echo e($user->Id); ?>" enctype="multipart/form-data">
                                  <?php echo e(csrf_field()); ?>

                                  <div class="form-body">
                                    <div class="form-group">
                                      <label>Họ Tên</label>
                                      <input type="text" class="form-control mt-2 py-2" name="name" value="<?php echo e($user->Name); ?>">
                                      <?php if($errors->has('name')): ?>
                                      <?php echo e($errors->first('name')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label>Số Điện Thoại</label>
                                      <input type="text" class="form-control mt-2 py-2 " name="phone" value="<?php echo e($user->Phone); ?>">
                                      <?php if($errors->has('phone')): ?>
                                      <?php echo e($errors->first('phone')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label>Tên Tài Khoản</label>
                                      <input type="text" class="form-control mt-2 py-2 " name="username" value="<?php echo e($user->UserName); ?>">
                                      <?php if($errors->has('username')): ?>
                                      <?php echo e($errors->first('username')); ?>

                                      <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="text" class="form-control mt-2 py-2 " name="email" value="<?php echo e($user->Email); ?>">
                                      <?php if($errors->has('email')): ?>
                                      <?php echo e($errors->first('email')); ?>

                                      <?php endif; ?>
                                    </div>
                                  </div>
                                  <div class="form-actions d-flex justify-content-end mt-4">
                                    <a href="/UpdateTaiKhoan/<?php echo e($user->Id); ?>">
                                      <button class="btn btn-light-primary me-2">Hủy bỏ
                                      </button>
                                    </a>
                                    <button type="submit" class="btn btn-primary ">Cập nhập
                                    </button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/SuaThongTin.blade.php ENDPATH**/ ?>