

<?php $__env->startSection('title', 'Cập nhập thông tin'); ?>

<?php $__env->startSection('content'); ?>

<div id="main-content">
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Cập nhập thông tin</h3>
          <p class="text-subtitle text-muted">Cập nhập thông tin tìm kiếm tôn vinh.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cập nhập thông tin</li>
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
                    <h3>CẬP NHẬP THÔNG TIN</h3>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body">
                          <form class="form border border-secondary" method="POST" action="/TimKiemTonVinh/<?php echo e($pep->Id); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-body">
                              <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" class="form-control mt-2 py-2" name="hoten" value="<?php echo e($pep->HoTen); ?>">
                                <?php if($errors->has('hoten')): ?>
                                <?php echo e($errors->first('hoten')); ?>

                                <?php endif; ?>
                              </div>
                              <div class="form-group">
                                <label>Ngày sinh</label>
                                <input type="text" class="form-control mt-2 py-2 " name="ngaysinh" value="<?php echo e($pep->NgaySinh); ?>">
                                <?php if($errors->has('ngaysinh')): ?>
                                <?php echo e($errors->first('ngaysinh')); ?>

                                <?php endif; ?>
                              </div>
                              <div class="form-group">
                                <label>Nơi làm việc</label>
                                <input type="text" class="form-control mt-2 py-2 " name="noilamviec" value="<?php echo e($pep->NoiLamViec); ?>">
                                <?php if($errors->has('noilamviec')): ?>
                                <?php echo e($errors->first('noilamviec')); ?>

                                <?php endif; ?>
                              </div>
                              <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control mt-2 py-2 " name="sdt" value="<?php echo e($pep->SDT); ?>">
                                <?php if($errors->has('sdt')): ?>
                                <?php echo e($errors->first('sdt')); ?>

                                <?php endif; ?>
                              </div>
                              <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control mt-2 py-2 " name="diachi" value="<?php echo e($pep->DiaChi); ?>">
                                <?php if($errors->has('diachi')): ?>
                                <?php echo e($errors->first('diachi')); ?>

                                <?php endif; ?>
                              </div>
                            </div>
                            <div class="form-actions d-flex justify-content-end mt-4">
                              <a href="/TimKiemTonVinh">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/CapNhatThongTin.blade.php ENDPATH**/ ?>