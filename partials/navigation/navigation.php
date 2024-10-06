<nav class="side-navigation">
    <ul class="side-navigation-list">
        <?php
        include_once 'NavigationSection.class.php';

        $sections = [
            new NavigationSection('', '/sites/home.php', 'Über Mich'),
            new NavigationSection('/game', '/sites/projects/games', 'Games'),
            new NavigationSection('/website', '/sites/projects/websites', 'Websites'),
            new NavigationSection('/computer', '/sites/projects/computers', 'Computer'),
        ];

        function printSite($siteRoute, $siteUrl, $siteName, $siteContent) {
            $isCurrentClass = '';
            if (isset($sitePath) && $sitePath == $siteUrl) {
                $isCurrentClass = 'side-navigation-current';
            }

            if (preg_match('/<span class="brief">(.*?)<\/span>/s', $siteContent, $siteBrief)) {
                $siteBriefStripped = strip_tags($siteBrief[0]);
                $siteBrief = " ...{$siteBriefStripped}"; // &mdash; alternative
            } else {
                $siteBrief = '';
            }

            $siteBasename = explode(
                '.php', 
                basename(urldecode($siteUrl))
            )[0];

            echo <<<HTML
                <li>
                    <a class="$isCurrentClass button" href="$siteRoute/$siteBasename">
                        $siteName <span class="site-brief">$siteBrief</span>
                    </a>
                </li>
            HTML;
        }
        ?>

        <?php foreach ($sections as $section): ?>
            <li class="side-navigation-subheading">&#11208; <?= $section->getDisplayName(); ?></li> <?php /* &#11206; for down arrow */ ?>

            <ul class="side-navigation-sublist">
                <?php
                // Maybe this logic should be broken out into its own file ...
                $sectionPath = "{$_SERVER['DOCUMENT_ROOT']}/{$section->getPath()}";

                if (isset($site)) {
                    $sitePrevious = $site;
                }

                if (is_file($sectionPath)) {
                    // Acts kind of like wildcard entries
                    ob_start();
                    include $sectionPath;
                    ob_end_clean();

                    $siteUrl = urlencode($sectionPath);
                    $siteName = $site->getName();
                    $siteContent = renderPhp($sectionPath);

                    printSite($section->getRoute(), $siteUrl, $siteName, $siteContent);
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

                        $siteUrl = urlencode("$sectionPath/$file");
                        $siteName = $site->getName();
                        $siteContent = renderPhp("$sectionPath/$file");

                        printSite($section->getRoute(), $siteUrl, $siteName, $siteContent);
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