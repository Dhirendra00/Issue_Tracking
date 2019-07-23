<div class="main">
	  <div class="container"style="background: #008080; ">

  	<div class="cl" style=" color: white;">
  			<h2>Add Issue</h2>
  <label style="color: red;">x</label>
</div>
  <form method="POST" action="add_issue" >
 <div id="form"style="background: ivory; border-radius: 5px;">
    <label for="fname">Ticket No.</label>
    <input type="number"  name="ticket" placeholder="Your name..">

    <label for="lname">Title</label>
    <input type="text" id="lname" name="title" placeholder="Your last name..">
<label>Category</label>
<input type="text" name="category">
<label>Assigned_to</label>
<input type="text" name="assigned">
<label>Due_Date</label>
<input type="date" name="date">
    <label for="country">Status</label>
    <select id="country" name="status">
      <option value="Completed">Completed</option>
      <option value="Partial">Partial</option>
      <option value="Incomplete">Incomplete</option>
    </select>

    <label for="subject">Description</label>
   <input type="text" name="description">
</div>
<br><hr>
    <input type="submit" value="Add Issue">
  </form>

</div>
						
		</div>
</div>