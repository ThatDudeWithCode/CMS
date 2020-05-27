<?php
include 'functions.php';
get_header();
?>
<div class="jumbotron jumbotron-fluid bg-tdwc">
    <div class="container">
        <h1 class="display-4 text-white">Home</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="post-main">
                <div class="card shadow">
                    <div class="card-body">
                        <h1><a href="">Title</a></h1>
                        <div class="info-bar">
                            <span class="date"><a href=""><span class="date-icon mr-1"><i class="fa fa-clock-o"></i></span>1 May 2020</a></span>
                            <span class="mr-1 ml-1">|</span>
                            <span class="author"><a href=""><span class="author-icon mr-1"><i class="fa fa-user"></i></span>Tristan Elliott</a></span>
                        </div>
                        <p class="post-content">Lorem ipsum dolor sit amet, <a href="">consectetur</a> adipisicing elit. A aliquid assumenda at autem, commodi debitis doloremque excepturi, facilis harum modi molestias odit possimus quibusdam quidem ratione repellendus sapiente sed soluta voluptas voluptate. Aliquid animi aspernatur culpa cupiditate dolores eaque eligendi eveniet, in minima molestiae omnis provident quo ratione, sequi tempora!</p>
                        <a href="" class="btn btn-tdwc">Read More</a>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-lg-4">
            <aside class="sidebar-main">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>

<?php get_footer(); ?>
