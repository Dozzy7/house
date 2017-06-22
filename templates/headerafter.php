<header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav nav-justified">
                        
                        <li><a href="index.php">Home</a></li>
                        <li><a href="buyerlanding.php">Buy</a></li>
                        <li><a href="favourite.php">Favorite</a></li>
                        <li><a href="agentpanel.php">Sell</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a data-scroll href="contactus.php">Contact Us</a></li>
                       <li> 
                       <form action="scripts/<?php echo $page?>logout.php">
                           <input type="submit" name="logout" id="logout" class="btn btn-default" value="Logout">
                       </form>
                       </li> 
                    </ul>
                </div>
            </div>
        </div>
        <div class=navbar-header>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </nav>
</header>