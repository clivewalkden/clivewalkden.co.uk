//Javascript to toggle the menu
document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content").classList.toggle("hidden");
}

window.axios = require('axios');
import Vue from 'vue';
import Search from './components/Search.vue';
import hljs from 'highlight.js/lib/core';

// Syntax highlighting
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('xml', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
})

Vue.config.productionTip = false;

new Vue({
    components: {
        Search
    },
}).$mount('#vue-search');