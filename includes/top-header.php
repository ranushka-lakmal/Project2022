<?php 
session_start();

?>

<div class="top-bar animate-dropdown" style="background-color: black">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class=class="list-unstyled list-inline">
<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user" style="color:white"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

				    <li><a href="my-account.php"><span class="glyphicon glyphicon-user" style="color:orange"></span> </a></li></button>
					<li><a href="my-cart.php"><span class="glyphicon glyphicon-shopping-cart" style="color:blue"></span> </a></li>
					
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" style="color:red"></span> Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">

				<ul class="list-unstyled list-inline">
				<li><a href="my-wishlist.php"><span class="glyphicon glyphicon-heart" style="color:lightgreen"> Wish List</span> </a></li>
	
				<li><a href="+94702815489"><span class="glyphicon glyphicon-earphone" style="color:yellow"> Call US</span> </a></li>
			
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" style="color:white" ><span class="key">Track Order</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->