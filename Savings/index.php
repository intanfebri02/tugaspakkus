<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Saving> $savings
 */
?>
<div class="savings index content container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3><?= __('Savings') ?></h3>
        <div>
            <?= $this->Html->link(__('New Saving'), ['action' => 'add'], ['class' => 'btn btn-primary me-2']) ?>
            <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nominal') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($savings as $saving): ?>
                <tr>
                    <td><?= $this->Number->format($saving->id) ?></td>
                    <td><?= $this->Number->format($saving->nominal) ?></td>
                    <td><?= h($saving->status) ?></td>
                    <td><?= h($saving->created) ?></td>
                    <td><?= h($saving->modified) ?></td>
                    <td><?= $saving->hasValue('user') ? $this->Html->link($saving->user->name, ['controller' => 'Users', 'action' => 'view', $saving->user->id]) : '' ?></td>
                    <td class="text-center">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $saving->id], ['class' => 'btn btn-info btn-sm me-1']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saving->id], ['class' => 'btn btn-warning btn-sm me-1']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saving->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 
                            'class' => 'btn btn-danger btn-sm'
                        ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <div class="paginator mt-4">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first'), ['class' => 'page-link']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['class' => 'page-link']) ?>
            <?= $this->Paginator->numbers(['class' => 'page-link']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['class' => 'page-link']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['class' => 'page-link']) ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
