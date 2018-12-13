
<header id="header" id="home">
	<div class="header-top">
		<div class="container">
	  		<div class="row">
	  		</div>			  					
		</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
	      <div id="logo">
	        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
	      </div>
	      <nav id="nav-menu-container">
	        <ul class="nav-menu">
	          <li><a href="index.php">Home</a></li>
	          <li><a href="about.php">About</a></li>
	          <?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
				{
				?>
	          	<li><a href="ylp_data.php">YLP Data</a></li>
			  <?php }else{ ?>  
			  	<li><a href="#!" onclick="myFunction()">YLP Data</a></li>
			  <?php } ?>
			  
	          <?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
				{
				?>
	          	<li><a href="soil_card.php">DSS Platform</a></li>
			  <?php }else{ ?>  
			  	<li><a href="#!" onclick="myFunction()">DSS Platform</a></li>
			  <?php } ?>

	          <li><a href="calculator.php"> Calculator</a></li>
	          
	          <?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
				{
				?>
			  	<li><a href="home/map/user-map.php">Mapping</a></li>
			  <?php }else{ ?> 
			  	<li><a href="#!" onclick="myFunction()">Mapping</a></li>
			  <?php } ?>
	        </ul>
	      </nav><!-- #nav-menu-container -->		    		
		</div>
	</div>
</header><!-- #header -->
<script type="text/javascript">
function myFunction() {
    if (confirm("You will need to sign in first!")) {
        location.href='admin/login.php';
    } else {
        location.href='#!';
    }    
}
</script>