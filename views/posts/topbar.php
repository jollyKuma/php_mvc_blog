<nav class="navbar navbar-default navbar-fixed-top" style="position: relative; margin-bottom: 20px;background-color: #1abc9c;">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="?controller=posts&action=index" style="color: #fff">My Blog</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav">
     </ul>
     <ul class="nav navbar-nav navbar-right">
        <li>
        <form action="?controller=posts&action=search" method="POST" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control inputMaterial" name="search"  id="search"placeholder="Search">
            <span class="highlight" style="width:240px"></span>
             <span class="bar" style="width:250px"></span>
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
      </form>
        </li>
       <li>

           <?php
                echo "<a href='?controller=auth&action=editUser&id=".$_SESSION['user_id']."'>" . $_SESSION['email'] . "</a>";
            ?>
       </li>
       <li><a href="?controller=auth&action=logout">Logout</a></li>
     </ul>
   </div><!--/.nav-collapse -->
 </div>
</nav>
