<?php
  $pageTitle = 'NIL - Search';
  include 'init.php';
  session_start();
  if(!isset($_SESSION['username'])){
    header ('Location: login.php');
    exit();
  }
  include $tp1.'header.php';
 ?>
    <!-- Start Founder -->
    <div class="searcher">
      <!-- Start Body -->
      <div class="container">
        <div class="content">
          <div class="head text-center">
              <h2>Search To Find Your Item Now</h2>
          </div>
          <div class="search">
            <div class="search-bar d-flex">
              <input type="text" name="search" value="" placeholder="Search by Your Item Name">
              <button type="button" name="button" class="btn second-back">
                <i class="fas fa-search"></i>
              </button>
            </div>
            <div class="filters">
              <div class="d-flex">
                <h6 class="main-color">Categories:</h6>
                <ul class="list-unstyled">
                  <li value="Mobiles">Mobiles</li>
                  <li value="Wallets">Wallets</li>
                  <li value="Books">Books</li>
                  <li value="Accessories">Accessories</li>
                  <li value="Personal Belongs">Personal Belongs</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="row">

              <?php
                $con=mysql_connect("localhost","root","");
                mysql_select_db("nil");
                $q=mysql_query("select * from post");
                while($row=mysql_fetch_array($q))
                {
                	$id=$row["postID"];
                  echo'
                  <div class="col-md-4">
                    <div class="item text-center">
                      <div class="image">
                        <img src="design/images/temp.jpg" alt="">
                      </div>
                      <div class="text">
                        <h4 class="name">'.$row['name'].'</h4>
                        <span class="date">'.$row['date'].'</span>
                        <p class="desc">'.$row['description'].'</p>
                      </div>
                      <div class="mine">
                        <a href="mine.php?id='.$id.'" class="btn second-back">
                        This is Mine
                        </a>
                      </div>
                    </div>
                  </div>
                  ';
                }
               ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
    <!-- End Founder -->

<?php include $tp1.'footer.php'; ?>
