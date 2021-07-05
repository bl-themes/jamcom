 <!-- content -->
  <div class="container-fluid pb-5">
    <div class="row">
      <div class="col-sm-12 gx-5 text-center">
          <div class="card-body p-4">
            <img src=" <?php echo Theme::src('img/404-Error-bro.png'); ?>" class="img-fluid" alt="Error 404 Not Found!" width="600">
            <h1 class="card-title text-dark fw-bold pt-2">SORRY!</h1>
            <h3 class="card-text">we couldn't find that page</h3>
            <p class="card-text text-secondary">try searching or go to <a classp="text-secondary" href="<?php echo $site->url(); ?>"><?php echo $site->title(); ?> Home Page</a></p>
          </div>
      </div>
  </div>
</div>