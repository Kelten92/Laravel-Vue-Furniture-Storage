<template>
    <section class="profile">
        <img class="profile__img" src="../assets/user.svg">
        <div class="profile__text">
            <h2>{{user}}</h2>
            <div v-if="logged">
                <router-link to="/logout"><p>logout</p></router-link>
            </div>
            <div v-if="!logged">
                <router-link to="/login"><p>sign in</p></router-link>
            </div>
            
        </div>
    </section>
</template>

<style scoped>
.profile__img{
    display: block;
    width: 48px;
    height: 48px;
    float: left;
}
.profile__text{
    float: left;
    margin-left: 15px;
}
.profile__text h2{
    font-weight: 500;
    margin:0;
    padding: 0;
    padding-top: 10px;
    font-size: 14px;
}
.profile__text p{
    font-size: 10px;
    text-transform: uppercase;
    opacity: 0.4;
    margin: 0;
    padding: 0;
}
</style>
<script>

export default {
    computed: {
        logged(){
            return this.$store.getters.isLoggedIn
        },
        user(){
            return this.$store.getters.user
        }
    },
    
}
</script>

