<header id="menu-top">
    <div class="container">
        <nav>
            <a href="index.php">��ҳHOME</a>
            <?php  if(!$user)
                echo '<a href="login.html" class="btn btn-action">����Ա��¼</a>';
            else {echo '<a>'.$user.'</a>';
                echo '<a href="logout.php">�ǳ�</a>';
            }
            ?>
        </nav>
    </div>
</header>