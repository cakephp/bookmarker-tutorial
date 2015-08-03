<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Apps'), ['controller' => 'Apps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New App'), ['controller' => 'Apps', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Dob') ?></h6>
            <p><?= h($user->dob) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($user->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Apps') ?></h4>
    <?php if (!empty($user->apps)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Domain') ?></th>
            <th><?= __('Theme') ?></th>
            <th><?= __('Secure') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Keywords') ?></th>
            <th><?= __('Tags') ?></th>
            <th><?= __('Type') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->apps as $apps): ?>
        <tr>
            <td><?= h($apps->id) ?></td>
            <td><?= h($apps->user_id) ?></td>
            <td><?= h($apps->name) ?></td>
            <td><?= h($apps->slug) ?></td>
            <td><?= h($apps->title) ?></td>
            <td><?= h($apps->domain) ?></td>
            <td><?= h($apps->theme) ?></td>
            <td><?= h($apps->secure) ?></td>
            <td><?= h($apps->description) ?></td>
            <td><?= h($apps->keywords) ?></td>
            <td><?= h($apps->tags) ?></td>
            <td><?= h($apps->type) ?></td>
            <td><?= h($apps->modified) ?></td>
            <td><?= h($apps->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Apps', 'action' => 'view', $apps->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Apps', 'action' => 'edit', $apps->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Apps', 'action' => 'delete', $apps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apps->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Bookmarks') ?></h4>
    <?php if (!empty($user->bookmarks)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Url') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->bookmarks as $bookmarks): ?>
        <tr>
            <td><?= h($bookmarks->id) ?></td>
            <td><?= h($bookmarks->user_id) ?></td>
            <td><?= h($bookmarks->title) ?></td>
            <td><?= h($bookmarks->description) ?></td>
            <td><?= h($bookmarks->url) ?></td>
            <td><?= h($bookmarks->created) ?></td>
            <td><?= h($bookmarks->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Bookmarks', 'action' => 'view', $bookmarks->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Bookmarks', 'action' => 'edit', $bookmarks->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookmarks', 'action' => 'delete', $bookmarks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarks->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Profiles') ?></h4>
    <?php if (!empty($user->profiles)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Twitter') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->profiles as $profiles): ?>
        <tr>
            <td><?= h($profiles->id) ?></td>
            <td><?= h($profiles->user_id) ?></td>
            <td><?= h($profiles->twitter) ?></td>
            <td><?= h($profiles->created) ?></td>
            <td><?= h($profiles->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
