<template>
    <section class="furnitures-list">
        <header class="furniture__head">
            <h1 class="poster-h1 orange">Furnitures list</h1>
        </header>
        <paginate name="furnitures" :list="furnitures" :per="8" class="paginate-list">
            <furniture v-for="furniture in paginated('furnitures')" 
            v-bind:key="furniture.id" v-bind:furniture="furniture"></furniture>
        </paginate>
         <paginate-links for="furnitures" :show-step-links="true"></paginate-links>
    </section>
</template>

<script>
    import furniture from '@/components/furniture.vue';
    import axios from 'axios';
    export default {
        components: {
            furniture,
        },
        data() {
            return {
                furnitures: [],
                paginate: ['furnitures'],
            }
        },
        
        mounted: function() {
            this.$nextTick(function() {
                axios.get('http://127.0.0.1:8000/api/furnitures',
                    {
                        headers: {
                            Authorization: 'Bearer ' + localStorage.getItem('token')
                        }
                    })
                    .then((response) => {
                        this.furnitures = response.data.data;
                        console.log(response.data.data);
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            })
        },
    
    }
</script>

<style scoped>
    .paginate-list{
        display: grid;
        grid-template-rows: min-content;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    .furniture__head {
        grid-column: 1 / 5;
    }
    
    .poster-h1 {
        text-transform: uppercase;
        font-size: 24px;
        font-weight: 900;
    }
    
</style>

