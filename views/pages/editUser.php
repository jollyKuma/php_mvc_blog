<?php require 'views/posts/topbar.php';?>
 <div class="container" style="width: 960px; margin: 0 auto;">
 	<h3>Edit Account </h3>
 		<p>
 			<div class="row posts">
 		        <div class="col-lg-8">
 					<div class="panel panel-default">
 					  <div class="panel-body">

                        <?php
                         $user_id = $_GET['id'];
                          echo "<a href='?controller=auth&action=deleteUser&id=$user_id' type='button' class='btn btn-danger pull-right'>Delete Account</a>";
                         ?>

                        <?php

                        $user_id = $_GET['id'];

                        echo "<h1>Edit</h1>" . "<br>";
                        echo "<form action=\"?controller=auth&action=submitEditUser\" method=\"POST\">";
                        echo " <input type='hidden' class='form-control' name='user_id' value='". $user_id ."'>";
                        echo " Email<input type='text' value='" . $_SESSION['email'] . "' disabled='true' class='form-control' >" . "<br>";
                        echo " Password<input type='password' class='form-control' name='password' required>" . "<br>";
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
