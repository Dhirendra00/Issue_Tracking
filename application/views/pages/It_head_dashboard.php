    



           <div class="container" id="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
        <thead>
            <tr>
                <th>Ticket No.</th>
                <th>Issue</th>
                <th>Priority</th>
                <th>Start date</th>
                <th>status</th>
                <th>Accept</th>
            </tr>
        </thead>
       <tbody>
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
<?php foreach ($issue as $post) :
$this->load->helper('string');
$this->load->helper('date');?>
          <tr>
<td><?php
$format="%Y%m";
echo mdate($format);
echo random_string('numeric',2,5);?></td>

<td><a href="" onclick="alert('<?php echo $post['description']?>')"><?php echo $post['issue']?></a></td>
<td><?php echo $post['date']?></td>
<!-- <td><?php echo $post['description']?></td> -->
<td>Room no 104</td>
<td>Completed</td>
<div class="assign">
<!-- <td><span class="label label-success"><?php echo $post['status']?></span></td> -->
<td id="demo<?php echo $post['id'];?>"><button class="assign" type="button"  ><span class="lnr lnr-checkmark-circle" onclick="acceptIssue(<?php echo $post['id'];?>)"></span></button></td>
</div>
</tr>
       <?php endforeach ;?>    
        </tbody>
        
    </table>
  
  <script type="text/javascript">
  	function acceptIssue(id){
  		var td = document.getElementById('demo'+id);
  		td.innerHTML=id;
  	}
  </script>