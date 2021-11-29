<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Leads</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.leads.index')); ?>">Leads Cadastrados</a>
                        </li>
                        <li class="breadcrumb-item active">Novo</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <?php if($errors->all()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__env->startComponent('admin.components.message',['type' => 'danger']); ?>
                            <?php echo e($error); ?>

                        <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if(session()->exists('message')): ?>
                    <?php $__env->startComponent('admin.components.message',['type' => session()->get('type')]); ?>
                        <?php echo e(session()->get('message')); ?>

                    <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                <?php endif; ?>


                <div class="card-body">
                    <form action="<?php echo e(route('admin.leads.update', ['lead' => $lead->id])); ?>" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">


                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="id" value="<?php echo e($lead->id); ?>">

                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                   aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                    <span class="d-none d-sm-block">Informações</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Anotações</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="<?php echo e(old('name') ?? $lead->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" class="form-control" id="form-row-email-input"
                                                   value="<?php echo e(old('email') ?? $lead->email); ?>">
                                        </div>
                                    </div>


                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    


                                </div>

                                <div class="row">


                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="date_of_birth" class="form-label">Data de Nascimento</label>
                                            <input name="date_of_birth" class="form-control" type="date"
                                                   value="<?php echo e(date('Y-m-d', strtotime(old('date_of_birth') )) ??  date('Y-m-d', strtotime($lead->date_of_birth))); ?>"
                                                   id="example-date-input">

                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="telephone" class="form-label">Telefone</label>
                                            <input name="telephone" id="input-mask" class="form-control input-mask"
                                                   data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                                                   value="<?php echo e(old('telephone') ?? $lead->telephone); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cell" class="form-label">Celular</label>
                                            <input name="cell" id="input-mask" class="form-control input-mask"
                                                   data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                                                   value="<?php echo e(old('cell') ?? $lead->cell); ?>">
                                        </div>
                                    </div>

                                </div>

                                <h3 class="mb-3">Referência</h3>

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="product_id" class="form-label">Produto</label>
                                            <select name="product_id" class="form-select" <?php echo e(($lead->product_id == null ? 'disabled' : '')); ?>>
                                                <option selected>Escolha...</option>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($product->id); ?>" <?php echo e((old('product_id') ? 'selected' : ($lead->product_id == $product->id ? 'selected' : ''))); ?>><?php echo e($product->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="product_text" class="form-label">Produto Escrito</label>
                                            <input name="product_text" class="form-control" id="form-row-email-input"
                                                   value="<?php echo e(old('product_text') ?? $lead->product_text); ?>" <?php echo e(($lead->product_id != null ? 'disabled' : '')); ?>>
                                        </div>
                                    </div>


                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    


                                </div>

                            </div>


                            <div class="tab-pane" id="messages1" role="tabpanel">
                                <h3 class="mb-3">Anotações</h3>
                                <div class="row">


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" class="my-editor"
                                                  name="description"><?php echo e(old('description') ?? $lead->description); ?></textarea>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Alterar</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>


        $(function () {

            $('input[name="cover"]').change(function (files) {

                $('.content_image').text('');

                $.each(files.target.files, function (key, value) {
                    var reader = new FileReader();
                    reader.onload = function (value) {
                        $('.content_image').append(
                            '<div class="col-md-4">' +
                            '<img class="img-fluid" ' +
                            'src="' + value.target.result + '">' +
                            '</img>' +
                            '</div>');
                    };
                    reader.readAsDataURL(value);
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rivierafull\resources\views/admin/lead/edit.blade.php ENDPATH**/ ?>