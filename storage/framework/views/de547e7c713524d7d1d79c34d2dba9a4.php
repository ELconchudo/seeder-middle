<?php $__env->startSection('template_title'); ?>
    <?php echo e($pokedex->name ?? "{{ __('Show') Pokedex"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Pokedex</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('pokedexes.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($pokedex->Nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            <?php echo e($pokedex->Tipo); ?>

                        </div>
                        <div class="form-group">
                            <strong>Tamaño:</strong>
                            <?php echo e($pokedex->Tamaño); ?>

                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            <?php echo e($pokedex->Peso); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pokemon\resources\views/pokedex/show.blade.php ENDPATH**/ ?>