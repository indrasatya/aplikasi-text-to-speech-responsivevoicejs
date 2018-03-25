<div class="page-header-login">
	<h4>
		<i style="margin-right:7px" class="fa fa-bullhorn"></i> Pemberitahuan
		<a href="pemberitahuan" class="pull-right"><i class="ace-icon fa fa-refresh"></i> Refresh </a>
	</h4>
</div><!-- /.page-header -->

<form action="pemberitahuan" method="POST">
	<fieldset>
		<label class="block clearfix">
			<span class="block">
				<textarea class="form-control" name="pemberitahuan" rows="3" required></textarea>
			</span>
		</label>

		<div class="clearfix">
			<input type="submit" class="btn btn-primary btn-block" name="proses" value="Proses" />
		</div>
	</fieldset>
</form>

<div class="space"></div>

<?php
if (isset($_POST['proses'])) {
  	$pemberitahuan = $_POST['pemberitahuan'];

  	echo   "<p class='tampil-pemberitahuan'>" . $pemberitahuan  . "</p><div class='space-4'></div>";
  	echo " <p><a class='btn btn-primary btn-block' onclick='responsiveVoice.speak(\" " . $pemberitahuan . " \", \"Indonesian Female\", {rate: 0.8, pitch: 1, volume: 1})'> Pemberitahuan </a></p><div class='space'></div><div class='space'></div>";
}
?>