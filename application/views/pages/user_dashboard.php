             

                <div class="container" id="container">
            <div class="text-right text-success d-md-flex justify-content-md-end align-items-md-start"><button class="btn btn-primary border rounded" type="button" id="add_issue" href="google.com">+ Add Issues!</button></div>
            <div class="row">
               <!--  <div class="col-md-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <div class="col-md-9">
                    <div class="table-responsive">
           
                    </div>
                </div>
            </div>


             <table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
        <thead>
            <tr>
                <th>Ticket No.</th>
                <th>Issue</th>
                <th>Priority</th>
                <th>Start date</th>
                <th>status</th>
               
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
</div>   



<!-- adding issue form -->
    <div class="add_issue1">

       <div class="container22">

    <div class="cl1" style=" color: green; font-family: bold;">
            <h3>ADD ISSUE</h3>
  <label style="color: red;">x</label>
</div>
  <form method="POST" action="add_issue">
   <div id="form" style="background: ivory; border-radius: 5px;"> 
    <label for="fname">Issue Title*</label>
<select id="select" name="issue" onchange="return showTextArea();">
    <option value="sele">select</option>
<?php foreach ($issue_title as $post):?>
    <option value=<?php echo $post['id']?>> <?php echo $post['issues_title'] ?></option>
 <?php endforeach;?>

 <option value="other">Other</option>

</select>
<div id="text" style="visibility: hidden;">
  <!--   <label for="fname">Description*</label><br> -->
    <textarea  name="textarea" ></textarea><br>
</div>
  
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






<script>
 CKEDITOR.replace( 'textarea' );
             


var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);

$(document).ready(function() {
    $('#dataTables').DataTable();
} );


  document.getElementById('add_issue').addEventListener("click", function() {
    document.querySelector('.add_issue1').style.display = "flex";
    // document.querySelector("body").style.background = "rgba(0,0,0,0.7)";

    
});
    document.querySelector('.cl1').addEventListener("click", function() {
    document.querySelector('.add_issue1').style.display = "none";
}); 



</script>
<style>

input[type=text], select, iframe {
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
  height: 150%;
    background:rgba(0,0,0,0.7);
      position: absolute;
      top: 0;
      justify-content: center;
      align-items: top;
      display: none;
}
.container22 {
  background: white;
height: fit-content;
width: 100%;
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