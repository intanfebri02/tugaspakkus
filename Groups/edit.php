<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="container mt-5">
    <div class="row">
        <aside class="col-md-3">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0"><?= __('Actions') ?></h5>
                </div>
                <div class="list-group list-group-flush">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], [
                        'confirm' => __('Are you sure you want to delete # {0}?', $group->id), 
                        'class' => 'list-group-item list-group-item-action text-danger'
                    ]) ?>
                    <?= $this->Html->link(__('List Groups'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0"><?= __('Edit Group') ?></h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($group) ?>
                    <fieldset>
                        <legend class="text-muted"><?= __('Group Information') ?></legend>
                        <div class="mb-3">
                            <?= $this->Form->control('name', ['label' => 'Name', 'class' => 'form-control']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('nominal', ['label' => 'Nominal', 'class' => 'form-control']) ?>
                        </div>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
