let navigation;
let navigationDefaultWidth = document.documentElement.style.getPropertyValue('--sidebar-width');

function toggleNavigation() {
    navigation = document.getElementsByClassName('side-navigation')[0];

    if (navigation.style.display == '' || navigation.style.display == 'none') {
        navigation.style.display = 'block';
        navigation.style.opacity = '100%';
        document.documentElement.style.setProperty('--sidebar-width', navigationDefaultWidth);
        
    } else {
        navigation.style.display = 'none';
        navigation.style.opacity = '0%';
        document.documentElement.style.setProperty('--sidebar-width', '-4px');
    }
}