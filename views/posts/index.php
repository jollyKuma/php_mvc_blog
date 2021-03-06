<?php
	require 'topbar.php';
 ?>
<div class="center">
   <div class="form_wrapper">
    <form action="?controller=posts&action=add" enctype="multipart/form-data" method="POST" class="form-inline">
        <div class="group">
        <input class="inputMaterial" name="title" type="text" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Title</label>
         </div>
        <div class="form-group">
            <div class="group" >
            <textarea class="inputMaterial" id="content" name="content" required placeholder="Say Something..."></textarea>
            <span class="highlight"></span>
             <span class="bar"></span>
         </div>
        </div>
          <div class="form-group">
          <div ><input type="file" name="toProcess" id="toProcess" class="file fa fa-camera" ></div>
          </div>
          <div class="btnPost">
        <button id="btn_register" name="upload" type="submit" style="width: 70px;margin-right:10px">Post</button></div>
      </form>
      </div>
	<br>
	<h3>Posts: </h3>
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
