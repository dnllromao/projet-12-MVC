<?php 
	$posts = \Model\Model::getInstance()->all();
?>

<section class="wrapper style1 align-center">
	<div class="inner">
		<h2>Vos Pages</h2>
		<p>Finally, here are some additional elements you <em>might</em> find useful (and yup, they look fine with any <span class="demo-controls">appearance</span>).</p>
		<div class="index align-left">

			<!-- Table -->
				<section>
					<div class="content">
						<div class="action-add-right">
							<a href="?p=add" class="button special small">Ajouter</a>
						</div>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($posts as $key => $post) : ?>
									<tr>
										<td><?= $post->id ?></td>
										<td><?= $post->title ?></td>
										<td>
											<div class="action-add-left">
												<a href="?p=edit" class="button special small">Modifier</a>
												<a href="?p=delete" class="button special small">Supprimer</a>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>

								</tbody>
							</table>
						</div>

					</div>
				</section>

		</div>


	</div>
</section>
