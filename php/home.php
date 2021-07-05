<!-- content -->
  <div class="container-fluid pt-5 pb-5">
    <div class="row">
      <div class="col-sm-8 gx-5">
        <?php if ($WHERE_AM_I == 'home'): ?>
      <?php
      $featured = array_slice($content, 0, 1);
      $content = array_slice($content, 1);
      foreach ($featured as $page):
      ?>
        <a class="text-decoration-none link-dark" href="<?php echo $page->permalink(); ?>">
        <div class="card mb-3 mb-5 bg-light text-dark border-0">
          <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="<?php echo $page->title(); ?>" style="width:100%;height:300px;object-fit: cover;">
          <div class="card-body p-4">
            <h4 class="card-title text-dark fw-bold"><?php echo $page->title(); ?></h4>
            <p class="card-text"><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme':$page->description()) ?></p>
            <p class="card-text"><span class="badge border border-2 border-dark rounded-pill text-dark"><?php echo $page->category() ?></span> <small class="text-dark"><?php echo $page->date(); ?></small></p>
          </div>
        </div>
        </a>
        <?php endforeach ?>
        <?php endif; ?>
        <?php if (empty($content)) { $language->p('No pages found'); } ?>
        <?php foreach ($content as $page): ?>
        <a class="text-decoration-none link-dark" href="<?php echo $page->permalink(); ?>">
        <div class="row mb-4">
          <div class="col-sm-5 pb-3">
            <img class="img-fluid rounded" src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="...">
          </div>
          <div class="col-sm-7 align-self-center">
            <h5 class="fw-bold"><?php echo $page->title(); ?></h5>
            <p><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
            <p class="text-muted"><span class="badge border border-2 border-dark rounded-pill text-dark"><?php echo $page->category() ?></span> <small claass="text-muted"><?php echo $page->date(); ?></small></p>
          </div>
        </div>
        </a>
        <?php endforeach ?>
      </div>
      <?php include ('sidebar.php'); ?>
    </div>
  </div>
<!--/ content -->
