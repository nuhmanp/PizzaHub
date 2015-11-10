<!-- File: src/Template/Orderpizza/add.ctp -->

<h1>Add Orderpizza</h1>
<?php
    echo $this->Form->create($orderpizza);
    echo $this->Form->input('name');
	echo $this->Form->input('address1');
	echo $this->Form->input('address2');
	echo $this->Form->input('city');
	echo $this->Form->input('province');
	echo $this->Form->input('postal');
	echo $this->Form->input('phone');
	echo $this->Form->input('email');	
	echo $this->Form->input('size', array('options' => array('' => 'Select', 'small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'X-L' => 'X-L')));
	echo $this->Form->input('crust', array('options' => array('' => 'Select', 'Hand-tossed' => 'Hand-tossed', 'Pan' => 'Pan', 'Stuffed' => 'Stuffed', 'Thin' => 'Thin')));
	echo $this->Form->input('toppings', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
            'Red Onions' => 'Red Onions',
			'Hamburger' => 'Hamburger',
			'Anchovies' => 'Anchovies',
			'Pepperoni' => 'Pepperoni',
			'Fried Eggplant' => 'Fried Eggplant',
			'Garlic Cloves' => 'Garlic Cloves',
			'Bacon' => 'Bacon',
			'Chicken' => 'Chicken',
			'Shrimp' => 'Shrimp',
			'Salami' => 'Salami',
			'Ham' => 'Ham',
            'White Onion' => 'White Onion'
    )
));
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>