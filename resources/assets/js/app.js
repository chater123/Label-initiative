import Vue from 'vue';
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import VueFormGenerator from "vue-form-generator/dist/vfg-core.js";
import "vue-form-generator/dist/vfg-core.css";
Vue.use(VueFormWizard)
Vue.use(VueFormGenerator)
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
import VueRouter from 'vue-router'
import InstantSearch from 'vue-instantsearch';
Vue.use(InstantSearch);
import VueObserveVisibility from 'vue-observe-visibility'
Vue.use(VueObserveVisibility)
Vue.use(ElementUI)
Vue.use(VueRouter);

require('./bootstrap');
Vue.component('favorite', require('./components/Favorite.vue'));
Vue.component('user-notifications', require('./components/UserNotifications.vue'));
Vue.component('deposer_projet', require('./components/DeposerProjet.vue'));


new Vue({
  el: "#app",
  data: function() {
    return {
      page: 1
    }
  },
  methods: {
    loadMore: function(isVisible) {
      if(isVisible) {
        this.page++;
      }
    }
  }
})