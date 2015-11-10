<!-- File: src/Template/Orderpizza/index.ctp (delete links added) -->

<h1>Blog articles</h1>
<p><?= $this->Html->link('Add Orderpizza', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>Address1</th>
		<th>Address2</th>
		<th>City</th>
		<th>province</th>		
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $orderpizza query object, printing out orderpizza info -->

    <?php foreach ($orderpizza as $orderpizza): ?>
    <tr>
        <td><?= $orderpizza->id ?></td>
        <td>
            <?= $this->Html->link($orderpizza->title, ['action' => 'view', $orderpizza->id]) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $orderpizza->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $orderpizza->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>