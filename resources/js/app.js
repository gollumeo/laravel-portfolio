import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('load', function () {
    let isLoading = true;
    setTimeout(() => {
        isLoading = false;
    }, 2000);
});

