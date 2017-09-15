<template>

<el-badge :value="numberOfNotifications" :max="99" class="item" v-if="numberOfNotifications" >

<el-dropdown   >
      <span class="el-dropdown-link">
        <i class="large alarm  icon"></i>
      </span>

      <el-dropdown-menu slot="dropdown">

        <el-dropdown-item  v-for="notification in notifications" :key="notification.id">
     	 <a :href="notification.data.link"
                   v-text="notification.data.message"
                   @click="markAsRead(notification)"       
                   ></a>
        </el-dropdown-item>
      </el-dropdown-menu>
 </el-dropdown>
</el-badge>


 
</template>

<script>
    export default {
        data() {
              return { notifications: false ,
              isActive: false,
              activeDisplay:'none'}
        },
        computed: {
        	numberOfNotifications : function(){
        		return this.notifications.length;
        	}
        
        },

        created() {
            axios.get('/profiles/' + window.App.user.name + '/notifications')
                .then(response => this.notifications = response.data);
        },
        methods: {
            markAsRead(notification) {
                axios.delete('/profiles/' + window.App.user.name + '/notifications/' + notification.id)
            },
           toggleMenu: function(){
            this.isActive = !this.isActive;
            if (this.isActive) {
            	this.activeDisplay = 'flex';
            }
            else{
            	this.activeDisplay = 'none';
            }
          // some code to filter users
        }
        }
    }
</script>