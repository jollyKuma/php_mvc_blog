<?php
	require 'topbar.php';
 ?>

<div class="container">
	<a href='?controller=posts&action=addPosts' class="btn btn-primary">Add Posts</a>
	<br>
	<h3>Posts: </h3>
	<?php
	$user_id = $_SESSION['user_id'];
	 foreach ($posts as $post) { ?>
		<p>

			<div class="row posts">
		        <div class="col-lg-8">
					<div class="panel panel-default">
					  <div class="panel-body">
						  <?php

							if ($user_id == $post->user_id) {
								echo "<a href='?controller=posts&action=delete&id=$post->post_id' type='button' class='btn btn-danger pull-right'>Delete</a>";
								echo "<a href='?controller=posts&action=show&id=$post->post_id' type='button' class='btn btn-default pull-right'>Edit</a>";
							}

						   ?>

						  <?php echo $post->title; ?>
						  <div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="" class="thumbnail">
									<?php
										echo "<img src='$post->filepath'>";
									 ?>
							    </a>
							  </div>
						  </div>

						  <?php echo $post->content; ?>
						  <br>
						   <?php echo $post->created; ?>
						  <br>

					  </div>
					</div>
		        </div>
				<div class="col-lg-4">
				</div>
		    </div>

		</p>
	<?php } ?>
</div>
