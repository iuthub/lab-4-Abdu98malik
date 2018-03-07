<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link rel="stylesheet" href="buyagrade.css" />
	</head>

	<body>
		
		<?php if($_SERVER["REQUEST_METHOD"]=="POST"){
				//error_reporting(E_ALL ^ E_NOTICE);	
			
	 if($_POST["name"]!="" && $_POST["credit_card"]!="" && !empty($_POST["card"])){   
				$name=$_POST["name"];
				$select=$_POST["select"];
				$credit_card=$_POST["credit_card"];
				$card=$_POST["card"];
	    ?>
					<h1>Thanks, sucker!</h1>
					<p>Your information has been recorded.</p>
		<dl>			

			<dt>Name</dt>
			<dd> <?=$name ?></dd>

			<dt>Section</dt>
			<dd><?= $select?></dd>

			<dt>Credit Card</dt>
			<dd> <?php echo $credit_card."(".$card.")";  ?> </dd>
		</dl>
			<h3>All the suckers list </h3>
		<?php 

			$file='text.txt';
			file_put_contents($file,$name.";".$select.";".$credit_card.";".$card."\n", FILE_APPEND | LOCK_EX);
				
				foreach (file('text.txt') as $line) {
					echo $line."<br>";
				}
	}else { ?>
				<h1>SORRY !</h1>
				<br>
				<p> You didn't fill out the form completely. <a href="http://localhost/lecture6/buyagrade.html">Try agin !?</a></p>
	<?php }} ?>
	</body>
</html>
