<!-- js script for delete confirmation -->
<script type="text/javascript" src="<?=HOME_PATH?>js/confirmation_delete.js"></script>
</head>
<body>
  <!-- -->
  <div class="box">
    <nav class="breadcrumb">
    <a class="breadcrumb-item" href = "<?php echo HOME_PATH; ?>">Home</a> /
    <a class="breadcrumb-item" href="#">News</a> /
    <span class="breadcrumb-item active" href="#">List</span>
    </nav>
  </div>
  <!-- -->
<div class="box">
  <a href = "<?=HOME_PATH?>news/formNews"> + Tambah Data </a><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <td>No</td> <td>Posts</td> <td>View Detail</td> <td>Delete</td> <td>Edit</td>
      </tr>
    </thead>
  <?php
  foreach ($data['posts'] as $list)
  {
    echo "<tr>";
    echo "<td valign='top'>".$list['id']. "</td>";
    echo "<td valign='top'>".$list['title']. "</td>";
    echo "<td valign='top'>";
    echo "<a href = ".HOME_PATH."news/newsDetail/".$list['id']."/".$list['title_uri'].">View post</a>";
    echo "</td><td>";
    echo "<a href = ".HOME_PATH."news/delete/".$list['id']." onclick='return confirmasi()'><i class='fa fa-trash-o'></i> Delete Post </a>";
    echo "</td><td>";
    echo "<a href = ".HOME_PATH."news/formUpdate/".$list['id']."><i class='fa fa-pencil'></i> Edit post</a> </td>";
    echo "</tr>";
  }
  ?>
</table>
</div>

</body>
</html>
