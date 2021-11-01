
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
            <span class="md-list-item-text">
            <router-link to="/home" class="nav-item nav-link" >Customers List</router-link>
            
            </span>
          </md-list-item>

          <md-list-item>
            <md-icon>send</md-icon>
            <span class="md-list-item-text">
            <router-link to= "/create" class="nav-item nav-link" >Create Customer</router-link>
            </span>
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

      <md-app-content>
        <table class="table table-dark table-sm">
     <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Age</th>
      <th scope="col">Adresse</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody v-for="ct in customers" :key="ct.id">
    <tr>
      <th scope="row">{{ct.id}}</th>
      <td>{{ct.firstname}}</td>
      <td>{{ct.lastname}}</td>
      <td>{{ct.age}}</td>
      <td>{{ct.adresse}}</td>
      <md-button class="md-accent" @click.prevent="deleteCustomer(ct)">Delete</md-button>
      <md-button  @click.prevent="">Edit</md-button>

    </tr>
  </tbody>

</table>
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
        getCustomers(){
            this.axios.get("http://localhost:8000/getCustomers")
            .then((response) => {
                console.log(response.data);
                this.customers=response.data.cts;
                this.user=response.data.user;
            }).catch(function(error){
                console.log(error)
            })
        },
        deleteCustomer(customer){
          this.axios.delete("http://localhost:8000/deleteCustomer/"+customer.id)
          .then(response=>{
            this.getCustomers();
            this.hasDeleted=false;
          }).catch(function(error){
            console.log(error);
          })

        }
    },
    mounted() {
          this.getCustomers();
    }
}
</script>