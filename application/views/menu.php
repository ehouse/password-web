<?php $weblinks = array('home','about'); ?>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo base_url() ?>"><?php echo $website ?></a>
      <div class="nav-collapse">
        <ul class="nav">
          <?php foreach($weblinks as $item):?>
            <li <?php echo strcmp($page_title, $item) ? '':"class='active'";?>><a href="./<?php echo $item ?>"><?php echo ucwords($item);?></a></li>
          <?php endforeach;?> 
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
