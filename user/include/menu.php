		<div id="preloader">
			<div class="preloader"><img src="<?php echo $baseurl; ?>/img/progress.gif" alt=""></div>
		</div>
		<!-- begin Header -->
		<header>

		<nav class="navbar">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?php echo $baseurl; ?>/img/logo.png" alt="//"></a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse">
					
					<ul class="nav navbar-nav menu-effect" id="foot">
						
						<li><a href="../">Home</a></li>

      <?php
	  $ddaa = mysql_query("SELECT id, title FROM menus ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {			

if($data[0]==1){
	
}else{

		    $string = strtolower($data[1]);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    $url = $string;

 echo "<li><a href=\"$baseurl/$url\">$data[1]</a></li>";
	
}
	}
	?>



					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		</header>
		<!-- end Header -->