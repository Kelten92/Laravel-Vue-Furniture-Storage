<template>
    <div class="log">
        <img src="../assets/user.svg">
        <div class="log__text">
            <h3>{{log.name}}</h3>
            <time>{{log.date}}</time>
            <p>{{log.activ}}"</p>
        </div>
    </div>
</template>

<style scoped>
.log{
    max-width: 150px;
    float: left;
    margin: 6px;
}
.log img{
    display: block;
    width: 40px;
    height: 40px;
}
.log__text h3{
    text-transform: uppercase;
    color: #F4894C;
    font-weight: bold;
    font-size: 12px;
    letter-spacing: 1px;
    margin: 5px 0;
}
.log__text time{
    font-size: 10px;
    opacity: 0.4;
    text-transform: uppercase;
}
.log__text p{
    font-size: 12px;
    line-height: 120%;
    margin: 10px 0;
}
</style>

<script>
export default {
    props: ['log'],
}
</script>
