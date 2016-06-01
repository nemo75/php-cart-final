<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<?php if(isset($_SESSION['order'])) : ?>
		<div class="ui success message">
			<i class="close icon"></i>
			<div class="header">
				<?=flash()?>
			</div>
		</div>
	<?php endif; ?>
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<?php foreach ($products as $product) :?>
			<div class="ui card">
				<div class="image">
					<img src="<?php echo $product->picture ?>">
				</div>
				<div class="content">
					<a href="/cart/<?php echo $product->id ?>" class="header"><?php echo $product->name ?> <?php echo $product->price ?> &euro;</a>
				</div>
				<div class="extra content">
					<form action="/cart/add" method="post" class="ui form ">
					<input type="hidden" name="id" value="<?= $product->id ?>">
						<button class="ui inverted button green">ajouter au panier</button>
						</form>	
					</div>
				</div>
			<?php endforeach; ?>
		</section>
	</div>