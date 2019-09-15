<div class="container">
	<div class="jumbotron">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Product Name</th>
				<th>Product Image</th>
				<th>Product Qty</th>
				<th>Product Color</th>
				<th>Publish Date</th>
				<th>Unpublish Date</th>
				<th>Status</th>
				<th>Action</th>
			</thead>
			<tbody>
				<!-- @$i = 0; -->
				<?php 
				$i;
				foreach ($product as $p): ?>
					<tr>
						<td><?=@ ++$i ?></td>
						<td><?= $p->name ?></td>
						<td><img src="<?= base_url('./assets/').$p->image ?>" width="100" height='100' ></td>
						<td><?= $p->qty ?></td>
						<td><?= $p->color ?></td>
						<td><?= $p->publishdate ?></td>
						<td><?= $p->unpublishdate ?></td>
						<td><?php if($p->status == 1){ echo "<span class='bg-success text-light' >Active</span>"; }else{ echo "<span class='bg-danger text-light' >In Active</span>"; } ?>
						</td>
						<td>
							<span><a class="btn-warning" href="<?= base_url('index.php/Test/editView/'.$p->id) ?>" >Edit</a></span>
							<span><a class="btn-danger" href="" >Delete</a></span>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>