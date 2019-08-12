<head>
	<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<main>
<div class="wrappar">
<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link  href="summernote-bs4.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<div class="p-3 mb-2 bg-light text-dark">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="add_issues">
<a class="btn btn-success update-pro" id="add_issue"><i class="lnr lnr-plus-circle"></i> <span>Add Issues!</span></a>
</div>

<div class="main1" >
<h3>My Issues:</h3>
<table id="dataTables" class="table table-striped table-bordered" style="width:100%;">
<thead>
<tr>
<th>Ticket No:</th>
<th>Issue</th>
<th>Date </th>
<th>location</th>
<!-- <th>Description </th> -->
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
<td>Room no 104</td>
<td>Completed</td>
<!-- <td><span class="label label-success"><?php echo $post['status']?></span></td> -->

</tr>
       <?php endforeach ;?>    
        </tbody>
        
    </table>
    </div>

<div class="main2">
	<h3>Important updates!</h3>
	<label><span>. Computer of room 104 is not working</span></label></br>
	<label>.tomorrow system will be down due to maintance break from 1:00PM to 3:00PM</label>
</div>	

    <!-- adding issue form -->
    <div class="add_issue1">

       <div class="container"style="background: white; ">

  	<div class="cl1" style=" color: green; font-family: bold;">
  			<h3>ADD ISSUE</h3>
  <label style="color: red;">x</label>
</div>
  <form method="POST" action="add_issue">
   <div id="form" style="background: ivory; border-radius: 5px;"> 
    <label for="fname">Issue Title*</label>
<select>
	<option>select</option>
	<option><?php foreach ($issue_title as $post) {
		echo $post['issues_title'];
	} ?></option>
</select>
 
    <label for="fname">Description*</label><br>
    <textarea id="textarea" name="textarea"></textarea><br>
    
      <label for="fname">Date*</label>
      <br>
    <input type="date" value="<?php echo date('Y-m-d')?>" name="date" 
    min=<?php echo date('Y-m-d')?>>
<br>
         <label for="fname">Priority*</label>
   <select><option>High</option>
   	<option>Moderate</option>
   	<option>Low</option></select>

 

    </div><br><hr>
    <input type="submit" value="Add Issue">
  </form>

</div>
						
		</div>




</div>
</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-5.3.1.min.js"></script>
    <script type="text/javascript"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
   CKEDITOR.replace( 'textarea' );
             


var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);

$(document).ready(function() {
    $('#dataTables').DataTable();
} );


  document.getElementById('add_issue').addEventListener("click", function() {
	document.querySelector('.add_issue1').style.display = "flex";
	
});
	document.querySelector('.cl1').addEventListener("click", function() {
	document.querySelector('.add_issue1').style.display = "none";
});	
</script>
</main>	
<style>
	#dataTables{
 font-size: 12px;
	}
	.wrappar{
		display: flex;
		/*flex-direction: row;*/
		
	
	}
	.main1{
		border: 2px solid white ;
		border-radius: 5px; 
		background: white;
		 width: 100%;
		 margin-left: 150%;
		 margin-top: 5%;
	
	}
		.main2{
   border: 2px solid white ;
   border-radius: 5px;
    background: white;
    width: 110%;
    margin-left: 10%;
   margin-top: -60%;
   height: 115%;
	}

.add_issues{
	display: flex;
	justify-content: flex-end;
	margin-left: 250%;
	margin-top: 100px;
	align-items: center;
	color: white;
}
input[type=text], select, textarea,iframe {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 20px;
  resize: vertical;
}
input[type=date]{
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;
}
input[type=number]{
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
margin-bottom: 10px;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form{
	border-radius: 15px solid;
}
.add_issue1{
	width: 100%;
	height: 100%;
	background:rgba(0,0,0,0.7);
	  position: absolute;
	  top: 0;
	  justify-content: center;
	  align-items: top;
	  display: none;
}
/*.add_category{
	width: 100%;
	height: 100%;
	background:rgba(0,0,0,0.7);
	  position: absolute;
	  top: 0;
	  justify-content: center;
	  align-items: top;
	  display: none;
}*/
.container {
height: fit-content;
  border-radius: 5px;
  background-color: #f2f2f2;
margin-top: 100px;
  padding-top: 5px;
  width: 50%;
}
.cl {
	display: flex;
	justify-content: space-between;
	/*position: absolute;*/
	/*margin-top: -20px;*/
	/*margin-left: 620px;*/
	top: 2;
	/*right: 10px;*/
	font-size: 25px;
	color: #333;
	/*transform: rotate(45deg);*/
	cursor: pointer;
	&:hover {
		color: #666;
	}
}
.cl1 {
	display: flex;
	justify-content: space-between;
		top: 2;
	/*right: 10px;*/
	font-size: 25px;
	color: #333;
	cursor: pointer;
	&:hover {
		color: #666;
	}
}





.active {

  color: white;
}
</style>				