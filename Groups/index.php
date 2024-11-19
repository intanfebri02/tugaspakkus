<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Group> $groups
 */
?>

<div class="container mt-5">
    <div class="groups index content">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0"><?= __('Groups') ?></h3>
            <?= $this->Html->link(__('New Group'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                                <th><?= $this->Paginator->sort('name', 'Nama') ?></th>
                                <th><?= $this->Paginator->sort('nominal', 'Kass') ?></th>
                                <th><?= $this->Paginator->sort('created', 'Tanggal Bayar') ?></th>
                                <th class="text-center"><?= __('Aksi') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($groups as $group): ?>
                            <tr>
                                <td><?= $this->Number->format($group->id) ?></td>
                                <td><?= h($group->name) ?></td>
                                <td><?= $this->Number->format($group->nominal) ?></td>
                                <td><?= date("d F Y H:i:s", strtotime($group->modified)) ?></td>
                                <td class="text-center">
                                    <?= $this->Html->link(__('Detail'), ['action' => 'view', $group->id], ['class' => 'btn btn-info btn-sm me-1']) ?>
                                    <?= $this->Html->link(__('Ubah'), ['action' => 'edit', $group->id], ['class' => 'btn btn-warning btn-sm me-1']) ?>
                                    <?= $this->Form->postLink(__('Hapus'), ['action' => 'delete', $group->id], [
                                        'confirm' => __('Hapus Data {0}?', $group->id), 
                                        'class' => 'btn btn-danger btn-sm'
                                    ]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="paginator d-flex justify-content-between align-items-center mt-3">
                    <ul class="pagination mb-0">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p class="mb-0"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
