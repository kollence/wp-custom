<div class="container">
				<header class="content-header">
					<div class="meta mb-3"><span class="date"><?php echo the_date(); ?></span>
                        <!-- <span class="tag">
                            <i class='fa fa-tag'></i> tag
                        </span> -->
                        <?php 
                        echo the_tags('<span class="tag"><i class="fa fa-tag"></i> ', '</span><span class="tag"><i class="fa fa-tag"></i> ', '</span>');
                        ?>
                        <!-- <span class="tag">
                            <i class='fa fa-tag'></i> category
                        </span> -->
                        <span class="comment">
                            <a href="#comments"><i class='fa fa-comment' style="color: #212529;"></i><?php comments_number(); ?></a>
                        </span>
                    </div>
				</header>

<?php 

the_content();

?>
</div>