<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('Nombre')); ?>

            <?php echo e(Form::text('Nombre', $pokedex->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('Nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
    <?php echo e(Form::label('Tipo', __('Tipo'))); ?>

    <?php echo e(Form::select('Tipo', ['fuego' => __('Fuego'), 'agua' => __('Agua'), 'eléctrico' => __('Eléctrico')], $pokedex->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : '')])); ?>

    <?php echo $errors->first('Tipo', '<div class="invalid-feedback">:message</div>'); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('Tamaño', __('Tamaño'))); ?>

    <?php echo e(Form::select('Tamaño', ['grande' => __('Grande'), 'mediano' => __('Mediano'), 'pequeño' => __('Pequeño')], $pokedex->Tamaño, ['class' => 'form-control' . ($errors->has('Tamaño') ? ' is-invalid' : '')])); ?>

    <?php echo $errors->first('Tamaño', '<div class="invalid-feedback">:message</div>'); ?>

</div>
        <div class="form-group">
            <?php echo e(Form::label('Peso')); ?>

            <?php echo e(Form::text('Peso', $pokedex->Peso, ['class' => 'form-control' . ($errors->has('Peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso'])); ?>

            <?php echo $errors->first('Peso', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\pokemon\resources\views/pokedex/form.blade.php ENDPATH**/ ?>