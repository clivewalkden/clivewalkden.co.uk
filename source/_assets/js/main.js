//Javascript to toggle the menu
document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content").classList.toggle("hidden");
}

window.axios = require('axios');
import Vue from 'vue';
import Search from './components/Search.vue';

Vue.config.productionTip = false;

new Vue({
    components: {
        Search
    },
}).$mount('#vue-search');