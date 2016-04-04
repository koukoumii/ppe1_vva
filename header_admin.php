<!DOCTYPE html> 
<html> 
<head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Hébèrgement villageois</title>
        <?php include('components/links.php');?>
</head> 

<header id="header">      
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li class="dropdown"><a href="#">Consulter les profils <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="#">Inscrits</a></li>
                                <li><a href="#">Employé VVA</a></li>
                                <li><a href="#">Villageois</a></li>
                            </ul>
                        </li>                  
                        <li class="dropdown"><a href="#">Administration <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="#">Rechercher</a></li>
                                <li><a href="#">Reservation</a></li>
                                <li><a href="#">Etat reservation</a></li>
                                <li><a href="#">En attente</a></li> 
                                <li><a href="#">Historique</a></li>
                            </ul>
                        </li>                                     
                    </ul>
                </div>
               <!-- La recherche reste à créer <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>-->
                </div>
            </div>
        </div>
    </header>
    <!--/#header--> 
</html>