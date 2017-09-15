 import Vue from 'vue';
 import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
import VueResource from 'vue-resource';
Vue.use(ElementUI)

 require('./bootstrap');

new Vue({
  el:"#searching",
  data:{
    projets: [],
    loading: false,
    error: false,
    query: ''
  },
  methods: {
    search: function() {
        // Clear the error message.
        this.error = '';
        // Empty the projets array so we can fill it with the new projets.
        this.projets = [];
        // Set the loading property to true, this will display the "Searching..." button.
        this.loading = true;

        // Making a get request to our API and passing the query to it.
        this.$http.get('/api/search?q=' + this.query).then((response) => {
            // If there was an error set the error message, if not fill the projets array.
            response.body.error ? this.error = response.body.error : this.projets = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
        
    }
}
});
