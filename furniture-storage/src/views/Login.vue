<template>
    <section class="login">
        <form class="login__form" v-on:submit.prevent="submitLogin">
            <h1 class="poster-h1 orange">Please login!!!</h1>
    
            <label for="email" class="login__form__label">Email address</label>
            <input type="email" class="login__form__input" v-model="email">
    
            <label for="password" class="login__form__label">Password</label>
            <input type="password" class="login__form__input" v-model="password">
    
            <button type="submit" class="login__form__btn">Sign in</button>
        </form>
    </section>
</template>

<script>
    import store from '../store';
    import axios from 'axios';
    export default {
        data() {
            return {
                email: '',
                password: '',
                loginError: ''
            }
        },
        methods: {
            submitLogin() {
                this.loginError = false;
                axios.post('http://127.0.0.1:8000/api/auth/login', {
                    email: this.email,
                    password: this.password
                }).then(response => {
                    
                    // login user, store the token and redirect to dashboard
                    store.commit('loginUser')
                    store.commit('setUser', response.data.user.original.name)
                    localStorage.setItem('token', response.data.access_token)
                    this.$router.push({
                        name: 'home'
                    })
                }).catch(error => {
                    this.loginError = true;
                    console.log(error);
                });
            }
        }
    }
</script>

<style scoped>
    .login {
        padding: 10px 20px;
    }
    
    .login__form__label {
        font-size: 14px;
        color: #F4894C;
        font-weight: bold;
        margin: 10px 0;
    }
    
    .login__form__input {
        background: #ece6e6;
        border-radius: 6px;
        padding: 14px 10px;
        margin: 10px 0;
        border: 0 none;
        font-size: 14px;
        height: 46px;
        width: 100%;
    }
    
    .login__form__btn {
        background: #F4894C;
        color: white;
        font-weight: bold;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        border: 0;
        padding: 5px 10px;
    }
</style>


