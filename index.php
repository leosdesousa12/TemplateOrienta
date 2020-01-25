<?php
  
  session_start();


if( !isset($_SESSION['last_access']) || (time() - $_SESSION['last_access']) > 3600  ){
//echo "pegou os dados";
  $_SESSION['last_access'] = time();

  $myApiKey="AIzaSyAe9xuMADrprLqkBiKYc1b4yl1f97zEeQE"; // Provide your API Key
  $myChannelID="UCqYQILMttKeviOz2G8mZKSA"; // Provide your Channel ID
  $maxResults="2"; // Number of results to display
  
  //Make an API call to store list of videos to JSON variable
  $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=$maxResults";
  $videoList = file_get_contents($myQuery);
  
  // Convert JSON to PHP Array
 // $decoded = json_decode($videoList, true);
  $_SESSION['movies'] = json_decode($videoList, true);
}
    $decoded =$_SESSION['movies'];



   



 
?>

<div ng-controller="mainCtrl">
    <?php
    get_header();

?>

    <!-- Masthead -->
    <header class="text-white text-center pt-4 mt-4">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php query_posts('post_type=slider&post_per_page=-1'); ?>
                <?php $quant = 0; if(have_posts()): while(have_posts()): the_post();  $quant++?>

                <?php if($quant == 1 ):  ?>
                <div class="carousel-item active">
                    <img class="slider" url="<?php echo the_post_thumbnail(  'full', array( 'class' => 'slider' ) ); ?>"
                        alt="...">
                </div>
                <?php else: ?>
                <div class="carousel-item">
                    <img class="slider" url="<?php echo the_post_thumbnail(  'full', array( 'class' => 'slider' ) ); ?>"
                        alt="...">
                </div>
                <?php endif ?>

                <?php endwhile; ?>


                <?php else: ?>
                <?php endif ?>
                <?php wp_reset_query();?>
                <!--<div class="carousel-item active">
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/1722.jpg" class="d-block w-100"
                        alt="...">
                </div>-->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- equipe Section -->
    <section class="page-section equipe pb-5" id="equipe">
        <div class="container">

            <!-- Portfolio Section Heading -->
            <h1 class="text-center font-weight-normal text-primary ">EQUIPE</h1>
            <div class="container">
                <div class="row justify-content-md-center">
                    <?php query_posts('post_type=equipe&post_per_page=-1'); ?>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <a class="p-0 border-0 rounded-0"
                        href="<?php echo get_permalink( get_page_by_title( 'EQUIPE' ) );?>">
                        <div class="col-md-auto  p-0 border-0 rounded-0">
                            <div class="card text-white font-weight-bold  p-0 border-0 rounded-0" style="width: 23rem;">
                                <img class="card-img  p-0 border-0 rounded-0 " style="height: 355px;"
                                    url="<?php  the_post_thumbnail(); ?>" alt="Card image cap">
                                <div class="card-img-overlay d-flex flex-column capa">
                                    <div class="text-center mt-auto ">
                                        <h4><?php echo the_title();?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <?php endwhile; ?>


                    <?php else: ?>
                    <?php endif ?>
                    <?php wp_reset_query();?>
                </div>
            </div>
    </section>
    <div class="container text-center pb-3 mb-3 mt-0 pt-0">

        <!-- Portfolio Section Heading -->
        <h1 class="text-center font-weight-normal text-primary ">PROPOSTAS</h1>
        <div class="container text-center">
            <div class="row  ">
                <div class="col-md-12 text-center">
                    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item " ng-class="{'active text-primary':(($index ) == 0)}"
                                ng-repeat="post in posts">

                                <div class="col-lg-4 col-md-6 border-0 mr-0 pr-0 ml-0 pl-0"
                                    ng-style="{'background': post.color}">
                                    <div class=" text-center" style="background: post.color;">
                                        <a class="pr-0 pl-0 ml-0 mr-0" ng-href="{{post.link}}">

                                            <img class="card-img img-fluid img-thumbnail pt-4 mt-0 pt-0 mb-0 pb-0 border-0 rounded-0  "
                                                style="width: 200px;" ng-src="{{post.image[0]}}"
                                                ng-style="{'background': post.color}" />
                                        </a>
                                        <div class="card-body " ng-style="{'background': post.color}">
                                            <h4 class="card-text text-center text-white" ng-bind="post.title">
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <a class="carousel-control-prev bg-dark w-auto pr-0" href="#myCarousel" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon text-center ml-2 pl-2 pr-2 mr-2 "
                                aria-hidden="true"></span>
                            <span class="sr-only ">Previous</span>
                        </a>
                        <a class="carousel-control-next bg-dark w-auto pr-0" href="#myCarousel" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon text-center ml-2 pl-2 pr-2 mr-2 "
                                aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container text-center mt-3 pt-3 ">

        <!-- Portfolio Section Heading -->
        <h1 class="text-center font-weight-normal text-primary mt-3 pt-3 ">MATÉRIAS</h1>
        <div class="container">
            <div class="row  justify-content-center">
                <div class="card border-0 rounded-0 pt-0 mt-0" style="max-width: 550px; "
                    ng-repeat="materia in materias | limitTo: 4">
                    <a href="{{materia.link}}" class="pr-1">
                        <img ng-src="{{materia.photo[0]}}"
                            class=" card-img img-fluid img-thumbnail card-img-top pt-0 bt-0 rounded-0 border-0"
                            alt="..." style="width: 723px; height:300px ">
                            </a>
                        <h3 class="text-left text-cinza ml-2 mb-0 pt-4" ng-bind="materia.title"></h3>
                        <h4 class="text-color text-justify font-weight-normal mt-0 pt-0  ml-2 pb-1"
                            ng-bind-html="materia.post_excerpt">
                        </h4>
                    

                </div>


            </div>
            <div ng-if="materias.length > 4">
                <a href="<?php echo get_permalink( get_page_by_title( 'MATÉRIAS' ) );?>"><button type="button"
                        class=" btn btn-primary btn-lg border-0 rounded-0 text-dark font-weight-normal"
                        style=" background: #eceeed;">ver todas as matérias</button></a>
            </div>
        </div>
    </div>


    <div class="container text-center mt-3 pt-3 mb-2 pb-2">
        <!-- Portfolio Section Heading -->
        <h1 class="text-center font-weight-normal text-primary mt-3 pt-3  pb-2">VÍDEOS EM DESTAQUE</h1>
        <div class="container">
            <div class="row  justify-content-center">
                <?php
              // Run a loop to display list of videos
                foreach ($decoded['items'] as $items)
                {?>

                <div class="card border-0 rounded-0 pt-2 mt-2" style="max-width: 550px; ">
                    <a href="{{materia.link}}" class="pr-1">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/<?php echo $items['id']['videoId'];  ?>?rel=0"
                                allowfullscreen></iframe>
                        </div>
                        <h3 class="text-left text-cinza ml-2"><?php echo $items['snippet']['title']; ?></h3>
                        <h4 class="text-color text-justify font-weight-normal  ml-2 pb-1">
                            <?php echo $items['snippet']['description']; ?></h4>
                    </a>
                </div>

                <?php }


                ?>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>
</div>