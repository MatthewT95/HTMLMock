<ul id="nav">
    <?php if($page == 'home')
    {
        ?>
    <li><a href='./index.php'>Home</a></li>
    <li><a href="./pages/HTMLMock-Basic.html">HTMLMock Basic</a></li>
    <li><a href="./pages/HTMLMock-Basic-doc.php">HTMLMock Basic Doc</a></li>
    <!-- <li><a href="./pages/fullscreen-ph.html">Full screen placeholder</a></li> -->
    <li><a href="./pages/sample1.html">Sample page</a></li>
    <li><a href="./pages/HTMLMock-Expert-api.html">HTMLMock Expert Demo</a></li>
    <?php
    }
    else
    {
        ?>
    <li><a href='../index.php'>Home</a></li>
    <li><a href="./HTMLMock-Basic.html">HTMLMock Basic</a></li>
    <li><a href="./HTMLMock-Basic-doc.php">HTMLMock Basic Doc</a></li>
    <!-- <li><a href="./fullscreen-ph.html">Full screen placeholder</a></li> -->
    <li><a href="./sample1.html">Sample page</a></li>
    <li><a href="./HTMLMock-Expert-api.html">HTMLMock Expert Demo</a></li>
    <?php
    }?>

</ul>