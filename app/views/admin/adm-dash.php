<?php
// init file
$list_lib = $data['lib'];
$list_cont = $data['cont'];
$list_models = $data['models'];
$list_helpers = $data['helpers'];
$list_conf = $data['conf'];

// init mysql tables
$list_table = $data['table'];
?>

<!--meta name="viewport" content="width=device-width, initial-scale=1.0" /-->
<link rel="stylesheet" type="text/css" href="<?=HOME_PATH?>css/adm-layout.css">

<style>
/* Style for top button */
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
/* End style for top button */
</style>
</head>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fa fa-arrow-circle-up" aria-hidden="true"></i> </button>

<div class="adm-wrapper">
	<div class="adm-sidebar">
		<div class="box-black">
			<h3>minif admin</h3>
		</div>
		<nav>
			<ul>
				<li id="#"><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> System</a>
				<li><a><i class="fa fa-gear" aria-hidden="true"></i> Products</a>
				<li><a href="#item3"><i class="fa fa-life-ring" aria-hidden="true"></i> Services</a>
				<li><a href="#item4"><i class="fa fa-line-chart" aria-hidden="true"></i> Contact Us</a>
				<li><a href="#item4"><i class="fa fa-user" aria-hidden="true"></i> Manage User</a>
				<li><a href="#item4"><i class="fa fa-wordpress" aria-hidden="true"></i> Blog Posts</a>
				<li><a href="#database"><i class="fa fa-database" aria-hidden="true"></i> Database</a>
			</ul>
		</nav><hr>
	</div>

	<div class="adm-content">
		<div class="adm-lib">
		<b>Library</b>
		<div class="adm-list">
      <table class="table-striped" width="100%">
			<?php
				foreach($list_lib as $lib )
					{
            echo "<tr>";
            echo "<td>".$lib['filename']."</td><td align='right'>".$lib['filesize2']."</td>";
            echo "</tr>";
					}
			?>
      </table>
		</div>
		</div>
		<div class="adm-cont">
			<b>Controllers</b>
			<div class="adm-list">
        <table class="table-striped" width="100%">
				<?php
					foreach($list_cont as $cont )
						{
              echo "<tr>";
							echo "<td>".$cont['filename']."</td><td align='right'>".$cont['filesize2']."</td>";
              echo "</tr>";
						}
				?>
        </table>
			</div>
		</div>
		<div class="adm-view">
			<b>Models</b>
			<div class="adm-list">
        <table class="table-striped" width="100%">
				<?php
					foreach($list_models as $model )
						{
              echo "<tr>";
							echo "<td>". $model['filename'] ."</td><td align='right'>". $model['filesize2']. "</td>";
              echo "</tr>";
						}
				?>
        </table>
			</div>
		</div>
		<div class="adm-bin">
			<b>Bin</b>
			<div class="adm-list">
				<?php /*
					foreach($list_bin as $bin )
						{
							echo "<li>".$bin['filename']." (".$bin['filesize2'].")</li>";
						} */
				?>
			</div>
		</div>
		<div class="adm-tools">
			<b>Configuration file</b>
			<div class="adm-list">
        <table class="table-striped" width="100%">
				<?php
					foreach($list_conf as $conf )
						{
              echo "<tr>";
							echo "<td>".$conf['filename']."</td><td align='right'>".$conf['filesize2']."</td>";
              echo "</tr>";
						}
				?>
      </table>
			</div>
		</div>
		<div class="adm-api">
			<b>API</b>
			<div class="adm-list">
				<?php /*
					foreach($list_api as $api )
						{
							echo "<li>".$api['filename']." (".$api['filesize2'].")</li>";
						} */
				?>
			</div>
		</div>
		<div class="adm-media">
		<b>Helpers</b>
			<div class="adm-list">
        <table class="table-striped" width="100%">
				<?php
					foreach($list_helpers as $media )
						{
              echo "<tr>";
							echo "<td>".$media['filename']."</td><td align='right'>".$media['filesize2']."</td>";
              echo "</tr>";
						}
				?>
      </table>
			</div>
		</div>
		<div class="adm-lib">
		</div>
	</div> <!-- End of Content 1 -->

	<div class="adm-content-2">
		<div class="adm-db">
			<a name="database"></a><b>Database Properties</b>
			<div class="adm-list">
        <table class="table-striped" width="100%">
				<?php
					echo "<tr><td>Host</td><td>	: </td><td> ".host."</td></tr>";
					echo "<tr><td>User</td><td> : </td><td> ".user."</td></tr>";
					echo "<tr><td>Password</td><td>	: </td><td>".password."</td></tr>";
					echo "<tr><td>Databases</td><td> : </td><td>".dbname."</td></tr>";
				?>
        </table>
				<br>
        <a class="btn btn-danger" href = "<?=HOME_PATH?>admin/saveLogToDb">
          <i class="fa fa-floppy-o" aria-hidden="true"></i> Export log data to MySQL table
        </a>
			</div>
		</div>
		<div class="adm-db-table">
			<b>Tables</b>
			<div class="adm-list">
        <table class="table-striped" width="100%">
				<?php
					foreach($list_table as $table){
            echo "<tr>";
            echo "<td>".$table[0]."</td>";
            echo "</tr>";
					}
				?>
        </table>
			</div>
		</div>
		<div class="adm-db-post">
			<div class="post-img">
				<img src="<?=HOME_PATH?>content/image/thumb_image2.jpg">
			</div>
			<div class="post-list">
				<h6><a href="#">Southern Rock of America</a></h6>
				I was trying to find a way for positioning div element side by side, and finally I found that on Stack overflow.
			</div>
			<div class="post-img">
				<img src="<?=HOME_PATH?>content/image/thumb_image1.jpg">
			</div>
			<div class="post-list">
				<h6>News from Gaza</h6>
				I was trying to find a way for positioning div element side by side, and finally I found that on Stack overflow.
			</div>
		</div>
	</div> <!-- End of Content 2 -->
</div> <!-- Wrapper -->

<script src="<?=HOME_PATH?>js/top_button.js"> </script>

</body>
</html>
