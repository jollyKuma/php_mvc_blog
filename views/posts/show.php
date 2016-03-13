<?php
	require 'topbar.php';
 ?>

 <div class="container">
 	<h3>Edit Post: </h3>
 		<p>
 			<div class="row posts">
 		        <div class="col-lg-8">
 					<div class="panel panel-default">
 					  <div class="panel-body">
                          <div class="row">
                              <div class="col-xs-6 col-md-3">
                                <a href="" class="thumbnail">
                                    <?php
                                        echo "<img src='$post->filepath'>";
                                     ?>
                                </a>
                              </div>
                          </div>

                        <?php

                        echo "<h1>Edit</h1>" . "<br>";
                        echo "<form action=\"?controller=posts&action=edit\" method=\"POST\">";
                        echo " <input type='hidden' class='form-control' name='id' value='". $post->post_id ."'>";
                        echo " Title <input type='text' class='form-control' name='title' value='". $post->title ."' required>" . "<br>";
                        echo " Content <input type='text' class='form-control' name='content' value='". $post->content ."' required>" . "<br>";
                        echo " <input type='submit' class='btn btn-success' onclick='return alert(\"Update Successful\")' value='Update' /> ";
                        echo "</form>";

                         ?>
 					  </div>
 					</div>
 		        </div>
 				<div class="col-lg-4">
 				</div>
 		    </div>
 		</p>
 </div>
