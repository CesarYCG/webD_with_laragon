
<?php $__env->startSection('content'); ?>
<main class="container">
	<!-- Title -->
	<div class="home-title row">
		<div class="home-title_text pl-3 mr-5">
			<h1 class="mt-4 mt-sm-5 text-purple ">Tareas</h1>
			<a href="<?php echo e(route('admintareas.create')); ?>">Agregar tarea</a>
		</div>
	</div>
	<hr>
	<!-- Cursos <0 -->
	<div class="cursos-index cursoadmin-index mt-4">
		<div class="row row-cols-1 row-cols-lg-2 ">
			<!-- Card 1 -->
			<?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col mb-4">
				<div class="card h-100 bg-yellow p-3 p-xl-4">
					<div class="home-cursos_titulo">
						<h2 class="card-title pt-1 pl-2"><?php echo e($tarea->title); ?></h2>
						<h3 class="pl-2"><?php echo e($tarea->date); ?> a las <?php echo e($tarea->time); ?></h3>
					</div>
					<hr>
					<p class="card-text"><?php echo e($tarea->description); ?></p>
					<a class="card-text pb-3" target="_blank" href="<?php echo e(asset("tarea/$tarea->file")); ?>"><?php echo e($tarea->file); ?></a>
					<div class="cursoadmin-index_botones d-flex">
						<a class="bg-lpurple mr-md-3" href="<?php echo e(route('admintareas.show', $tarea->id)); ?>">Ver</a>
						<a class="bg-lpurple mr-md-3" href="<?php echo e(route('admintareas.edit', $tarea->id)); ?>">Editar</a>
						<form action="<?php echo e(route('admintareas.destroy', $tarea->id)); ?>" method="POST">
							<?php echo method_field('DELETE'); ?>
							<?php echo csrf_field(); ?>
						<input type="submit" class="eliminar bg-danger mr-md-3" href="" value="Eliminar">
						</form>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Prueba\resources\views/admin/tareas/index.blade.php ENDPATH**/ ?>