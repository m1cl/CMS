<?php
	function nav_main($link,$pageid){
		$query = "SELECT * FROM pages";
		$result = mysqli_query($link, $query);	
		while($nav = mysqli_fetch_assoc($result)) { ?>

		<li<?php if($pageid == $nav['id']){echo ' class="active"';}?>><a href="?page=<?php echo $nav['id']?>"><?php echo $nav['label']?></a></li>
<?php } 
	}
?>
