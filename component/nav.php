<div class="background">
    <div class="d-flex direction-column align-start nav-bar">
        <a href="http://localhost/project-management/index.php" class="d-flex new-width justify-start icon <?php echo ($page == "home" ? "active" : "" ) ?>">
            <i data-feather="home"></i>
            <p class="nav-text d-none">Tableau de bord</p>
        </a>
        <a href="http://localhost/project-management/view/project.php" class="d-flex new-width justify-start icon <?php echo ($page == "project" ? "active" : "" ) ?>">
            <i data-feather="folder"></i>
            <p class="nav-text d-none">Projets</p>
        </a>
        <a href="http://localhost/project-management/view/client.php" class="d-flex new-width justify-start icon <?php echo ($page == "customer" ? "active" : "" ) ?>">
            <i data-feather="user"></i>
            <p class="nav-text d-none">Client</p>
        </a>
        <a href="http://localhost/project-management/view/host.php" class="d-flex new-width justify-start icon <?php echo ($page == "host" ? "active" : "" ) ?>">
            <i data-feather="cloud"></i>
            <p class="nav-text d-none">Hebergeur</p>
        </a>
    </div>
</div>