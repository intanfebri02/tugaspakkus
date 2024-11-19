<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $groups
 */
?>
<div class="container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title"><?= __('Actions') ?></h4>
                </div>
                <div class="list-group list-group-flush">
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3><?= __('Add User') ?></h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($user, ['type' => 'file', 'class' => 'form-horizontal']) ?>
                    <fieldset>
                        <div class="mb-3">
                            <?= $this->Form->control('nisn', ['class' => 'form-control', 'label' => 'NISN']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('password', ['type' => 'password', 'class' => 'form-control', 'label' => 'Password']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nama']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('email', ['class' => 'form-control', 'label' => 'Email']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('phone', ['class' => 'form-control', 'label' => 'Telepon']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('photo', ['type' => 'file', 'class' => 'form-control', 'label' => 'Foto']) ?>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <?= $this->Form->select('status', ['admin' => 'Admin Kelas', 'Student' => 'Siswa'], ['class' => 'form-select']) ?>
                        </div>
                        <div class="mb-3">
                            <label for="is_active" class="form-label">Aktif</label>
                            <?= $this->Form->select('is_active', ['1' => 'Ya', '0' => 'Tidak'], ['class' => 'form-select', 'value' => 'student']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('group_id', ['options' => $groups, 'class' => 'form-select', 'label' => 'Kelas']) ?>
                        </div>
                    </fieldset>
                    <div class="text-end">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
