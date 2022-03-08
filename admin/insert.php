
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
{
	$promoteNumber=$_POST['promoteNumber'];
	$orderNumber=$_POST['orderNumber'];
	$customerName=$_POST['customerName'];
	$phoneNo=$_POST['phoneNo'];
	$size=$_POST['size'];
	$itemSize=$_POST['itemSize'];
	$deliveryDate=$_POST['deliveryDate'];
	$status=$_POST['status'];
	$paymentMode=$_POST['paymentMode'];
	$paymentStatus=$_POST['paymentStatus'];
	

$query=mysqli_query($con,"select max(id) as pid from products");
	$result=mysqli_fetch_array($query);
	$productid=$result['pid']+1;	
	$sql=mysqli_query($con,"insert into products(promoteNumber,orderNumber,customerName,phoneNo,size,itemSize,deliveryDate,status,paymentMode,paymentStatus) values('$promoteNumber','$orderNumber', '$customerName', '$phoneNo', '$size', '$itemSize', '$deliveryDate', '$status', '$paymentMode', '$paymentStatus')");
$_SESSION['msg']="Inserted Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert </title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Insert Data</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

	<div class="control-group">
	<label class="control-label" for="basicinput">Promote</label>
	<div class="controls">
	<input type="text" name="promoteNumber"  placeholder="Enter Promote Number" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Order Number</label>
	<div class="controls">
	<input type="text" name="orderNumber"  placeholder="Enter order Number" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Customer Name</label>
	<div class="controls">
	<input type="text"    name="customerName"  placeholder="Enter Customer Name" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Phone Number</label>
	<div class="controls">
	<input type="text"    name="phoneNo"  placeholder="Enter Phone Number" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Address</label>
	<div class="controls">
	<textarea  name="size"  placeholder="Enter Size" rows="6" class="span8 tip">
	</textarea>  
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Size</label>
	<div class="controls">
	<select name="itemSize"  id="itemSizes" class="span8 tip" required>
	<option value="">Select</option>
	<option value="8 x 10">8 x 10</option>
	<option value="8 x 12">8 x 12</option>
	<option value="10 x 10">10 x 10</option>
	<option value="10 x 12">10 x 12</option>
	<option value="10 x 15">10 x 15</option>
	<option value="12 x 12">12 x 12</option>
	<option value="12 x 15">12 x 15</option>
	<option value="12 x 18">12 x 18</option>
	<option value="16 x 24">16 x 24</option>
	<option value="20 x 30">20 x 30</option>
	<option value="24 x 36">24 x 36</option>
	</select>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Delivery Date</label>
	<div class="controls">
	<input type="text"  name="deliveryDate"  placeholder="Enter Delivery Date" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Status</label>
	<div class="controls">
	<select   name="status"  id="productAvailability" class="span8 tip" required>
	<option value="">Select</option>
	<option value="Pending">Pending</option>
	<option value="Delivered">Delivered</option>
	</select>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Payment Mode</label>
	<div class="controls">
	<input type="text"  name="paymentMode"  placeholder="Enter Payment Mode" class="span8 tip" required>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="basicinput">Payment Status</label>
	<div class="controls">
	<input type="text"  name="paymentStatus"  placeholder="Enter Enter Payment Status" class="span8 tip" required>
	</div>
	</div>


	<div class="control-group">
		<div class="controls">
		
			<button type="submit" name="submit" class="btn btn-primary btn-lg active">Insert</button> 
		</div>
	</div>
</form>
</div>
</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>