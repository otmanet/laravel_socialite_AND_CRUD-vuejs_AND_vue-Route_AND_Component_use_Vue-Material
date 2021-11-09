
<template>
  <div style="width:100%;height:100%">
    <md-app md-waterfall md-mode="fixed">
      <md-app-toolbar class="md-primary">
        <span class="md-title">Laravel + Vuejs + Component(Vue Material) + Socialite</span>
      </md-app-toolbar>

      <md-app-drawer md-permanent="full">
        <md-toolbar  v-for="u in user" :key="u.id" class="md-transparent" md-elevation="0">

       <md-avatar>
          <img :src="u.avatar" alt="Avatar">
        </md-avatar>
           <md-button class="md-primary">{{u.name}}</md-button>
        </md-toolbar>

        <md-list>
          <md-list-item>
            <md-icon>move_to_inbox</md-icon>
                     <router-link to="/" class="nav-item nav-link" >Customers List</router-link>
          </md-list-item>

          <md-list-item>
            <md-icon>send</md-icon>
              <router-link to= "/create" class="nav-item nav-link" >Create Customer</router-link>
          </md-list-item>

          <md-list-item>
            <md-icon>delete</md-icon>
            <span class="md-list-item-text">Trash</span>
          </md-list-item>

          <md-list-item>
            <md-icon>error</md-icon>
            <span class="md-list-item-text">Spam</span>
          </md-list-item>
        </md-list>
      </md-app-drawer>
       <router-view> </router-view>
      <md-app-content>
      </md-app-content>
    </md-app>
  </div>
</template>

<style lang="scss" scoped>
  .md-app {
    max-height: 400px;
    border: 1px solid rgba(#000, .12);
  }

   // Demo purposes only
  .md-drawer {
    width: 230px;
    max-width: calc(100vw - 125px);
  }
</style>

<script>
export default {
  name: 'Waterfall',
  name: 'Regular',
  data: () => ({
    menuVisible: false,

            customers:[],
            customer:{
                id:"",
                firstname:"",
                lastname:"",
                age:"",
                adresse:"",
            },
            user:[],

  }),
  methods: {
        getUser(){
            this.axios.get("http://localhost:8000/getCustomers")
            .then((response) => {
                console.log(response.data);
                this.user=response.data.user;
            }).catch(function(error){
                console.log(error)
            })
        },
    },
    mounted() {
          this.getUser();
    }
}
</script>
