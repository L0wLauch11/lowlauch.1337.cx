<nav class="side-navigation">
    <ul class="side-navigation-list">
        <?php
        include_once 'NavigationSection.class.php';

        $sections = [
            new NavigationSection('/sites/home.php', 'Home'),
            new NavigationSection('/sites/projects/games', 'Games'),
            new NavigationSection('/sites/projects/websites', 'Websites'),
            //new NavigationSection('/sites/projects/minecraft', 'Minecraft related'),
        ];

        function printSite($siteUrl, $siteName, $siteContent) {
            $isCurrentClass = '';
            if (isset($_GET['site']) && urldecode($siteUrl) == $_GET['site']) {
                $isCurrentClass = 'side-navigation-current';
            }

            $siteContentStripped = strip_tags(html_remove_tag($siteContent, 'h2'));
            echo "<li><a class='$isCurrentClass button' href='/sites/templates/site.php?site=$siteUrl'>$siteName <span class='site-brief'>&mdash; $siteContentStripped</span></a></li>";
        }
        ?>

        <?php foreach ($sections as $section): ?>
            <li class="side-navigation-subheading">&#11208; <?= $section->getDisplayName() ?></li> <?php /* &#11206; for down arrow */ ?>

            <ul class="side-navigation-sublist">
                <?php
                // Maybe this logic should be broken out into its own file ...

                $sectionUrl = $section->getUrl();
                $sectionPath = $_SERVER['DOCUMENT_ROOT']."/$sectionUrl";

                if (isset($site)) {
                    $sitePrevious = $site;
                }

                if (is_file($sectionPath)) {
                    // Acts kind of like wildcard entries
                    ob_start();
                    include $sectionPath;
                    ob_end_clean();

                    $siteUrl = urlencode("$sectionUrl");
                    $siteName = $site->getName();
                    $siteContent = render_php("$sectionPath");

                    printSite($siteUrl, $siteName, $siteContent);
                } else {
                    // For a navigationsection containing a directory
                    foreach (scandir($sectionPath) as $file) {
                        if ($file == '.' || $file == '..') {
                            continue;
                        }
                        
                        // Every 'site' should instantiate Site (from Site.class.php) and save it under '$site'
                        ob_start();
                        include "$sectionPath/$file";
                        ob_end_clean();

                        $siteUrl = urlencode("$sectionUrl/$file");
                        $siteName = $site->getName();
                        $siteContent = render_php("$sectionPath/$file");

                        printSite($siteUrl, $siteName, $siteContent);
                    }
                }
                
                // Reset for any other pages having $site set (e. g. "site.php")
                if (isset($sitePrevious)) {
                    $site = $sitePrevious;
                }
                ?>
            </ul>
        <?php endforeach; ?>
    </ul>
</nav>