
<?php $__env->startSection('content'); ?>
<main class="container pb-5 mb-5">
	<!-- Title -->
	<div class="home-title row">
		<div class="home-title_text pl-3 mr-5">
			<h1 class="mt-4 mt-sm-5 text-purple "><?php echo e($tarea->title); ?></h1>
		</div>
	</div>
	<hr>
	<!-- Tarea -->
	<div class="cursos-index cursoadmin-index mt-4">
		<!-- Card 1 -->
		<div class="col mb-4">
			<div class="card h-100 bg-yellow p-3 p-xl-4">
				<div class="home-cursos_titulo">
					<h2 class="card-title pt-1 pl-2">Preguntas previas</h2>
					<h3 class="pl-2">14/02/20 a las 00:00</h3>
				</div>
				<hr>
				<p class="card-text">Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Reiciendis eius exercitationem voluptatibus tempora quo vitae totam sed. Temporibus placeat, labore.</p>
				<a target="_blank" class="card-text pb-3" href="">Archivo.zip</a>
				<div class="cursoadmin-index_botones d-flex">
					<a class="bg-lpurple mr-md-3" href="">Editar</a>
					<form>
						<input type="submit" class="eliminar bg-danger mr-md-3" href="" value="Eliminar">
					</form>
				</div>
			</div>
		</div>
	</div>
	<section class="entregas mt-5">
		<h1>Entregas</h1>
		<table class="table table-hover ml-4 mt-4">
			<thead class="bg-lpurple">
				<tr>
					<th scope="col">Usuario</th>
					<th scope="col">Archivo</th>
					<th scope="col">Comentario</th>
					<th scope="col">Calificación</th>
					<th scope="col">Guardar</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $entregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($entrega->tarea_id == $tarea->id): ?>
				<tr>
					<!--<th scope="row">1</th>-->
					<td><?php echo e($entrega->user->name); ?></td>
					<td><a href="<?php echo e(asset("entregas/$entrega->file")); ?>"></a> <?php echo e($entrega->file); ?> </td>
					<form action="<?php echo e(route('entregas.update', $entrega->id)); ?>" method="POST">
						<?php echo method_field('PATCH'); ?>
						<?php echo csrf_field(); ?>
						<td>
							<textarea name="comments" id=""><?php echo e($entrega->comments); ?></textarea>
						</td>
						<td>
							<input type="number" min="0" max="10" name="cal" value="<?php echo e($entrega->cal); ?>">
						</td>
						<td>
							<input class="bg-success" type="submit" value="Guardar">
						</td>
					</form>
				</tr>
				<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</section>
	

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Prueba\resources\views/admin/tareas/show.blade.php ENDPATH**/ ?>