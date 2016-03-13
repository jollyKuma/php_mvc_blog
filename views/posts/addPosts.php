<div class="box" style="height:100%; width:100%;">
    <div id="header">
      <div id="cont-lock"><i class="fa fa-pencil-square-o lock"></i></div>
      <div id="bottom-head"><h1 id="logintoregister">My Blog</h1></div>
      <ul class="nav navbar-nav navbar-right ">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user">Username</i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-cogs"> Account</i></a></li>
            <li><a href="#"><i class="fa fa-sign-out"> Logout</i></a></li>
          </ul>
        </li>
      </ul>
    </div> 
    <div class="form_wrapper">
    <form class="form-inline">  
        <div class="group">      
        <input class="inputMaterial" type="text" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Title</label>
         </div>
        <div class="form-group">
            <div class="group" >  
            <textarea class="inputMaterial" id="content" required placeholder="Say Something..." style="width: 400px"></textarea>
            <span class="highlight" style="width:400px"></span>
             <span class="bar" style="width:400px"></span>
         </div>
        </div>
          <div class="form-group">
          <div ><input type="file" id="img_file" class="file fa fa-camera" ></div>
          </div>
        <button id="btn_register" type="submit" style="width: 70px;margin-right:10px">Post</button>
      </form>
      </div>
  <div id="footer-box"></div>
</div>