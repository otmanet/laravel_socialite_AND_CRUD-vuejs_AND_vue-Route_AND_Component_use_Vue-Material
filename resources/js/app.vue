<template>
  <div class="page-container">
    <md-app>
      <md-app-toolbar class="md-primary">
        <span class="md-title">LARAVEL SOCIALITE + VUE js CRUD + VUE MATERIAL (Compenent) + VUE ROUTER </span>
      </md-app-toolbar>

      <md-app-drawer md-permanent="full">
        <md-toolbar class="md-transparent" md-elevation="0">
          Menu 
        </md-toolbar>

        <md-list>
          <md-list-item>
            <!-- <md-icon>move_to_inbox</md-icon> -->
            
           <router-link :to="{ name: 'ProductIndex' }"  class="nav-item nav-link">Products</router-link>
          </md-list-item>

          <md-list-item>
            <!-- <md-icon>send</md-icon> -->
              
            <router-link :to="{ name: 'ProductCreate' }"  class="nav-item nav-link">Create Product</router-link>
          </md-list-item>
          
           <md-list-item>
              <router-link :to="{ name: 'trash' }"  class="nav-item nav-link">trash for Products</router-link>
          </md-list-item>
        </md-list>
      </md-app-drawer>

      <md-app-content>
        <router-view> </router-view>
      </md-app-content>
    </md-app>
  </div>
</template>

<style lang="scss" scoped>
  .md-app {
    height: 1000px;
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
  name: 'Normal'
}
</script>