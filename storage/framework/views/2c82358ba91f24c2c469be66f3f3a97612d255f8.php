


<?php $__env->startSection('title', 'Import Cơ Sở'); ?>

<?php $__env->startSection('content'); ?>

        <div id="main-content">
          <div class="page-heading">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                  <h3>Cơ sở</h3>
                  <p class="text-subtitle text-muted">Import file excel từ cơ sở</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.html">Trang chủ</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Cơ sở</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section id="custom-file-input">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- Button Import -->
                    <div class="card-header">
                      <h4 class="card-title">IMPORT</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="row">
                        <?php if(Session::has('message')): ?>
                          <div class="alert alert-danger" role="alert"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                          <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donvi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 mb-3">
                            <?php echo e($donvi->TenDonVi); ?>

                              <form method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="input-group">
                                  <input type="hidden" name="Id" value="<?php echo e($donvi->Id); ?>"/>
                                  <input
                                    type="file"
                                    class="form-control"
                                    id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04"
                                    aria-label="Upload"
                                    name="myFile"
                                    accept=".xls,.xlsx"
                                  />
                                  <button class="btn btn-primary" type="submit" id="import-quynhon">
                                    View
                                  </button>
                                </div>
                              </form>
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/ImportCoSo.blade.php ENDPATH**/ ?>