<template>
    <section class="social">
        <a href="#" class="social__link github"><i class="fab fa-github-square"></i></a>
        <a href="#" class="social__link twitter"><i class="fab fa-twitter-square"></i></a>
        <a href="#" class="social__link facebook"><i class="fab fa-facebook"></i></a>
    </section>
</template>

<style scoped>
.social{
    float:right;
    margin-top: 15px;
}
.social__link{
    color: #AAADB4;
    font-size: 20px;
    float: left;
    padding: 5px;
    transition: 0.5s;
}
.twitter:hover{
    color: #00aced;
}
.facebook:hover{
    color: #3b5998;
}
.github:hover{
    color:#609;
}
</style>
