<?php include "templates/include/header.php" ?>
<?php include "templates/admin/include/header.php" ?>

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>
            <label for="title">News Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the news" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" />
<br>
            <label for="summary">News Summary</label>
            <textarea name="summary" id="summary" placeholder="Brief description of the news" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
<br>
            <label for="content">News Content</label>
            <textarea name="content" id="content" placeholder="The HTML content of the news" required maxlength="100000" style="height: 30em; width: 50em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
<br>
            <label for="categoryId">News Category</label>
            <select name="categoryId">
              <option value="0"<?php echo !$results['article']->categoryId ? " selected" : ""?>>(none)</option>
            <?php foreach ( $results['categories'] as $category ) { ?>
              <option value="<?php echo $category->id?>"<?php echo ( $category->id == $results['article']->categoryId ) ? " selected" : ""?>><?php echo htmlspecialchars( $category->name )?></option>
            <?php } ?>
            </select>
    

 <br>     
            <label for="publicationDate">Publication Date</label>
            <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
 


        </ul>

        <div class="buttons">
          <input class="btn btn-success" type="submit" name="saveChanges" value="Save Changes" />
          <input class="btn btn-warning" type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if ( $results['article']->id ) { ?>
      <p><a class="btn btn-danger" href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>

