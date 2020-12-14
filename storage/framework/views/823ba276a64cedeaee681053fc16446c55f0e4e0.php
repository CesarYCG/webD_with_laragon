<?php $__env->startSection('content'); ?>
<main class="container">
    <!-- Title -->
    <div class="home-title row">
        <div class="home-title_text pl-3 mr-5">
            <h1 class="mt-4 mt-sm-5 text-purple ">Diseño Web</h1>
            <p>Gen41</p>
        </div>
        <div class="home-title_foto ">
            <img src="img/ToyFace17.png" alt="">
        </div>
    </div>
    <hr>
    <h2 class="pendientesh2 text-purple mt-2 text-orange">Tareas pendientes</h2>
    <!-- Cursos <0 -->
        <div class="cursos-index mt-4">
            <div class="row row-cols-1 row-cols-lg-2 ">
                <!-- Card 1 -->
                <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $entregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($entrega->tarea_id != $tarea->id): ?>
                <div class="col mb-4">
                    <div class="card h-100 bg-yellow p-3 p-xl-4">
                        <div class="home-cursos_titulo d-flex">
                            <div class="cursos-card_header">
                                <h2 class="card-title pt-1 pl-2"><?php echo e($tarea->title); ?></h2>
                                <h3 class="pl-2"><?php echo e($tarea->date); ?> a las <?php echo e($tarea->time); ?></h3>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text"><?php echo e($tarea->description); ?></a>
                        <a class="card-text w-50" href="<?php echo e(asset("tareas/$tarea->file")); ?>" ><?php echo e($tarea->file); ?></a>
                        <a href="<?php echo e(route('entregas.show', $tarea->id)); ?>" class="btn btn-success card-entregar mt-5">Entregar</a>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Prueba\resources\views/home.blade.php ENDPATH**/ ?>