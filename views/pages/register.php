<div class="box" style="height:510px;">
  <div id="header">
    <div id="cont-lock"><i class="fa fa-lock lock"></i></div>
    <div id="bottom-head"><h1 id="logintoregister">Register</h1></div>
  </div>
   <form action="?controller=auth&action=register" method="POST">
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
    <button id="btn_register" type="submit">Register</button>
  </form>
  <div id="footer-box"></div>
</div>
