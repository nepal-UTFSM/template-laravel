import Vue from 'vue';

document.addEventListener('DOMContentLoaded', () => {
  if (document.getElementById('app') !== null) {
    new Vue({
      el: '#app',
    });
  }
});
