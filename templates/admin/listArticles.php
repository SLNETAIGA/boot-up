<?php include "templates/include/header.php" ?>
<?php include "templates/admin/include/header.php" ?>
<style type="text/css">
   .table { cursor: pointer; }
  </style>
  
      <h1>All News</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table class="table table-bordered table-hover">
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
          <th>Category</th>
        </tr>

<?php foreach ( $results['articles'] as $article ) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
          <td>
            <?php echo $results['categories'][$article->categoryId]->name?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> news in total.</p>
      <p><a class="btn btn-success" href="admin.php?action=newArticle">Add a news</a></p>
	  <p>Current Boot-Up version: 1.0 | <a href="https://github.com/SLNETAIGA/boot-up/" target=_blank>Last version on GitHub.</a></p>

<?php include "templates/include/footer.php" ?>

