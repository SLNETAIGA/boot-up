<?php include "templates/include/header.php" ?>
<?php include "templates/admin/include/header.php" ?>
<style type="text/css">
   .table { cursor: pointer; }
  </style>
      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="categoryId" value="<?php echo $results['category']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" placeholder="Name of the category" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['category']->name )?>" />
			<br>
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Brief description of the category" required maxlength="1000" style="height: 5em; width: 15em;"><?php echo htmlspecialchars( $results['category']->description )?></textarea>

        </ul>

        <div class="buttons">
          <input class="btn btn-success" type="submit" name="saveChanges" value="Save Changes" />
          <input class="btn btn-warning" type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if ( $results['category']->id ) { ?>
      <p><a class="btn btn-danger" href="admin.php?action=deleteCategory&amp;categoryId=<?php echo $results['category']->id ?>" onclick="return confirm('Delete This Category?')">Delete This Category</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>

