<?php include "templates/include/header.php" ?>
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

      <h1 style="width: 75%;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <div style="width: 75%;"><?php echo $results['article']->content?></div>
      <p class="pubDate">Published <?php echo date('j F Y', $results['article']->publicationDate)?>
<?php if ( $results['category'] ) { ?>
        in category <a href="./?action=archive&amp;categoryId=<?php echo $results['category']->id?>"><?php echo htmlspecialchars( $results['category']->name ) ?></a>
<?php } ?>
      </p>
      <script src="js/Share.js"></script>
      <p><a class="btn btn-primary" href="./">Go back</a></p>
<?php if(VK_APIID == 0000000){echo("<div class='alert alert-danger'> <strong>Error!</strong> When run vk-comments error detected: please specify apiid.</div>"); } ?>
<script type="text/javascript">
  VK.init({apiId: <?php echo(VK_APIID); ?>, onlyWidgets: true});
</script>
<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: <?php echo(VK_MAX); ?>, width: "<?php echo(VK_WIDTH); ?>", attach: "*"});
</script>
<?php include "templates/include/footer.php" ?>

