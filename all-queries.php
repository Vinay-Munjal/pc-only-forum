<?php
include 'includes/header.php';
include 'includes/topmenu.php';
$type = "button";
?>

<section id="allqueries" class="allqueries">
    <h1 class="all-queries-heading">
   All Queries are Listed Here. Search for your.
    </h1>
    <form action="" class="search-form form-horizontal">
        <div class="col-8 row">
            <div class="form-group col-4">
               <select name="search-by" id="search-by" class="form-control">
                   <option value="">Search In</option>
                   <option value="all">All</option>
                   <option value="title">Title</option>
                   <option value="description">Description</option>
               </select>
            </div>
            <div class="form-group col-8 search-bar">
                <input type="text" name="search" id="search" class=" form-control mb-3" placeholder="Search.....">
                <i class="fa fa-search"></i>
            </div>
        </div>
    </form>
    <div class="queries-list search-form">
        <div class="query col-md-8">
            <div class="query-title">
                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore.</a>
            </div>
            <div class="query-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ducimus, odio fugiat laudantium distinctio asperiores, architecto similique saepe eum qui perferendis......</div>
            <div class="query-user-details">
                <p class="name">Vinay Munjal</p>
                <p class="added">5 mins ago</p>
            </div>
            <div class="query-tags">
                <ul>
                    <li><a href="">PHP</a></li>
                    <li><a href="">HTML</a></li>
                    <li><a href="">MySql</a></li>
                </ul>
            </div>
        </div>
        <div class="query col-md-8">
            <div class="query-title">
                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore.</a>
            </div>
            <div class="query-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ducimus, odio fugiat laudantium distinctio asperiores, architecto similique saepe eum qui perferendis......</div>
            <div class="query-user-details">
                <p class="name">Vinay Munjal</p>
                <p class="added">5 mins ago</p>
            </div>
            <div class="query-tags">
                <ul>
                    <li><a href="">PHP</a></li>
                    <li><a href="">HTML</a></li>
                    <li><a href="">MySql</a></li>
                </ul>
            </div>
        </div>
        <div class="query col-md-8">
            <div class="query-title">
                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore.</a>
            </div>
            <div class="query-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ducimus, odio fugiat laudantium distinctio asperiores, architecto similique saepe eum qui perferendis......</div>
            <div class="query-user-details">
                <p class="name">Vinay Munjal</p>
                <p class="added">5 mins ago</p>
            </div>
            <div class="query-tags">
                <ul>
                    <li><a href="">PHP</a></li>
                    <li><a href="">HTML</a></li>
                    <li><a href="">MySql</a></li>
                </ul>
            </div>
        </div>
        <div class="query col-md-8">
            <div class="query-title">
                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore.</a>
            </div>
            <div class="query-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ducimus, odio fugiat laudantium distinctio asperiores, architecto similique saepe eum qui perferendis......</div>
            <div class="query-user-details">
                <p class="name">Vinay Munjal</p>
                <p class="added">5 mins ago</p>
            </div>
            <div class="query-tags">
                <ul>
                    <li><a href="">PHP</a></li>
                    <li><a href="">HTML</a></li>
                    <li><a href="">MySql</a></li>
                </ul>
            </div>
        </div>
        <div class="query col-md-8">
            <div class="query-title">
                <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, inventore.</a>
            </div>
            <div class="query-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ducimus, odio fugiat laudantium distinctio asperiores, architecto similique saepe eum qui perferendis......</div>
            <div class="query-user-details">
                <p class="name">Vinay Munjal</p>
                <p class="added">5 mins ago</p>
            </div>
            <div class="query-tags">
                <ul>
                    <li><a href="">PHP</a></li>
                    <li><a href="">HTML</a></li>
                    <li><a href="">MySql</a></li>
                </ul>
            </div>
        </div>
       <div class="col-md-8 pagination">
           <ul>
               <!-- <li><a href=""><i class="fa fa-angle-left"></i></a></li> -->
               <li class="active-page"><a href="">1</a></li>
               <li><a href="">2</a></li>
               <li><a href="">3</a></li>
               <li><a href="">4</a></li>
               <li><a href="">5</a></li>
               <li><a href="">6</a></li>
               <li><a href=""><i class="fa fa-angle-right"></i></a></li>
           </ul>
       </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>