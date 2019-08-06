<div class="main">
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
<table id="dataTables" class="table table-striped table-bordered" style="width:50%">
<thead>
<tr>
<th>Ticket No:</th>
<th>Issue</th>
<th>Date </th>
<th>location</th>
<th>Description </th>
<th>Status</th>
</tr>
</thead>
        <tbody>
<?php foreach ($issue as $post) :
$this->load->helper('string');
$this->load->helper('date');?>
          <tr>
<td><?php
$format="%Y%m";
echo mdate($format);
echo random_string('numeric',2,5);?></td>

<td><?php echo $post['issue']?></td>
<td><?php echo $post['date']?></td>
<!-- <td><?php echo $post['description']?></td> -->
<td> hello</td>
<td>hi</td>
<td><span class="label label-success"><?php echo $post['status']?></span></td>

</tr>
       <?php endforeach ;?>    
        </tbody>
        
    </table>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-5.3.1.min.js"></script>
    <script type="text/javascript"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>

$(document).ready(function() {
    $('#dataTables').DataTable();
} );
</script>
<style>
	#dataTables{

	}
</style>	