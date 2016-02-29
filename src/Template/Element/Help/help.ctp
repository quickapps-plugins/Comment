<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>

<h2>About</h2>
<p>
    The Comment plugin allows users to comment on site content, set commenting defaults and permissions, and moderate comments.
</p>

<h2>Uses</h2>
<dl>
    <dt>Default and custom settings</dt>
    <dd>
        Each <?= $this->Html->link('content type', ['plugin' => 'Content', 'controller' => 'types', 'prefix' => 'admin']); ?> can have its own default comment settings configured as:
        <em>Open</em> to allow new comments and show existing ones, <em>Closed</em> to prevent new comments and do not show existing ones, or <em>Read only</em> to show existing comments but prevent new ones.
        These defaults will apply to all new content created (changes to the settings on existing content must be done manually).
        Other comment settings can also be customized per content type, and can be overridden for any given item of content.
    </dd>

    <dt>Comment approval</dt>
    <dd>
        All comments are placed in the <?= $this->Html->link('Unapproved comments', ['plugin' => 'Content', 'controller' => 'comments', 'action' => 'index', 'prefix' => 'admin', 'approved']); ?> queue,
        until a user who has the proper permissions will publishes them, mark them as spam, move them to trash bin or just deletes them.
        Published comments can be bulk managed on the <?= $this->Html->link('Published comments', ['plugin' => 'Content', 'controller' => 'comments', 'action' => 'index', 'prefix' => 'admin', 'pending']); ?> administration page.
    </dd>
</dl>