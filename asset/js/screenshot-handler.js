function unfocusAllScreenshots() {
    let screenshots = Array.from(document.getElementsByClassName('screenshot'));

    screenshots.forEach(element => {
        if (element.classList.contains('screenshot-clicked')) {
            element.classList.remove('screenshot-clicked');
            document.getElementById('screenshot-obstruction-box').style.display = 'none';
        }
    });
}

function clickScreenshot(screenshotElement) {
    if (screenshotElement.classList.contains('screenshot-clicked')) {
        screenshotElement.classList.remove('screenshot-clicked');
        document.getElementById('screenshot-obstruction-box').style.display = 'none';
    } else {
        screenshotElement.classList.add('screenshot-clicked');
        document.getElementById('screenshot-obstruction-box').style.display = 'block';
    }
}