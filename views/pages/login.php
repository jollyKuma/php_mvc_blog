<div class="box">
  <div id="header">
    <div id="cont-lock"><i class="fa fa-lock lock"></i></div>
    <div id="bottom-head"><h1 id="logintoregister">Login</h1></div>
  </div>
  <form action="?controller=auth&action=login" method="POST">
   <div class="group">
     <input class="inputMaterial" name="email" type="text" required>
     <span class="highlight"></span>
     <span class="bar"></span>
     <label>Email</label>
   </div>
     <div class="group">
     <input class="inputMaterial" name="password" type="password" required>
     <span class="highlight"></span>
     <span class="bar"></span>
     <label>Password</label>
   </div>
    <button id="btn_login" type="submit">Login</button>
  </form>
  <div id="footer-box"><p class="footer-text">Not a member?<a href="?controller=pages&action=register"><span class="sign-up"> Sign up now</span></a></p></div>
</div>
