<?php 
	if (!isset($page_name)){
		$page_name='page_name';
	}
?>
<div class="content-wrapper">
	<div class="content-header" style="padding-bottom: 0px">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 col-md-12">
            <h2 class="m-0" style="font-weight: bold;"><?=$page_name?></h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<?php include ($path.'.php') ?>
			</div>
		</div>
	</section>
</div>