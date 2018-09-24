<template>
    <section class="furniture-profile">
        <h1 class="orange poster-h1">{{furniture.name}}</h1>
        <hr>
        <div class="furniture-info">
            <div v-if="furniture.image">
                <img :src="'http://127.0.0.1:8000/images/' + furniture.image" class="furniture-info__img">
            </div>
            <div class="furniture-info__spec">
                <h2 class="furniture-price">{{furniture.price}}$</h2>
                <p class="furniture-comments">{{furniture.comments}}</p>
                <div class="furniture-color">
                    <h5>Color: {{furniture.color}}</h5>
                    <img src="#">
                    <div style="clear:both"></div>
                </div>
                <p class="furniture-wood">{{furniture.wood}}</p>
                <p class="furniture-category">Category</p>
                <p class="furniture-quantity">{{furniture.quantity}}</p>
            </div>
        </div>
    </section>
</template>

<style scoped>
    .furniture-info {
        display: grid;
        grid-template-rows: min-content;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 30px;
    }
    
    .furniture-info__img {
        display: block;
        height: auto;
        width: 100%
    }
    
    .furniture-info__spec {
        padding: 10px;
    }
    
    .furniture-price {
        font-weight: bold;
        font-size: 24px;
        margin: 10px 0;
    }
    
    .furniture-comments {
        opacity: 0.4;
        font-size: 14px;
        margin: 20px 0;
    }
    
    .furniture-color {
        margin: 10px 0;
    }
    
    .furniture-color h5 {
        display: block;
        float: left;
    }
    
    .furniture-color img {
        display: block;
        float: left;
        margin: 10px;
        height: 20px;
        width: 20px;
    }
</style>

<script>
import axios from 'axios';
    export default {
        data() {
            return {
                furniture: [],
                furniture_id: this.$route.params.id,
            }
        },
        mounted: function() {
            this.$nextTick(function() {
                axios.get('http://127.0.0.1:8000/api/furnitures/' + this.furniture_id)
                    .then((response) => {
                        this.furniture = response.data.data;
                        console.log(response.data.data);
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            })
        },
    }
</script>

