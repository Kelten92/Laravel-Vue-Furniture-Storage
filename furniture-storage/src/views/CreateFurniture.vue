<template>
    <section class="furniture-add">
        <h2 class="poster-h1 orange">Create<br>new<br>furniture</h2>
        <form class="creation-form" v-on:submit.prevent>
            <div class="first-row">
                <div class="form__item">
                    <label class="form__label">name</label>
                    <input type="text" v-model="furniture.name">
                    <p class="error" v-if="errors.name">{{errors.name[0]}}</p>
                </div>
                <div class="form__item">
                    <label class="form__label">category</label>
                    <select v-model="furniture.category_id">
        	                <option value="1">Zestaw kuchenny</option>
        	                <option value="2">Zestaw z 4 krzesłami</option>
                            <option value="3">Wypoczynek</option>
                        </select>
                    <p class="error" v-if="errors.category_id">{{errors.category_id[0]}}</p>
                </div>
            </div>
            <div class="standard-row">
                <div class="form__item">
                    <label class="form__label">color</label>
                    <select v-model="furniture.color">
        	                <option value="Sonoma">Sonoma</option>
        	                <option value="Wenge">Wenge</option>
                            <option value="Oak">Oak</option>
                        </select>
                    <p class="error" v-if="errors.color">{{errors.color[0]}}</p>
                </div>
                <div class="form__item">
                    <label class="form__label">price</label>
                    <input type="number" step="10" v-model="furniture.price">
                    <p class="error" v-if="errors.price">{{errors.price[0]}}</p>
                </div>
                <div class="form__item">
                    <label class="form__label">quantity</label>
                    <input type="number" v-model="furniture.quantity">
                    <p class="error" v-if="errors.quantity">{{errors.quantity[0]}}</p>
                </div>
            </div>
            <div class="standard-row">
                <div class="form__item">
                    <label class="form__label">wood</label>
                    <select v-model="furniture.wood" size="w">
        	                <option value="Buk">Buk</option>
        	                <option value="Dąb">Dąb</option>
                            <option value="Orzech">Orzech</option>
                        </select>
                    <p class="error" v-if="errors.wood">{{errors.wood[0]}}</p>
                </div>
                <div class="form__item">
                    <label class="form__label">image size: 80x80px</label>
                    <input type="file" name="image" @change="onFileChanged">
                    <p class="error" v-if="errors.image">{{errors.image[0]}}</p>
                </div>
                <div class="form__item">
                    <label class="form__label">comments</label>
                    <input type="text" v-model="furniture.comments" id="uwagi">
                    <p class="error" v-if="errors.comments">{{errors.comments[0]}}</p>
                </div>
            </div>
            <button class="btn" @click="onUpload">Create</button>
        </form>
    </section>
</template>

<style scoped>
    .creation-form {
        margin: 5% 0;
        max-width: 90%;
    }
    
    .first-row {
        display: grid;
        grid-template-rows: min-content;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 20px;
        margin: 20px 0;
    }
    
    .standard-row {
        display: grid;
        grid-template-rows: auto;
        grid-template-columns: 1fr 1fr 1fr;
        grid-column-gap: 20px;
        margin: 20px 0;
    }
    
    input {
        background: #ece6e6;
        border-radius: 6px;
        padding: 14px 10px;
        border: 0 none;
        font-size: 14px;
        height: 46px;
        width: 100%;
    }
    
    input[type="file"] {
        background: #ece6e6;
        border-radius: 6px;
        padding: 10px;
    }
    
    input[type="file"]::-webkit-file-upload-button {
        background: #F4894C;
        border: 0;
        padding: 4px;
        color: white;
        border-radius: 3px;
    }
    
    input#uwagi {
        min-height: 130px;
    }
    
     ::placeholder {
        color: #A2A2A2;
    }
    
    .btn {
        background: #F4894C;
        border: 0;
        border-radius: 6px;
        font-size: 18px;
        color: white;
        font-weight: 700;
        padding: 8px 14px;
        -webkit-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.5);
        box-shadow: 3px 3px 5px 0px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }
    
    .form__label {
        color: #F4894C;
        font-size: 10px;
        display: block;
        margin: 5px 0;
        font-weight: 700;
    }
    
    select {
        background: #ece6e6;
        border-radius: 6px;
        padding: 14px 10px;
        border: 0 none;
        font-size: 14px;
        width: 100%;
    }
    
    .error {
        font-size: 12px;
        margin: 0;
    }
</style>

<script>
    import axios from 'axios';
    
    export default {
        data() {
            return {
                furniture: {
                    image: '',
                    name: null,
                    category_id: null,
                    price: null,
                    quantity: null,
                    wood: null,
                    color: null,
                },
                errors: [],
            }
        },
        methods: {
            onFileChanged(event) {
                var fileReader = new FileReader()
    
                fileReader.readAsDataURL(event.target.files[0])
    
                fileReader.onload = (event) => {
                    this.furniture.image = event.target.result
                }
    
            },
            onUpload() {
                axios.post('http://127.0.0.1:8000/api/furnitures',
                        this.furniture, {
                            headers: {
                                Authorization: 'Bearer ' + localStorage.getItem('token')
                            }
                        }
                    )
                    .then(function(response) {
                        console.log(response);
                        alert('new item was added');
                    })
                    .catch(error => {
                        console.log(error.response.data.errors);
                        this.errors = error.response.data.errors;
    
                    });
            },
        }
    }
</script>

