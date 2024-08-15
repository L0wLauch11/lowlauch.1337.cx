<?php /* $screenshots coming from 'ScreenshotsBox.class.php' */ ?>

<div id="screenshot-obstruction-box" onclick="unfocusAllScreenshots()"></div>

<div class="screenshots-box">
    <table class="desktop-only">
        <?php foreach ($screenshots as $screenshotRow): ?>
            <tr>
                <?php foreach ($screenshotRow as $screenshot): ?>
                    <td>
                        <img class="screenshot" onclick="clickScreenshot(this)" src="<?= $screenshot ?>" alt="">
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Screenshots have half the density on mobile -->
    <table class="mobile-only">
        <?php foreach ($screenshotsMobile as $screenshotRow): ?>
            <tr>
                <?php foreach ($screenshotRow as $screenshot): ?>
                    <td>
                        <img class="screenshot" onclick="clickScreenshot(this)" src="<?= $screenshot ?>" alt="">
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>