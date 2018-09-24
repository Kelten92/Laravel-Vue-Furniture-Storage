<template>
    <div class="furniture">
        <img :src="'http://127.0.0.1:8000/images/' + furniture.image" class="furniture__img">
        <h2 class="furniture__name">{{furniture.name}}</h2>
        <h5 class="furniture__price">{{furniture.price}}$</h5>
        <router-link :to="'/furniture/'+ furniture.id" class="furniture__btn">Go to item</router-link>
    </div>
</template>

<style>
.furniture__p{
    text-align: center;
    font-size: 14px;
    margin: 5px 0;
}
.furniture{
    padding: 10px;
}
.furniture__img{
    display: block;
    height: 80px;
    width: 80px;
    margin-left: auto;
    margin-right: auto;
}
.furniture__name{
    font-size: 18px;
    text-align: center;
    color:#F4894C;
    margin: 5px;
}
.furniture__price{
    font-size: 21px;
    margin: 5px;
    text-align: center;
}
.furniture__btn{
    background: #F4894C;;
    color: white;
    border-radius: 4px;
    padding: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    text-align: center;
    display: block;
    transition: .7;
}
.furniture__btn:hover{
    background: rgb(231, 140, 88);
}
</style>

<script>
export default {
    props: ['furniture'],
}
</script>


