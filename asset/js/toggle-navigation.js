let navigation, navigationImg;
let navigationDefaultWidth = document.documentElement.style.getPropertyValue('--sidebar-width');

function toggleNavigation() {
    navigation = document.getElementsByClassName('side-navigation')[0];
    navigationImg = document.getElementById('toggle-navigation-image');

    if (navigation.style.display == '' || navigation.style.display == 'none') {
        navigation.style.display = 'block';
        navigation.style.opacity = '100%';

        navigationImg.src = "/asset/img/icons/chevron-left.png";

        document.documentElement.style.setProperty('--sidebar-width', navigationDefaultWidth);
    } else {
        navigation.style.display = 'none';
        navigation.style.opacity = '0%';

        navigationImg.src = "/asset/img/icons/chevron-right.png";

        document.documentElement.style.setProperty('--sidebar-width', '-4px');
    }
}