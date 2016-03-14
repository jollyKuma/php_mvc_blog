<?php
	require 'topbar.php';
 ?>
<div class="center">
	<br>
	<h3>Search Reults: </h3>
	<?php
	$user_id = $_SESSION['user_id'];
	 foreach ($posts as $post) { ?>
		<p>

			<div class="row posts">
				<div class="col-lg-2">
				</div>
		        <div class="col-lg-8">
					<div class="panel panel-default">
					  <div class="panel-body">
						  <?php

							if ($user_id == $post->user_id) {
								echo "<a href='?controller=posts&action=delete&id=$post->post_id' type='button' class='btn btn-danger pull-right'>Delete</a>";
								echo "<a href='?controller=posts&action=show&id=$post->post_id' type='button' class='btn btn-default pull-right'>Edit</a>";
							}

						   ?>
						   <small  id="time_posted"><?php echo $post->created; ?> <i>posted by</i> : <?php echo $post->email ?></small>

						  <div class="row">
							  <div class="col-xs-12 col-md-12">
							    <a href="" class="thumbnail">
									<?php
										echo "<img src='$post->filepath'>";
									 ?>
							    </a>
							  </div>
						  </div>

						  <h4><?php echo $post->title; ?></h4>
						  <hr>
						  <?php echo $post->content; ?>
						  <br>

					  </div>
					</div>
		        </div>
				<div class="col-lg-2">
				</div>
		    </div>
		</p>
	<?php } ?>
</div>
