<div class="container">
<div class="row">
<div class="col-md-12">
<h3>CRUD Operations using CodeIgniter</h3> <hr />

<!--- start flash Message --->
<?php include('flashMsg.php')?>
<!--- End flash Message --->


<a href="<?php echo site_url('users/account'); ?>" style="float: left;">
<button class="btn btn-success">
<span class="spinner-border spinner-border-sm"></span>
Home</button></a>

<a href="<?php echo site_url('insert'); ?>" style="float: right;">
<button class="btn btn-info">
<span class="spinner-border spinner-border-sm"></span>
 Insert Record</button></a>

<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Contact</th>
<th>Address</th>
<th>Posting Date</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$cnt=1;
foreach($result as $row)
{
?>
    <tr> 
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row->FirstName);?></td>
    <td><?php echo htmlentities($row->LastName);?></td>
    <td><?php echo htmlentities($row->EmailId);?></td>
    <td><?php echo htmlentities($row->ContactNumber);?></td>
    <td><?php echo htmlentities($row->Address);?></td>
    <td><?php echo htmlentities(date("d-m-Y",strtotime($row->PostingDate)));?></td>
    <td>
<?php
//for passing row id to controller
 echo  anchor("Read/getdetails/{$row->id}",' ','class="fa fa-pencil btn-success btn-sm"')?>
</td>
<td onclick="return confirm('Are you sure to delete?')">
<?php
//for passing row id to controller
 echo anchor("Delete/index/{$row->id}",' ','class="fa fa-trash btn-danger btn-sm" ')?>
</td>
</tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

<script>
    
</script>