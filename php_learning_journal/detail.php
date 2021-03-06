<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MyJournal</title>
        <link href="https://fonts.googleapis.com/css?family=Cousine:400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <body>
      <?php 
        if(isset($_GET["id"])) {
           $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        }
      ?>
        <header>
            <div class="container">
                <div class="site-header">
                    <a class="logo" href="index.php"><i class="material-icons">library_books</i></a>
                    <a class="button icon-right" href="new.php"><span>New Entry</span> <i class="material-icons">add</i></a>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="entry-list single">
<!--
                    <article>
                        <h1>The best day I’ve ever had</h1>
                        <time datetime="2016-01-31">January 31, 2016</time>
                        <div class="entry">
                            <h3>Time Spent: </h3>
                            <p>15 Hours</p>
                        </div>
                        <div class="entry">
                            <h3>What I Learned:</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut rhoncus felis, vel tincidunt neque.</p>
                            <p>Cras egestas ac ipsum in posuere. Fusce suscipit, libero id malesuada placerat, orci velit semper metus, quis pulvinar sem nunc vel augue. In ornare tempor metus, sit amet congue justo porta et. Etiam pretium, sapien non fermentum consequat, <a href="">dolor augue</a> gravida lacus, non accumsan. Vestibulum ut metus eleifend, malesuada nisl at, scelerisque sapien.</p>
                        </div>
                        <div class="entry">
                            <h3>Resources to Remember:</h3>
                            <ul>
                                <li><a href="">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="">Cras accumsan cursus ante, non dapibus tempor</a></li>
                                <li>Nunc ut rhoncus felis, vel tincidunt neque</li>
                                <li><a href="">Ipsum dolor sit amet</a></li>
                            </ul>
                        </div>
                    </article>
-->
                  <?php 
                     include "inc/functions.php";
                      
                     foreach(get_project($id) as $detailes) {
                     
                        echo " <article>
                        <h1>".$detailes["title"]."</h1>
                        <time datetime=".$detailes["date"].">".date("F j, Y",strtotime($detailes["date"]))."</time>
                        <div class='entry'>
                            <h3>Time Spent: </h3>
                            <p>".$detailes["time_spent"]."</p>
                        </div>
                        <div class='entry'>
                            <h3>What I Learned:</h3>
                            <p>".$detailes["learned"]."</p>
                        </div>
                        <div class='entry'>
                            <h3>Resources to Remember:</h3>
                            <ul>
                                <li><a href=''>".$detailes["resources"]."</a></li>
                            </ul>
                        </div>
                    </article>";
                     }
                  ?>
                </div>
            </div>
            <div class="edit">
              <?php 
                   echo "<p><a href='edit.php?id=".$id."'>Edit Entry</a></p>";
              ?>
            </div>
        </section>
        <footer>
            <div>
                &copy; MyJournal
            </div>
        </footer>
    </body>
</html>