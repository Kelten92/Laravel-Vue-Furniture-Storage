<template>
    <nav class="navigation" role="navigation">
        <ul class="navigation__list">
             <li class="list__item">
                <router-link to="/">
                    <img src="../assets/house.png" class="item__img">
                    <h3 class="item__text">home</h3>
                </router-link>
            </li>
            <div style="clear:both"></div>
            <li class="list__item">
                <router-link to="/furnitures-list">
                    <img src="../assets/list.svg" class="item__img">
                    <h3 class="item__text">furnitures list</h3>
                </router-link>
            </li>
            <div style="clear:both"></div>
            <li class="list__item">
                <router-link to="/create-furniture">
                    <img src="../assets/add.svg" class="item__img">
                    <h3 class="item__text">add new furniture</h3>
                </router-link>
            </li>
            <div style="clear:both"></div>
             <li class="list__item">
                <router-link to="/">
                    <img src="../assets/add.svg" class="item__img">
                    <h3 class="item__text">add new order</h3>
                </router-link>
            </li>
            <div style="clear:both"></div>
            <li class="list__item last">
                <router-link to="/">
                    <img src="../assets/settings.svg" class="item__img">
                    <h3 class="item__text">settings</h3>
                </router-link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
.navigation{
    margin-top: 35%;
    
}
.navigation__list{
    list-style: none;
    padding: 0;
    margin: 0;
}
.list__item{
    margin: 15px 0;
    overflow: hidden;
    border-left: 3px solid transparent;
    transition: 0.3s;
}
.list__item:hover{
    border-left: 3px solid #F4894C;
}
.list__item.last{
    position: absolute;
    bottom: 5%;
}
.item__img{
    display: block;
    height: 22px;
    width: 22px;
    float: left;
    margin-left: 10px;
   
}
.item__text{
    letter-spacing: 1px;
    display: block;
    float: left;
    margin: 0;
    text-transform: uppercase;
    font-weight: 700;
    padding: 5px 0 5px 10px;
    color: #141F35;
    font-size: 12px;
}
</style>
