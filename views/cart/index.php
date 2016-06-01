<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<div class="ui list">
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
				<h4 class="item header">Montant total :  <?=Cart::total()?>&euro;</h4>
				<h4 classs="item header">Nombre produits : <?=Cart::count()?></h4>
			</div>
		</div>
		<div class="column">
		<h1 class="ui container">R&eacute;cpitulatif de votre commande</h1>
			<table class="ui table compact">
				<?php echo $_SESSION['order'] ?>
			</table>
		</div>
	</div>


</div>