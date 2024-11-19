<?php $this->disableAutoLayout(); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $groups
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><?= __('Add User') ?></h4>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($user, ['type' => 'file']) ?>
                    <fieldset>
                        <div class="form-group">
                            <?= $this->Form->control('nisn', [
                                'class' => 'form-control', 
                                'label' => 'NISN'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('password', [
                                'type' => 'text', 
                                'class' => 'form-control', 
                                'label' => 'Password'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('name', [
                                'class' => 'form-control', 
                                'label' => 'Name'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('email', [
                                'class' => 'form-control', 
                                'label' => 'Email'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('phone', [
                                'class' => 'form-control', 
                                'label' => 'Phone'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('photo', [
                                'type' => 'file', 
                                'class' => 'form-control-file', 
                                'label' => 'Photo'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('status', 'Status'); ?>
                            <?= $this->Form->select('status', [
                                'admin' => 'Admin Kelas', 
                                'student' => 'Siswa'
                            ], [
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('is_active', 'Apakah Aktif?'); ?>
                            <?= $this->Form->select('is_active', [
                                '1' => 'Ya', 
                                '0' => 'Tidak'
                            ], [
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('group_id', [
                                'options' => $groups, 
                                'class' => 'form-control', 
                                'label' => 'Kelas'
                            ]); ?>
                        </div>
                    </fieldset>
                    <div class="form-group mt-3 text-center">
                        <?= $this->Form->button(__('Daftar'), ['class' => 'btn btn-primary']); ?>
                    </div>
                    <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
