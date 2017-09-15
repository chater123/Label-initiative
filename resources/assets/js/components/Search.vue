<template>
<div class="row">
    <div class=" eight wide column">
        <el-form :inline="true">
        <el-form-item label="">
        <el-input v-model="query" placeholder="search a projet"></el-input>
        </el-form-item>
        <el-form-item>
        <el-button type="primary" icon="search" @click="search()" v-if="!loading">Search</el-button>
        <el-button type="primary" :loading="true" diseabled="diseabled" v-if="loading">Searching</el-button>
        </el-form-item>
        </el-form>
        <div id="projets">
            <div class="ui negative message" v-if="error">
                <i class="close icon"></i>
                <div class="header">
                    @{{error}}
                </div>
            </div>
            <div class="card" v-for="projet in projets">
                <div class="content">
                    <a v-bind:href="'/projet/'+projet.id">@{{projet.title}}</a>
                    <p>@{{projet.description}}<p>
                        <div class="meta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</template>
<script type="text/javascript">
    export default{
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
        this.$http.get('/api/search?q='+ this.query).then((response) => {
            // If there was an error set the error message, if not fill the projets array.
            response.body.error ? this.error = response.body.error : this.projets = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
        
    }
}
    }
</script>