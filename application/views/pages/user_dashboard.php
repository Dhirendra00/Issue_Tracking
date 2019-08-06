
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


</head>

<div class="main" style="width: 50%; display: flex; margin-top: 100px; height: 70%;">
<table id="dataTables" class="table table-striped table-bordered" >
        <thead>
            <tr>
             <th>Ticket No:</th>
			<th>Status</th>  
<th>Issue</th>
<th>Date </th>
<th>location</th>
<th>Description </th>
            </tr>
        </thead>
<tbody>       
            <?php 
            $this->load->helper('string');
$this->load->helper('date');
 foreach ($issue as $post) :?>

<tr>

<td><?php

$format="%Y%m";
echo mdate($format);
echo random_string('numeric',2,5);?></td>
<td><?php echo $post['issue']?></td>
<td><?php echo $post['date']?></td>
<td><?php echo $post['description']?></td>
<td><span class="label label-success"><?php echo $post['status']?></span></td>

</tr>


<?php endforeach ;?>
</tbody>

</table>
    <script  src="https://code.jquery.com/jquery-3.3.1.javascript"></script>
    
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script  src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
<script>

$(document).ready(function() {
    $('#dataTables').DataTable();
} );
</script>