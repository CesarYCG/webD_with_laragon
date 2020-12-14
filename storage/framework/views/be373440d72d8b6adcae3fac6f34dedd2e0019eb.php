<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/mediaqueries.css')); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
     <link rel="shortcut icon" href="<?php echo e(asset('img/casa-morada.png')); ?>">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <title>Gen 41</title>
</head>
<body class="body-welcome p-3 center">
    <div class="welcome-foto welcome-foto_login mx-auto mt-3 mt-md-5 mt-lg-3">
    </div>
    <h1 class="text-center mt-4 pt-2"><span>¡</span>Bienvenido <span>al curso de Diseño Web!</span></h1>
    <h2 class="text-center mt-4">Inicia sesión</h2>
    <form class="container d-flex mt-3 mt-md-3" method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?> <!-- Valida la peticion -->
        <!-- Email -->
        <input id="email" placeholder="E-mail" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <!-- Contraseña -->
        <input id="password" placeholder="Contraseña" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <!-- Remember me -->
        <label id="remember-me" class="d-flex" for="remember-me"><input class="form-check-input" type="checkbox" name="remember" id="remember">Recordarme
        </label>
        <a href="<?php echo e(route('register')); ?>" class="text-right text-purple form-label-link">¿No tienes cuenta? Regístrate aqui</a>
        <input type="submit" value="Entrar" id="submit" class="btn btn-secondary mb-4 mx-auto mt-3 mt-md-4">
    </form>
</body>
<script src="<?php echo e(('js/app.js')); ?>"></script>
</html><?php /**PATH E:\laragon\www\Prueba\resources\views/welcome.blade.php ENDPATH**/ ?>