<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel"><b>Login</b></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Don't have an account?<a href="signup.php"><b>Register</b></a>
        <br><br>
        <form action="login_script.php" method="post">
          <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Email/User name">
          <br>  <br><input type="password" name="password" id="password" placeholder="Password">
          <br><br>  <button class="btn btn-primary" type="submit" name="submit" id="submit">Submit</button>
          <?php echo $_GET['error']; ?>
          </div>
        </form>
        <a href="#"><b> Forget password?</b></a>
      </div>
      
       
      
      
    </div>
  </div>
</div>