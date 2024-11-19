<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $groups
 */
?>

<div class="container mt-5">
    <div class="row">
        <aside class="col-md-3">
            <div class="card mb-3">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0"><?= __('Actions') ?></h5>
                </div>
                <div class="card-body">
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-outline-primary btn-block']) ?>
                </div>
            </div>
        </aside>
        
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><?= __('Add User') ?></h4>
                </div>
                
                <div class="card-body">
                    <?= $this->Form->create($user, ['type' => 'file', 'class' => 'form-horizontal']) ?>
                    <fieldset>
                        <div class="mb-3">
                            <?= $this->Form->control('nisn', [
                                'class' => 'form-control', 
                                'label' => ['text' => 'NISN', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->control('password', [
                                'type' => 'text', 
                                'class' => 'form-control', 
                                'label' => ['text' => 'Password', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->control('name', [
                                'class' => 'form-control', 
                                'label' => ['text' => 'Nama', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->control('email', [
                                'class' => 'form-control', 
                                'label' => ['text' => 'Email', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->control('phone', [
                                'class' => 'form-control', 
                                'label' => ['text' => 'Telepon', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->control('photo', [
                                'type' => 'file', 
                                'class' => 'form-control-file', 
                                'label' => ['text' => 'Upload Foto', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->label('status', 'Status', ['class' => 'form-label']); ?>
                            <?= $this->Form->select('status', [
                                'admin' => 'Admin Kelas', 
                                'student' => 'Siswa'
                            ], ['class' => 'form-select']); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->label('is_active', 'Apakah Aktif?', ['class' => 'form-label']); ?>
                            <?= $this->Form->select('is_active', [
                                '1' => 'Ya', 
                                '0' => 'Tidak'
                            ], ['class' => 'form-select']); ?>
                        </div>
                        
                        <div class="mb-3">
                            <?= $this->Form->control('group_id', [
                                'options' => $groups, 
                                'class' => 'form-select', 
                                'label' => ['text' => 'Kelas', 'class' => 'form-label']
                            ]); ?>
                        </div>
                    </fieldset>
                    
                    <div class="text-end">
                        <?= $this->Form->button(__('Simpan'), ['class' => 'btn btn-success']); ?>
                    </div>
                    
                    <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
