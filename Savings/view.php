<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saving $saving
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
                    <?= $this->Html->link(__('Edit Saving'), ['action' => 'edit', $saving->id], ['class' => 'btn btn-outline-primary btn-block mb-2']) ?>
                    <?= $this->Form->postLink(__('Delete Saving'), ['action' => 'delete', $saving->id], [
                        'confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 
                        'class' => 'btn btn-outline-danger btn-block mb-2'
                    ]) ?>
                    <?= $this->Html->link(__('List Savings'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary btn-block mb-2']) ?>
                    <?= $this->Html->link(__('New Saving'), ['action' => 'add'], ['class' => 'btn btn-outline-success btn-block']) ?>
                </div>
            </div>
        </aside>
        
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><?= h($saving->status) ?></h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td><?= h($saving->status) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('User') ?></th>
                            <td><?= $saving->has('user') ? $this->Html->link($saving->user->name, ['controller' => 'Users', 'action' => 'view', $saving->user->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($saving->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Nominal') ?></th>
                            <td><?= $this->Number->format($saving->nominal) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= h($saving->created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= h($saving->modified) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
