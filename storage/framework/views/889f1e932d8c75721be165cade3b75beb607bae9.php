
<?php $__env->startSection('content'); ?>
<main class="container main-crear-curso text-md-center">
	<!-- Title -->
	<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Editar Tarea</h1>
	<div class="mt-md-4 mt-4">
		<form class="mx-md-auto" action="<?php echo e(route('admintareas.update', $tarea->id)); ?>" method="POST" enctype="multipart/form-data">
			<?php echo method_field('PATCH'); ?>
			<?php echo csrf_field(); ?>
			<input class="d-block" type="text" name="title" placeholder="Título" value="<?php echo e($tarea->title); ?>">
			<textarea name="description" rows="2" cols="50" placeholder="Descripción"><?php echo e($tarea->description); ?></textarea>
			<label class="d-block text-left">Fecha de Entrega</label>
			<input type="date" name="date" value="<?php echo e($tarea->date); ?>">
			<input type="time" name="time" value="<?php echo e($tarea->time); ?>">
			<?php if(!$tarea->file==NULL): ?>
			<label for="file" class="d-block text-left">Archivo Actual: </label>
			<a href="<?php echo e(asset("tareas/$tarea->file")); ?>"><?php echo e($tarea->file); ?></a>
			<label for="file" class="d-block text-left">Modificar Archivo: </label>
			<input type="file" name="file" enctype>
			<?php else: ?>
			<label for="file" class="d-block text-left">Archivo Opcional: </label>
			<input type="file" name="file" enctype>
			<?php endif; ?>
			<input type="submit" value="Guardar" id="submit" class="btn btn-primary bg-yellow text-dark">

		</form>
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Prueba\resources\views/admin/tareas/edit.blade.php ENDPATH**/ ?>