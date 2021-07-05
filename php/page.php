 <!-- content -->
  <div class="container-fluid pt-5 pb-5">
    <div class="row">
      <div class="col-sm-8 gx-5">
          <?php if ($page->coverImage()): ?>
          <img src="<?php echo $page->coverImage(); ?>" class="card-img-top" alt="<?php echo $page->title(); ?>" style="width:100%;height:500px;object-fit: cover;border-radius: 5px;">
          <?php endif ?>
          <figcaption class="figure-caption text-left pt-3"><?php echo $page->custom('figure'); ?></figcaption>
          <?php Theme::plugins('pageBegin'); ?>
          <div class="card-body p-4">
            <h2 class="card-title text-dark fw-bold pt-2"><?php echo $page->title(); ?></h2>
            <p class="card-text pb-3"><span class="badge border border-2 border-dark rounded-pill text-dark"><?php echo $page->category() ?></span> <small class="text-dark"><?php echo $page->date(); ?></small></p>
            <?php echo $page->content(); ?>
            <!-- Replace with your share toolbox -->
            <div class="addthis_inline_share_toolbox pt-3"></div>
          <!-- tags -->
          <?php if (!empty($page->tags(true))): ?>
          <nav class="pt-4 pb-2" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
              <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
              <li class="breadcrumb-item"><a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><span class="badge bg-warning text-dark p-2"><?php echo $tagName; ?></span></a></li>
              <?php endforeach ?>
            </ol>
          </nav>
          <?php endif; ?>
          <!--/ tags -->
          <?php Theme::plugins('pageEnd'); ?>
          </div>
      </div>
     <?php include ('sidebar.php'); ?>
  </div>
</div>