<div class="background">
    <div class="d-flex direction-column align-start nav-bar">
        <a href="#" class="d-flex new-width justify-start icon <?php echo ($page == "dashboard" ? "active" : "" ) ?>">
            <i data-feather="home"></i>
            <p class="nav-text d-none">Tableau de bord</p>
        </a>
        <a href="http://localhost/project-management/" class="d-flex new-width justify-start icon <?php echo ($page == "project" ? "active" : "" ) ?>">
            <i data-feather="folder"></i>
            <p class="nav-text d-none">Projets</p>
        </a>
        <a href="http://localhost/project-management/vue/client.php" class="d-flex new-width justify-start icon <?php echo ($page == "customer" ? "active" : "" ) ?>">
            <i data-feather="user"></i>
            <p class="nav-text d-none">Client</p>
        </a>
        <a href="http://localhost/project-management/vue/host.php" class="d-flex new-width justify-start icon <?php echo ($page == "host" ? "active" : "" ) ?>">
            <i data-feather="cloud"></i>
            <p class="nav-text d-none">Hebergeur</p>
        </a>
    </div>
</div>