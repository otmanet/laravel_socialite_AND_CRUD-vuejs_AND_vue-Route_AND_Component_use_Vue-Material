import ProductIndex from './components/index.vue';
import ProductCreate from './components/create.vue';
import ProductEdit from './components/edit.vue';
import trash from './components/trash.vue';

export const routes = [
    {
        path: '/productsVue',
        component: ProductIndex,
        name: "ProductIndex"
    },
    {
        path: '/products/create',
        component: ProductCreate,
        name: "ProductCreate"
    },
    {
        path: '/products/edit/:id',
        component: ProductEdit,
        name: "ProductEdit"
    },
    {
        path: '/trash/products',
        component: trash,
        name: "trash"
    },
];
