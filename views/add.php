<body>
	<div class="container">
		<div class="jumbotron">
			<div align="right">
			<a href="<?= base_url('Test/listing') ?>">show listing </a>
			</div>
			<br>
			<form name="insert" id="insert" method="post" enctype="multipart/form-data">
				<div class="row text-info form-control" align="center"><h2>Add Product</h2></div><br>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="product name">Product name (<span class="text-danger">*</span>) </label>
						<input type="text" name="productName" id="productName" class="form-control" placeholder="Product name" required>
						<?php echo form_error('productName'); ?>
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Qty">Qty (<span class="text-danger">*</span>)</label><br>
						<input type="number" name="qty" min="1" max="100" id="qty" class="col-sm-2 form-control" placeholder="Qty" required>
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
						<input type="text" name="storename" id="storename" class="form-control" placeholder="Store Name" required>
						<?php echo form_error('storename'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="Color">Color (<span class="text-danger">*</span>)</label><br>
						<input type="checkbox" name="color[]" value="blue" multiple > <span style="background-color: blue;margin-right: 5px; border:1px solid blue;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="red" multiple><span style="background-color: red;margin-right: 5px; border:1px solid red;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="white" multiple><span style="background-color: white;margin-right: 5px; border:1px solid white;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="orange" multiple><span style="background-color: orange;margin-right: 5px; border:1px solid orange;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="black" multiple><span style="background-color: black;margin-right: 5px; border:1px solid black;" class="col-sm-2"></span>
						<?php echo form_error('color'); ?>
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Product Publish Date">Product Publish Date </label><br>
						<input type="date" name="publishDate" id="publishDate" class="form-control" placeholder="Product Publish Date" min="<?= date('Y-m-d') ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label for="Product Unpublish Date">Product Unpublish Date</label>
						<input type="date" name="unpublishDate" id="unpublishDate" min="<?= date('Y-m-d') ?>" class="form-control" required>
					</div>
					<div class="col-sm-6">
						<label for="status">Status </label>
						<br>
						<input type="radio" name="status" value="1"><span class="btn-success" style="margin: 10px;">Active</span>
						<input type="radio" name="status" value="0"><span class="btn-danger" style="margin: 10px;">InActive</span>
					</div>
				</div><br>
				<div class="form-control row " align="center">
					<button type="submit" id="submit" class="btn btn-info" >Add Product</button>
				</div>
			</form>
		</div>
	</div>
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script> -->
<!-- <?php echo base_url();?> -->
<script type="text/javascript">
	// $(document).ready(()=>{

	$(document).ready(()=>{
		$(document).on('click','#submit',()=>{
			
				alertify.warning('We are procceding your data!');
				$.ajax({
					url : "<?= base_url('Test/insert') ?>",
					type :'post',
					data : new FormData($('#insert')[0]),
					contentType : false,
					processData : false,
					success : (data)=>{
	 					// alertify.error(data);
	 					if(data == 'error')
	 					{
	 						alertify.error('Required field cant be blank!')
	 					}else{
	 						alertify.success('Success');
	 					}
					}
				});
			
			
		});
	});
</script>