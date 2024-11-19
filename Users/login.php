<?php $this->disableAutoLayout(); ?>

<!DOCTYPE html>
<html lang="en">

<?= $this->element("header"); ?>

<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="bg-light">

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <?= $this->Flash->render() ?>
        <h3 class="text-center mb-4">Login</h3>
        
        <?= $this->Form->create(null, ['url' => '/users/login']) ?>
        <fieldset>
            <legend class="sr-only">Silahkan Login Dan Masukkan Akun Mu</legend>

            <div class="form-group mb-3">
                <label for="nisn" class="form-label">
                    <i class="bi bi-person"></i> NISN
                </label>
                <?= $this->Form->control('nisn', [
                    'required' => true,
                    'label' => false,
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan NISN',
                    'autocomplete' => 'off'
                ]) ?>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">
                    <i class="bi bi-lock"></i> Password
                </label>
                <?= $this->Form->control('password', [
                    'required' => true,
                    'label' => false,
                    'class' => 'form-control',
                    'placeholder' => 'Masukkan Password',
                    'autocomplete' => 'off'
                ]) ?>
            </div>

        </fieldset>

        <div class="mb-3">
            <p class="text-center">Belum punya akun? 
                <?= $this->Html->link("Daftar", ['action' => 'register'], ['class' => 'text-primary']) ?>
            </p>
        </div>

        <div class="text-center">
            <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary w-100']); ?>
        </div>

        <?= $this->Form->end() ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
