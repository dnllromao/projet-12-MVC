<?php 

	$posts = \Model\Model::getInstance()->all();
	echo '<pre>';
	var_dump($posts);
	echo '</pre>';
?>
<section class="wrapper style1 align-center">
	<div class="inner">
		<h2>Additional Elements</h2>
		<p>Finally, here are some additional elements you <em>might</em> find useful (and yup, they look fine with any <span class="demo-controls">appearance</span>).</p>
		<div class="index align-left">

			<!-- Table -->
				<section>
					<div class="content">

						<h4>Default</h4>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>ID</th>
										<th>Slug</th>
										<th>Title</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item 1</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item 2</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item 3</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item 4</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item 5</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>

					</div>
				</section>

		</div>


	</div>
</section>