<nav class="navbar navbar-default navbar-fixed-top" style="position: relative; margin-bottom: 20px">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="?controller=posts&action=index">App</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav">
     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href=""><?php echo $_SESSION['email'] ?></a></li>
       <li><a href="?controller=auth&action=logout">Logout</a></li>
     </ul>
   </div><!--/.nav-collapse -->
 </div>
</nav>
