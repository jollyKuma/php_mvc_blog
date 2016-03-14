<?php require 'views/posts/topbar.php';?>
 <div class="container" style="width: 960px; margin: 0 auto;">
 	<h3>Edit Account </h3>
 		<p>
 			<div class="row posts">
 		        <div class="col-lg-8">
 					<div class="panel panel-default">
 					  <div class="panel-body">

                        <?php

                        echo "<h1>Edit</h1>" . "<br>";
                        echo "<form action=\"?controller=auth&action=editUser\" method=\"POST\">";
                        echo " <input type='hidden' class='form-control' name='id' value='". $auth->id ."'>";
                        echo " Password<input type='password' class='form-control' name='password' value='". $auth->password."' required>" . "<br>";
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
