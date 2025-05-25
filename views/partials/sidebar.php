<ul>
    <li><a href="index.php">SHOP</a></li>
    <li><a href="index.php?controller=collection">COLLECTION</a></li>
    <li><a href="index.php?controller=editorial">EDITORIAL</a></li>
    <li><a href="index.php?controller=about">ABOUT</a></li>
    <li><a href="index.php?controller=search">SEARCH</a></li>
    <li><a href="index.php?controller=cart">CART</a></li>

    <?php if (!isset($_SESSION['user'])): ?>
        <li><a href="index.php?controller=auth&action=login">LOGIN</a></li>
        <li><a href="index.php?controller=auth&action=register">REGISTER</a></li>
    <?php else: ?>
        <li><a href="#">Xin chào, <?= $_SESSION['user']['username'] ?></a></li>
        <li><a href="index.php?controller=auth&action=logout">LOGOUT</a></li>
    <?php endif; ?>
</ul>
