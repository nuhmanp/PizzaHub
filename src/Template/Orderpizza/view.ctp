<!-- File: src/Template/Orderpizza/view.ctp -->

<h1>Name: <?= h($orderpizza->name) ?></h1>
<p>Address 1: <?= h($orderpizza->address1) ?></p>
<p>Address 2: <?= h($orderpizza->address2) ?></p>
<p>City: <?= h($orderpizza->city) ?></p>
<p>Province : <?= h($orderpizza->province) ?></p>
<p>Postal : <?= h($orderpizza->postal) ?></p>
<p>Phone : <?= h($orderpizza->phone) ?></p>
<p>Email : <?= h($orderpizza->email) ?></p>
<p>Crust : <?= h($orderpizza->crust) ?></p>
<p>Size : <?= h($orderpizza->size) ?></p>
<p>Toppings : <?= h($orderpizza->toppings) ?></p>
<p>Stat : <?= h($orderpizza->stat) ?></p>
<p><small>Created: <?= $orderpizza->created->format(DATE_RFC850) ?></small></p>