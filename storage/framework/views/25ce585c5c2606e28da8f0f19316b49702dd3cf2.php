

<?php $__env->startSection('content'); ?>
<main class="container main-crear-curso text-md-center">
	<!-- Title -->
	<h1 class="mt-4 mt-sm-5 text-purple mb-xl-4">Sube aquí tu archivo</h1>
	<img class="subir-archivo_img" src="img/ToyFace14.png" alt="">
	<div class="mt-md-4 mt-4">
		<form class="mx-md-auto" action="<?php echo e(route('entregas.store')); ?>" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<input type="file" name="file" enctype required>
		    <input type="text" class="d-none" name="tarea_id" value="<?php echo e($tarea->id); ?>">
			<input type="submit"  id="submit" class="btn btn-primary bg-yellow text-dark">
		</form>
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Prueba\resources\views/entregas/show.blade.php ENDPATH**/ ?>