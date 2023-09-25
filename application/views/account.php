<div class="container">
    <h2>Welcome <?php echo $user['first_name']; ?>!</h2>
    



   
   

    <div class="regisFrm">
    
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><a href="<?php echo site_url('read'); ?>" style="float: left;">
            <button class="btn btn-success">
            <span class="spinner-border spinner-border-sm"></span>
            View-Users</button></a></li>            

          <li class="list-group-item"><b>Name: </b><?php echo $user['first_name'].' '.$user['last_name']; ?></li>
          <li class="list-group-item"> <b>Email: </b><?php echo $user['email']; ?> </li>
          <li class="list-group-item"><b>Phone: </b><?php echo $user['phone']; ?> </li>
          <li class="list-group-item"> <b>Gender: </b><?php echo $user['gender']; ?></li>
            <li class="list-group-item"> <a href="<?php echo site_url('users/logout'); ?>" style="float: right;">
            <button class="btn btn-danger">
            <span class="spinner-border spinner-border-sm"></span>
            Logout</button></a></li>  
        </ul>  
           
            
           
    

         
        
    </div>
</div>
<hr>
