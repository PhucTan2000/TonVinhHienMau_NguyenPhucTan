

<?php $__env->startSection('title', 'Đổi Mật Khẩu'); ?>

<?php $__env->startSection('content'); ?>

        <div id="main-content">
          <div class="page-heading">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                  <h3>Đổi mật khẩu</h3>
                  <p class="text-subtitle text-muted">Thay đổi mật khẩu của cán bộ.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
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
                            <h3>THAY ĐỔI MẬT KHẨU</h3>
                          </div>
                          <?php if(session('message')): ?>
                          <strong style="text-align:center"><?php echo e(session('message')); ?></strong>
                          <?php endif; ?>
                          <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="<?php echo e(url('/DoiMatKhau')); ?>" class="form border border-secondary" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="password-vertical">Mật khẩu hiện tại</label>
                                                    <input type="password" id="password-vertical"
                                                        class="form-control mt-2 py-2" name="password"
                                                        placeholder="********">
                                                    <?php if($errors->has('password')): ?>
                                                    <?php echo e($errors->first('password')); ?>

                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password-vertical">Mật khẩu mới</label>
                                                    <input type="password" id="password-vertical"
                                                        class="form-control mt-2 py-2" name="new_password"
                                                        placeholder="********">
                                                    <?php if($errors->has('new_password')): ?>
                                                    <?php echo e($errors->first('new_password')); ?>

                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password-vertical">Xác nhận mật khẩu</label>
                                                    <input type="password" id="password-vertical"
                                                        class="form-control mt-2 py-2" name="password_confirmation"
                                                        placeholder="********">
                                                    <?php if($errors->has('password_confirmation')): ?>
                                                    <?php echo e($errors->first('password_confirmation')); ?>

                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-actions d-flex justify-content-end mt-4">
                                                <button type="reset" class="btn btn-light-primary me-2" onclick="window.location.href='/Index'">Hủy bỏ</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/DoiMatKhau.blade.php ENDPATH**/ ?>