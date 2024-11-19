<div class="row p-3 m-3">
    <aside class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= __('Actions') ?></h4>
            </div>
            <div class="card-body">
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary mb-2 w-100']) ?>
                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], [
                    'confirm' => __('Are you sure you want to delete #{0}?', $user->name),
                    'class' => 'btn btn-danger mb-2 w-100'
                ]) ?>
                <?= $this->Html->link(__('List Savings'), ['controller' => 'Savings', 'action' => 'index'], ['class' => 'btn btn-secondary mb-2 w-100']) ?>
            </div>
        </div>
    </aside>

    <div class="col-md-9">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= h($user->name) ?></h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th><?= __('NISN') ?></th>
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
                        <td><?= $this->Html->image("users/" . $user->photo, ['width' => '105px']) ?></td>
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
                        <td><?= $user->hasValue('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($user->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title"><?= __('Related Savings') ?></h4>
            </div>
            <div class="card-body">
                <?php if (!empty($user->savings)) : ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Nominal') ?></th>
                                    <th><?= __('Status') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Modified') ?></th>
                                    <th><?= __('User Id') ?></th>
                                    <th class="text-center"><?= __('Actions') ?></th>
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
                                        <td class="text-center">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Savings', 'action' => 'view', $saving->id], ['class' => 'btn btn-info btn-sm']) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Savings', 'action' => 'edit', $saving->id], ['class' => 'btn btn-warning btn-sm']) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Savings', 'action' => 'delete', $saving->id], [
                                                'confirm' => __('Are you sure you want to delete # {0}?', $saving->id),
                                                'class' => 'btn btn-danger btn-sm'
                                            ]) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else : ?>
                    <p><?= __('No related savings found.') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>