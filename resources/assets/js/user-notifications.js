import Vue from 'vue';
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
import VueResource from 'vue-resource';
Vue.use(ElementUI)


 require('./bootstrap');

Vue.component('user-notifications', require('./components/UserNotifications.vue'));

new Vue({
  el:"#user_notifications",
}
);
