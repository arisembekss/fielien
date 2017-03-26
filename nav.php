<nav id="maindetNav" class="w3-black navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">C'fielien</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" onclick="document.getElementById('id001').style.display='block'">Eyeglasses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Lenses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Additional</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#team">Additional</a>
                    </li> -->
                   <!--  <li>
                        <a class="page-scroll" href="#contact">Contact</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        <!-- eyeglasses modal -->
    <div id="id001" class="w3-modal">
      <div class="w3-modal-content">
            <header class="w3-container w3-teal"> 
                <span onclick="document.getElementById('id001').style.display='none'" 
                class="w3-closebtn">&times;</span>
                <h2>Please Choose</h2>
            </header>
            <div class="w3-row">
                <div class="w3-half w3-container w3-green">
                    <a href="services.php?category=<?= urlencode(base64_encode(1)); ?>"><h2>Men Eyeglass</h2></a> 
                </div>
                <div class="w3-half w3-container">
                    <a href="services.php?category=<?= urlencode(base64_encode(2))?>"><h2>Women Eyeglass</h2></a> 
                </div>
            </div>
      </div>
    </div>
    </nav>