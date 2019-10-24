<?php
session_start();
ob_start();
    include('../server/conn.php');
    include('../templates/header2.php');
    include 'see.php';
?>
<div class="w3-row w3-margin ">

	<div class="">
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-teal">New Task</button>
			</div>
	<div class="w3-col s12 m6 l3 w3-container w3-padding">
		<div class="w3-container w3-card w3-white w3-round">
			<br>
			<header class="w3-theme-l2">Daily Task</header>
			
			<br>
<?php
$type="daily";
see($type);
?>
<br>

		</div>
	</div>
	<div class="w3-col s12 m6 l3 w3-container w3-padding">
		<div class="w3-container w3-card w3-white w3-round">
			<br>

			<header class="w3-theme-l2" >weekly Task</header>			<br>
			<?php
			$type="weekly";
			see($type);
			?>
<br>
		</div>
	</div>
	<div class="w3-col s12 m6 l3 w3-container w3-padding">
		<div class="w3-container w3-card w3-white w3-round">
			<br>
			<header class="w3-theme-l2">Monthly Task</header>
			
			<br>
			<?php
			$type="monthly";
			see($type);
?>
<br>

		</div>
	</div>
		<div class="w3-col s12 m6 l3 w3-container w3-padding">
		<div class="w3-container w3-card w3-white w3-round">
			<br>
			<header class="w3-theme-l2">Yearly Task</header>
			
			<br>
			<?php
			$type="yearly";
			see($type);
?>
<br>

		</div>
	</div>
<div id="id01" class="w3-modal">
	 <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <br>
      <br>
	<form method="post" action="process.php">
		<input type="text" name="purpose" required placeholder="Task" class="w3-input w3-round w3-border"><br>
		<label>Type</label>
		<select name="type" class="w3-select w3-border">
			<option value="daily">Daily</option>
			<option value="weekly">Weekly</option>
			<option value="monthly">Monthly</option>
			<option value="yearly">Yearly</option>

		</select><br><br>
		<input type="date" name="fromdate" required placeholder="Starting From" class="w3-input w3-round w3-border"><br>
		<input type="date" name="todate" required placeholder="Up to" class="w3-input w3-round w3-border"><br>
		<input type="submit" name="submit" value="submit" class="w3-btn w3-green w3-round">
	</form>
      <br>

</div>
</div>
</div>
<br>
</div>
<?php
include_once("../templates/footer.php");
?>
<style type="text/css">
	header{
		text-align: center;
	}
</style>