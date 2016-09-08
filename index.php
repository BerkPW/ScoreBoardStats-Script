<?php 
include 'ayar.php';
?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<title><?php echo "$site_adi"; ?></title>
		<?php 
			if ($tema == beyaz or $tema == Beyaz) {
				echo "<link rel='stylesheet' href='css/1.css'>"; 
			}else if ($tema == siyah or $tema == Siyah) {
				echo "<link rel='stylesheet' href='css/2.css'>"; 
			}else{
				echo "<link rel='stylesheet' href='css/1.css'>"; 
			}
		?>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>

	      </button> <a class="navbar-brand" href="#"><?php echo "$site_adi"; ?></a>

	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <!-- [Sağ Menü] -->
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.html">Anasayfa</a></li>
	      </ul>
	      <!-- [Sol Menü] -->
	  	<script type="text/javascript">
			document.write(unescape('%3C%75%6C%20%63%6C%61%73%73%3D%22%6E%61%76%20%6E%61%76%62%61%72%2D%6E%61%76%20%6E%61%76%62%61%72%2D%72%69%67%68%74%22%3E%0A%20%20%20%20%20%20%20%20%3C%6C%69%3E%3C%61%20%68%72%65%66%3D%22%68%74%74%70%3A%2F%2F%62%65%72%6B%2E%70%77%22%3E%40%42%65%72%6B%50%57%3C%2F%61%3E%3C%2F%6C%69%3E%0A%20%20%20%20%20%20%3C%2F%75%6C%3E'));
		</script>
	    </div>
	  </div>
	</div>


	<div class="col-md-13" style="margin: 80px 15px">
	  <div class="panel panel-primary">
	    <div class="panel-heading">
	      <h3 class="panel-title">Top <?php echo "$limit"; ?></h3>
	    </div>
	    <table class="table table-striped table-hover ">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Oyuncu</th>
	          <th>Öldürme</th>
	          <?php if ($mbk_d == 1) {?>
				<th>Mob Öldürme</th>
	          <?php } ?>
	          <th>Ölüm</th>
	        </tr>
	      </thead>
	      <tbody>
	  	<?php 
	  	$stcek = mysql_query("SELECT * FROM player_stats ORDER BY ((kills+deaths)/2) DESC LIMIT 0,$limit");
	  	$id = 0;
			while($styaz=mysql_fetch_array($stcek)){
	    	
	    	$playername 		= $styaz['playername'];
	    	$kills 				= $styaz['kills'];
	    	$deaths 			= $styaz['deaths'];
	    	$mobkills 			= $styaz['mobkills'];
	    	$id++;

		?>
	        <tr>
	          <td><?php echo "$id"; ?></td>
	          <td>
			<?php if ($kafa == 1) {?>
	          <img src="https://minotar.net/avatar/<?php echo "$playername"; ?>/17" class="img-circle">
			<?php } ?>
	          <?php echo "$playername"; ?></td>
	          <td><?php echo "$kills"; ?></td>
	          <?php if ($mbk_d == 1) {?>
	          <td><?php echo "$mobkills"; ?></td>
	          <?php } ?>
	          <td><?php echo "$deaths"; ?></td>

	        </tr>
		<?php } ?>
	      </tbody>
	    </table>
	  </div>
	</div>

	</body>
</html>

<!-- [Kodlayan: BerkPW || Yapı Süresi: 16dk  || Ek Edit: 5dk || Ek Edit: 2dk] -->
