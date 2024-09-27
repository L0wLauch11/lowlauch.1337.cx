<?php /* $screenshots/$screenshotsMobile coming from 'ScreenshotsBox.class.php' */ ?>

<div id="screenshot-obstruction-box" onclick="unfocusAllScreenshots()"></div>

<div class="screenshots-box">
    <?php
    $screenshotsTables = [
        'desktop-only' => $screenshots,
        'mobile-only' => $screenshotsMobile,
    ];
    ?>

    <?php foreach ($screenshotsTables as $key => $screenshotTable): ?>
        <table class="<?= $key; ?>">
            <?php foreach ($screenshotTable as $screenshotRow): ?>
                <tr>
                    <?php foreach ($screenshotRow as $screenshot): ?>
                        <td>
                            <img class="screenshot" onclick="clickScreenshot(this)" src="<?= $screenshot ?>" alt="">
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endforeach; ?>
</div>