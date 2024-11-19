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
                    <?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id], ['class' => 'list-group-item list-group-item-action']) ?>
                    <?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], [
                        'confirm' => __('Are you sure you want to delete # {0}?', $group->id), 
                        'class' => 'list-group-item list-group-item-action text-danger'
                    ]) ?>
                    <?= $this->Html->link(__('List Groups'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                    <?= $this->Html->link(__('New Group'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><?= h($group->name) ?></h3>
                    <table class="table table-striped mt-3">
                        <tr>
                            <th><?= __('Name') ?></th>
                            <td><?= h($group->name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($group->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Nominal') ?></th>
                            <td><?= $this->Number->format($group->nominal) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= h($group->created) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= h($group->modified) ?></td>
                        </tr>
                    </table>

                    <div class="related mt-4">
                        <h4><?= __('Related Users') ?></h4>
                        <?php if (!empty($group->users)) : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Nisn') ?></th>
                                        <th><?= __('Password') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __('Phone') ?></th>
                                        <th><?= __('Photo') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Is Active') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th><?= __('Group Id') ?></th>
                                        <th class="text-center"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($group->users as $user) : ?>
                                    <tr>
                                        <td><?= h($user->id) ?></td>
                                        <td><?= h($user->nisn) ?></td>
                                        <td><?= h($user->password) ?></td>
                                        <td><?= h($user->name) ?></td>
                                        <td><?= h($user->email) ?></td>
                                        <td><?= h($user->phone) ?></td>
                                        <td><?= h($user->photo) ?></td>
                                        <td><?= h($user->status) ?></td>
                                        <td><?= h($user->is_active) ?></td>
                                        <td><?= h($user->created) ?></td>
                                        <td><?= h($user->modified) ?></td>
                                        <td><?= h($user->group_id) ?></td>
                                        <td class="text-center">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm me-1']) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-sm me-1']) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $user->id], [
                                                'confirm' => __('Are you sure you want to delete # {0}?', $user->id), 
                                                'class' => 'btn btn-danger btn-sm'
                                            ]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php else: ?>
                            <p><?= __('No related users found.') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
