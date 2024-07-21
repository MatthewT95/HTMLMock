<ul id="nav">
    <?php if($page == 'home')
    {
        ?>
        <li><a href='./index.php'>Home</a></li>
        <li><a href="./pages/content-generator.html">Content generator</a></li>
        <li><a href="./pages/documentation.php">Documentation</a></li>
        <!-- <li><a href="./pages/fullscreen-ph.html">Full screen placeholder</a></li> -->
        <li><a href="./pages/sample1.html">Sample page</a></li>
        <?php
    }
    else
    {
        ?>
        <li><a href='../index.php'>Home</a></li>
        <li><a href="./content-generator.html">Content generator</a></li>
        <li><a href="./documentation.php">Documentation</a></li>
        <!-- <li><a href="./fullscreen-ph.html">Full screen placeholder</a></li> -->
        <li><a href="./sample1.html">Sample page</a></li>
        <?php
    }?>

</ul>