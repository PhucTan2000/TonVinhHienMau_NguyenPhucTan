

<?php $__env->startSection('title', 'Import Bệnh Viện'); ?>

<?php $__env->startSection('content'); ?>

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Bệnh viện</h3>
                                <p class="text-subtitle text-muted">Import file excel từ bệnh viện</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Trang chủ</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Bệnh viện</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section id="custom-file-input">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">IMPORT</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="col-md-6 mb-1">
                                                <?php if(isset($status)): ?>
                                                    <div class="alert alert-danger" role="alert"><?php echo e($message); ?>

                                                    </div>
                                                <?php endif; ?>
                                                <?php if(Session::has('success')): ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <?php echo e(Session::get('success')); ?></div>
                                                <?php endif; ?>
                                                <form method="post" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>

                                                    <div class="input-group">
                                                        <input type="file" class="form-control" id="myfile"
                                                            name="myfile" accept=".xls,.xlsx"
                                                            aria-describedby="inputGroupFileAddon04"
                                                            aria-label="Upload" />
                                                        <button class="btn btn-primary" type="submit"
                                                            id="btn-import-bv">
                                                            Upload
                                                        </button>
                                                    </div>
                                                </form>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TonVinhHienMau\resources\views/ImportBenhVien.blade.php ENDPATH**/ ?>