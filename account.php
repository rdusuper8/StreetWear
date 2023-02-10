
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary"><font color="#EFEFEF">Edit Profile</font></h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src='<?php echo $_SESSION['Foto']?>' class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Editar <strong>conta</strong>
        </div>
        <h3>Personal info</h3>
        
<style> 
input[type=text] {
  color: black;
}
</style>
        

        <form class="form-horizontal" role="form" action=index.php?cmd=edituser>
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $_SESSION['NomeUtil']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text" value="<?php echo $_SESSION['Email']?>">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

