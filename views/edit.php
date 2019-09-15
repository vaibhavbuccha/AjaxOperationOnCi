<body>
	<div class="container">
		<div class="jumbotron">
			<div align="right">
			<a href="<?= base_url('index.php/Test/listing') ?>">show listing </a>
			</div>
			<br>
			<?php foreach ($product as $p):?>
			<form name="insert" id="insert" method="post" enctype="multipart/form-data">
				<div class="row text-info form-control" align="center"><h2>Edit Product</h2></div><br>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="product name">Product name (<span class="text-danger">*</span>) </label>
						<input type="text" name="productName" id="productName" class="form-control" placeholder="Product name" required value="<?= $p->name ?>" >
						<?php echo form_error('productName'); ?>
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Qty">Qty (<span class="text-danger">*</span>)</label><br>
						<input type="number" name="qty" min="1" max="100" id="qty" class="col-sm-2 form-control" placeholder="Qty" required value="<?= $p->qty ?>">
						<?php echo form_error('qty'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="Product Image">Product Image (<span class="text-danger">*</span>)</label>
						<input type="file" name="productimage" id="productimage" class="form-control" placeholder="Product Image" required>
						<?php echo form_error('productimage'); ?>
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Store Name">Store Name (<span class="text-danger">*</span>)</label><br>
						<input type="text" name="storename" id="storename" class="form-control" placeholder="Store Name" required value="<?= $p->storename ?>">
						<?php echo form_error('storename'); ?>
					</div>
				</div>
				<div class="row">
					<?php $colors = explode(',', $p->color);
						// print_r($colors);
					 ?>
					<div class="col-sm-6 form-group	">
						<label for="Color">Color (<span class="text-danger">*</span>)</label><br>
						<input type="checkbox" name="color[]" value="blue" multiple <?= in_array('blue',$colors)?'checked':'' ?> > <span style="background-color: blue;margin-right: 5px; border:1px solid blue;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="red" multiple <?= in_array('red',$colors)?'checked':'' ?>><span style="background-color: red;margin-right: 5px; border:1px solid red;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="white" multiple <?= in_array('white',$colors)?'checked':'' ?>><span style="background-color: white;margin-right: 5px; border:1px solid white;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="orange" multiple <?= in_array('orange',$colors)?'checked':'' ?>><span style="background-color: orange;margin-right: 5px; border:1px solid orange;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="black" multiple <?= in_array('black',$colors)?'checked':'' ?>><span style="background-color: black;margin-right: 5px; border:1px solid black;" class="col-sm-2"></span>
						<?php echo form_error('color'); ?>
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Product Publish Date">Product Publish Date </label><br>
						<input type="date" name="publishDate" id="publishDate" class="form-control" placeholder="Product Publish Date" min="<?= date('Y-m-d') ?>" value="<?= $p->publishdate ?>" >
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label for="Product Unpublish Date">Product Unpublish Date</label>
						<input type="date" name="unpublishDate" id="unpublishDate" min="<?= date('Y-m-d') ?>" class="form-control" required value="<?= $p->unpublishdate ?>">
					</div>
					<div class="col-sm-6">
						<label for="status">Status </label>
						<br>
						<input type="radio" name="status" value="1" <?= ($p->status='1')?'checked':'' ?>><span class="btn-success" style="margin: 10px;"  >Active</span>
						<input type="radio" name="status" value="0" <?= ($p->status='0')?'checked':'' ?>><span class="btn-danger" style="margin: 10px;">InActive</span>
					</div>
				</div><br>
				<div class="form-control row " align="center">
					<button type="submit" id="submit" class="btn btn-info" >Edit Product</button>
				</div>
			</form>
		<?php endforeach ?>
		</div>
	</div>
</body>
