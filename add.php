<body>
	<div class="container">
		<div class="jumbotron">
			<div class="row" ><div class="col-sm-10"></div><span class="btn-primary" id="dark">Enable Dark mode</span> <span class="btn-primary" style="display: none;" id="light">Enable Dark mode</span></div><br>
			<form name="insert" id="insert" method="post" enctype="multipart/form-data">
				<div class="row text-info form-control" align="center"><h2>Add Product</h2></div><br>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="product name">Product name </label>
						<input type="text" name="productName" id="productName" class="form-control" placeholder="Product name">
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Qty">Qty </label><br>
						<input type="number" name="qty" min="1" max="100" id="qty" class="col-sm-2 form-control" placeholder="Qty">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="Product Image">Product Image </label>
						<input type="file" name="productimage" id="productimage" class="form-control" placeholder="Product Image">
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Store Name">Store Name </label><br>
						<input type="text" name="storename" id="storename" class="form-control" placeholder="Store Name">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group	">
						<label for="Color">Color </label><br>
						<input type="checkbox" name="color[]" value="blue" multiple > <span style="background-color: blue;margin-right: 5px; border:1px solid blue;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="red" multiple><span style="background-color: red;margin-right: 5px; border:1px solid red;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="white" multiple><span style="background-color: white;margin-right: 5px; border:1px solid white;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="orange" multiple><span style="background-color: orange;margin-right: 5px; border:1px solid orange;" class="col-sm-2"></span>
						<input type="checkbox" name="color[]" value="black" multiple><span style="background-color: black;margin-right: 5px; border:1px solid black;" class="col-sm-2"></span>
					</div>
					<div class="col-sm-6 form-group	">
						<label for="Product Publish Date">Product Publish Date </label><br>
						<input type="date" name="publishDate" id="publishDate" class="form-control" placeholder="Product Publish Date" min="<?= date('Y-m-d') ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label for="Product Unpublish Date">Product Unpublish Date</label>
						<input type="date" name="unpublishDate" id="unpublishDate" min="<?= date('Y-m-d') ?>" class="form-control">
					</div>
					<div class="col-sm-6">
						<label for="status">Status</label>
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
<?php echo base_url();?>
<script type="text/javascript">
	
	$(document).ready(()=>{
		$(document).on('click','#submit',()=>{
			alert('hello');
			$.ajax({
				url : "<?= base_url('Test/insert') ?>",
				type :'post',
				data : new FormData($('#insert')[0]),
				contentType : false,
				processData : false,
				success : (data)=>{
 					alert(data);
				}
			});
		});
	});
</script>