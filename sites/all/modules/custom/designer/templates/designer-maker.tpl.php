<div class="row">
    <div class="col-md-12">
        <h2>
            About
        </h2>
        <div class="deciplins-subs">
        <?php print "<span>".implode('</span> | <span>', $data['custom_6_value'])."</span>"; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
    	<img class="img-responsive" src="<?php print $data['custom_5_value']; ?>">
    </div>
    <div class="col-md-7">
    	<h4>BIOGRAPHY</h4>
        <?php print $data['custom_2']; ?>
    </div>
    <div class="col-md-3">
        <h4>Connect</h4>
        <?php if(!empty($data['email'])): ?>
        <div>
        	<span class="glyphicon glyphicon-globe"></span>
        	<a target="_blank" href="<?php print $data['website']; ?>">Visit Website</a>
        </div>
    	<?php endif; ?>
    	<?php if(!empty($data['email'])): ?>
        <div>
	        <span class="glyphicon glyphicon-envelope"></span>
	        <a href="mailto:<?php print $data['email']; ?>">Connect this desiner maker</a>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="desiner-detail-slider">
			<div id="protfolioCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			   <?php foreach($data['portfolio_images'] as $key => $val): ?>
			   	    <?php $active = ($key==0)?'active':''; ?>
				    <div class="item <?php print $active ?>">
				      <img src="<?php print url('civicrm/file/imagefile',array('query'=>array('id'=>$val,'eid'=>$data['contact_id']))) ?>" alt="Portfolio image">
				    </div>
				<?php endforeach; ?>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#protfolioCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#protfolioCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</div>