<?php include "templates/include/header.php" ?>
      <form align="center" action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul align=center>
            <p>Login</p>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />

            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          

        </ul>

        <div class="buttons">
          <input type="submit" class="btn btn-success" name="login" value="Login" />
        </div>

      </form>

<?php include "templates/include/footer.php" ?>

