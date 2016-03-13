<?php
	require 'topbar.php';
 ?>

<div class="box" style="height:100%; width:100%;">
    <div id="header">
      <div id="cont-lock"><i class="fa fa-pencil-square-o lock"></i></div>
      <div id="bottom-head"><h1 id="logintoregister">My Blog</h1></div>
    </div>
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
        <button id="btn_register" name="upload" type="submit" style="width: 70px;margin-right:10px">Post</button>
      </form>
      </div>
  <div id="footer-box"></div>
</div>
