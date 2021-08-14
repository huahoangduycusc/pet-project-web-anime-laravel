<template>
    <div>
        <div class="modal" v-bind:class="[{open : openClass}]">
            <h2>Hua hoang duy</h2>
        </div>
        <div class="pagination">
            <button @click="test()">123</button>
            <ul class="pagination-list">
                  <li v-bind:class="[{disabled: !pagination.pre_page_url}]" class="page-item">
                    <a href="#" @click="fetchCategories(pagination.pre_page_url)" class="page-link">Pre</a>
                </li>
                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a href="#" @click="fetchCategories(pagination.next_page_url)" class="page-link">Next</a>
                </li>
            </ul>
        </div>
        <table>
            <tr v-for="category in categories" v-bind:key="category.id">
                <td>{{ category.categoryName }}</td>
                <td>{{ category.description }}</td>
                <td>
                    <span v-if="category.status == 0">
                        <font color="green">Active</font>
                    </span>
                    <span v-else>
                        <font color="red">Inactive</font>
                    </span>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            openClass : false,
            categories: [],
            category: {
                id: "",
                categoryName: "",
                description: "",
                status: ""
            },
            categoryID: "",
            pagination: {}
        };
    },
    created() {
        this.fetchCategories();
    },
    methods: {
        fetchCategories(page_url) {
            let vm = this;
            page_url = page_url || '/category';
            fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.categories = res.data;
                    vm.makePagination(res);
                })
                .catch(err => console.log(err));
        },
        makePagination(res){
            let pagination = {
                current_page : res.current_page,
                last_page : res.last_page,
                next_page_url : res.next_page_url,
                pre_page_url: res.prev_page_url
            };
            this.pagination = pagination;
        },
        test(){
            this.openClass = !this.openClass;
        }
    }
};
</script>

<style>
.modal{
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}
.modal.open{
    opacity: 1;
    visibility: visible;
}
</style>