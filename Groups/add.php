<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="container mt-5">
    <div class="row">
        <aside class="col-md-3">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0"><?= __('Actions') ?></h5>
                </div>
                <div class="list-group list-group-flush">
                    <?= $this->Html->link(__('List Groups'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0"><?= __('Add Group') ?></h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($group) ?>
                    <fieldset>
                        <legend class="text-muted"><?= __('Group Information') ?></legend>
                        <div class="mb-3">
                            <?= $this->Form->control('name', ['label' => 'Group Name', 'class' => 'form-control']) ?>
                        </div>
                        <div class="mb-3">
                            <?= $this->Form->control('nominal', ['label' => 'Nominal Amount', 'class' => 'form-control']) ?>
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
