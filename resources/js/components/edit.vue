<template>
    <div class="container">
        <h2 class="text-center">Update Product</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'ProductIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                     
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="5" class="form-control" v-model="product.description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" v-model="product.price">
                    </div>
                    <button type="button" class="btn btn-primary" @click="updateProduct(product)"> Update </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {
                    id:"",
                    name:"",
                    description:"",
                    price:""
                },
            }
        },
        mounted() {
            this.editProduct(this.$route.params.productId);
        },
        methods: {
            editProduct(productId) {
                this.axios.get(`http://localhost:8000/edit/products/${productId}`)
                   .then((res) => {
                       this.product = res.data;
                        console.log(this.product);
                   }).catch(function(error){
                       console.log(error);
                   });
            },
            updateProduct(product) {
                this.axios
                    .put("http://localhost:8000/update/products/",this.product)
                    .then((res) => {
                        this.$router.push({ name: 'ProductIndex' });
                    });
            }
        }
    }
</script>
