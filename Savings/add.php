<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
 * @var \Cake\Collection\CollectionInterface|string[] $users
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
                    <?= $this->Html->link(__('List Savings'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-block']) ?>
                </div>
            </div>
        </aside>
        
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><?= __('Add Saving') ?></h4>
                </div>
                
                <div class="card-body">
                    <?= $this->Form->create($saving, ['class' => 'form-horizontal']) ?>
                    <fieldset>
                        <div class="mb-3">
                            <?= $this->Form->control('nominal', [
                                'class' => 'form-control', 
                                'label' => ['text' => 'Nominal', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('status', [
                                'class' => 'form-control', 
                                'label' => ['text' => 'Status', 'class' => 'form-label']
                            ]); ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('user_id', [
                                'options' => $users, 
                                'class' => 'form-select', 
                                'label' => ['text' => 'User', 'class' => 'form-label']
                            ]); ?>
                        </div>
                    </fieldset>
                    
                    <div class="text-end">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
