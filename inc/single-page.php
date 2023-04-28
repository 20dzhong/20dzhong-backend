
<!-- Wrapper -->
<div id="wrapper">

<!-- Menu -->
<?php include '../inc/nav.php'; ?>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><?= $songName ?></h2>
                    <p>Chord and Lyrics</p>
                </div>
                <div class="meta">
                    <time class="published" datetime=<?= $dateFormatted ?>><?= $dateString ?></time>
                    <a href="#" class="author"><span class="name">Donovan Zhong</span><img src="../images/profile.jpg" alt="" /></a>
                </div>
            </header>
            
            <a href="#" class="image featured"><img src="../images/guitar-back.jpg" alt="" /></a>
            
            <button onclick = "changeFont(-1)" style = "<?= $isPicture ?>"> -1 Font </button>
            <button onclick = "changeFont(1)" style = "<?= $isPicture ?>"> +1 Font </button>
            <button onclick = "transposeChord(-1)" style = "<?= $isPicture ?>"> -1 Chord </button>
            <button onclick = "transposeChord(1)" style = "<?= $isPicture ?>"> +1 Chord </button>

            <div id="song" hidden="hidden"><?= file_get_contents($fileName) ?></div>
            
            <pre>
                <div id="formatted-song" class="songTxt"></div>
            </pre>
            
            <footer>
                <ul class="actions">
                    <button onclick = "hideSidebar()" class="button large"> Expand </button>
                    <button onclick = "showSidebar()" class="button large"> Condense </button>
                </ul>
                <ul class="stats">
                    <li><a href="#">Chinese</a></li>
                </ul>
            </footer>
        </article>

    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <?php include '../inc/chinese-sidebar.php'; ?>
    </div>
    
</div>

<!-- Scripts -->
<?php include '../inc/scripts.php'; ?>
