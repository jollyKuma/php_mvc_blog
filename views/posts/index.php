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
            <textarea class="inputMaterial" id="content" name="content" required placeholder="Say Something..." style="width: 400px"></textarea>
            <span class="highlight" style="width:400px"></span>
             <span class="bar" style="width:400px"></span>
         </div>
        </div>
          <div class="form-group">
          <div ><input type="file" name="toProcess" id="toProcess" class="file fa fa-camera" ></div>
          </div>
          <div class="btnPost">
        <button id="btn_register" name="upload" type="submit" style="width: 70px;margin-right:10px">Post</button></div>
      </form>
      </div>
<div class="container ">
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
							    <a href="" class="thumbnail" style="height: 500px;width:500px; text-align: center">
									<?php
										echo "<img src='$post->filepath'>";
									 ?>
							    </a>
							  </div>
						  </div>
                         <?php echo $post -> user_id . ":"?>
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
</div>
