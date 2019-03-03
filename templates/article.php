<!DOCTYPE html>
<html lang="ru">
<head>
	<?php require_once __DIR__ . '/../Blocks/Head.php'    ?>

</head>
<body>

	<div class='myright'></div>


	<div class="container">
		<div class="row">
			<div class="col-sm" align="right">
				<?php require_once __DIR__ . '/../Blocks/Menu.php'    ?>
			</div>
		</div>
		<div class='myright'></div>

		<div class="row">
			<div class="col-sm">
				<?php
				foreach ($this->news as $key => $item) {?>
					<form method="get">
						<div class="row">
							<div class="col-sm">
								<div class="list-group">
									<a href="article.php?id=<?php echo $item -> id; ?>" 
										class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1"><?php echo $item -> tittle; ?></h5>
											<small class="text-muted">
												<?php  
												$date = date_create_from_format("Y-m-d H:i:s", $item -> date);
												echo date_format($date, 'd-m-Y');
												?>
											</small>
										</div>
										<p class="mb-1"><?php echo  $item -> content; ?></p>
										<small class="text-muted"><?php echo $item -> filter; ?></small>
									</a>
								</div>
								<br>
							</div>
						</div>
						<?php 
					} 
					?>
				</form>
			</div>
		</div>
	</div>

	<div class='myright'></div>



	<?php require_once __DIR__ . '/../Blocks/Js.php'    ?>

</body>
</html>