<template>
    <div class="container">
        <h2 class="text-center">Trash Products </h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'ProductCreate' }" class="btn btn-primary btn-sm float-right mb-2">Add Product</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(product,key) of products"  :key="key">
                            <td>{{ key+1 }}</td>
                            <td>{{ product.name }}</td>
                            <td>{{ product.description }}</td>
                            <td>{{ product.price }}</td>
                            <td>
                                <router-link class="btn btn-success btn-sm" :to="{ name: 'ProductEdit', params: { productId: product.id }}">Edit</router-link>
                                <button class="btn btn-danger btn-sm" @click.prevent="deleteProduct(product)">Delete</button>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                products: [],
                product:{
                    id:"",
                    name:"",
                    description:"",
                    price:"",
                    delete_at:"",
                }
            }
        },
        created() {
            this.getProducts();
        },
        methods: {
            getProductsDeleted() {
              this.axios.get('http://localhost:8000/products/deleted')
                  .then(response => {
                      this.products = response.data.products;
                  }).catch(function (error){
                      console.log(error);
                  });
            },
        },
        mounted() {
            this.getProductsDeleted();
        }
    }
</script>