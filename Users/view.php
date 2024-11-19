<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
                    <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'list-group-item list-group-item-action']) ?>
                    <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'list-group-item list-group-item-action']) ?>
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3><?= h($user->name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th><?= __('Nisn') ?></th>
                                <td><?= h($user->nisn) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($user->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Email') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone') ?></th>
                                <td><?= h($user->phone) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Photo') ?></th>
                                <td><?= h($user->photo) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($user->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Is Active') ?></th>
                                <td><?= h($user->is_active) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Group') ?></th>
                                <td><?= $user->hasValue('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id], ['class' => 'text-decoration-none']) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($user->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($user->created) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($user->modified) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h4><?= __('Related Savings') ?></h4>
                </div>
                <div class="card-body">
                    <?php if (!empty($user->savings)) : ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Nominal') ?></th>
                                    <th><?= __('Status') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Modified') ?></th>
                                    <th><?= __('User Id') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user->savings as $saving) : ?>
                                <tr>
                                    <td><?= h($saving->id) ?></td>
                                    <td><?= h($saving->nominal) ?></td>
                                    <td><?= h($saving->status) ?></td>
                                    <td><?= h($saving->created) ?></td>
                                    <td><?= h($saving->modified) ?></td>
                                    <td><?= h($saving->user_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Savings', 'action' => 'view', $saving->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Savings', 'action' => 'edit', $saving->id], ['class' => 'btn btn-outline-secondary btn-sm']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Savings', 'action' => 'delete', $saving->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saving->id), 'class' => 'btn btn-outline-danger btn-sm']) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php else: ?>
                        <p class="text-muted"><?= __('No related savings found.') ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
