<!-- File: src/Template/Orderpizza/index.ctp (delete links added) -->

<h1>Blog articles</h1>
<p><?= $this->Html->link('Add Orderpizza', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>Created</th>		
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $orderpizza query object, printing out orderpizza info -->

    <?php foreach ($orderpizza as $orderpizza): ?>
    <tr>
        <td><?= $orderpizza->orderid ?></td>
        <td>
            <?= $this->Html->link($orderpizza->name, ['action' => 'view', $orderpizza->orderid]) ?>
        </td>
		<td><?= $orderpizza->created ?></td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $orderpizza->orderid],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $orderpizza->orderid]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>