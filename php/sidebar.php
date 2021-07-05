<div class="col-sm-4 gx-5">
    <h4 class="border-start border-warning border-5">&nbsp;&nbsp;Categories</h4>
        <ul class="list-group list-group-flush text-dark pb-5">
          <?php foreach ($categories->db as $key=>$fields):
          if($fields['list']):  ?>
          <li class="list-group-item pb-3 pt-3"><a class="text-decoration-none link-dark fw-bold" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a></li>
          <?php
          endif;
          endforeach; ?>
        </ul>
    <h4 class="border-start border-warning border-5">&nbsp;&nbsp;Lates Post</h4>
        <ul class="list-group list-group-flush text-dark pb-5">
          <?php
            $listOfKeys = $pages->getList(1, 8);
            if ($listOfKeys) :
            foreach ($listOfKeys as $key) :
            $lPage = new Page($key);
          ?>
          <li class="list-group-item pb-3 pt-3"><a class="text-decoration-none link-dark fw-bold" href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
          <?php endforeach ?>
          <?php endif ?>
        </ul>
    <h4 class="border-start border-warning border-5">&nbsp;&nbsp;Page</h4>
        <ul class="list-group list-group-flush text-dark pb-5">
          <?php foreach ($staticContent as $staticPage): ?>
          <?php if ($staticPage->slug() != "error") { // hide error page from menu ?>
          <li class="list-group-item pb-3 pt-3"><a class="text-decoration-none link-dark fw-bold" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a></li>
          <?php } ?>
          <?php endforeach ?>
        </ul>
</div>