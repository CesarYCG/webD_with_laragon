
<?php $__env->startSection('content'); ?>
	<main class="container">
		<!-- Title -->
		<div class="home-title row">
			<div class="home-title_text pl-5 mr-5">
				<h1 class="mt-4 mt-sm-5 text-purple ">Mis Calificaciones</h1>
			</div>
			<div class="home-title_foto d-none d-md-block">
				<img src="img/ToyFace3.png" alt="">
			</div>
		</div>
		<section class="entregas mt-5">
			<table class="table table-hover ml-4 mt-4">
				<thead class="bg-lpurple">
					<tr>
						<th scope="col">Tarea</th>
						<th scope="col">Comentario</th>
						<th scope="col">Calificación</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $entregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row"><?php echo e($entrega->tarea->title); ?></th>
						<td><?php echo e($entrega->comments); ?></td>
						<td><?php echo e($entrega->cal); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</section>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Prueba\resources\views/cal.blade.php ENDPATH**/ ?>