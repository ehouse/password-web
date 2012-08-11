<div class="container">
	<div class='row'>
		<div class='span6'>
			<h2>Password Settings</h2>
			<?php $_POST['length'] = 'medium' ?>
			<?php echo form_open("home"); ?>
			<p>Password Length</p>
			<?php echo form_dropdown('length',array('small' => "Short",'medium' => 'Medium','long' => 'Long')); ?>
			<br />
			<?php echo form_submit('submit','Generate Password') ?>
		</div>
		<div class='span6'>
			<h2> Generated Passwords</h2>
			<ul>
				<?php for($a=0;$a<10;$a++): ?>
					<li>
						<?php if ($_POST['length'] == 'small'){system('ha-gen -l 8');}
						elseif ($_POST['length'] == 'medium'){system('ha-gen -l 12');}
						else {system('ha-gen -l 20');}?>
					</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
