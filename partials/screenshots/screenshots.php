<?php /* $screenshots coming from 'ScreenshotsBox.class.php' */ ?>

<div id="screenshot-obstruction-box" onclick="unfocusAllScreenshots()"></div>

<div class="screenshots-box">
    <table>
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
</div>