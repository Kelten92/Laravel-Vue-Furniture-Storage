<template>
  <main class="home">
    <header class="home__header">
      <h1>Furniture Storage Engine v. 1.0.0</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero delectus pariatur hic debitis voluptatem unde nemo. Ab non quo quod laboriosam, dolorum voluptatibus ipsum rem est nobis deserunt dignissimos quibusdam ipsam quaerat neque? Tempore qui facere et aspernatur quia!
      </p>
    </header>
    <section class="activities">
      <h3>Activities</h3>
      <ul>
        <li>
          <log v-for="log in logs" v-bind:key="log.id" v-bind:log="log"></log>
        </li>
      </ul>
      <div style="clear:both"></div>
      <div class="divide">
      <router-link to="/" class="link">more</router-link>
      <hr>
      </div>
    </section>
    <div class="info">
      <p>In case of problems, please contact with admin@gmail.com!</p>
    </div>
    <social/>
  </main>
</template>

<style scoped>
.info{
  text-align: center;
  font-size: 26px;
  color: #F4894C;
  font-weight: 400;
}
.info p{
  margin: 20px 0;
}
.divide{
  text-align: right;
}
hr{
  margin: 4px 0;
  border: 0;
  height: 1px;
  background: #141F35;
  opacity: 0.4;
}
.link{
  color: #141F35;
  opacity: 0.5;
  font-weight: bold;
  text-decoration: none;
  margin: 5px 0;
  font-size: 12px;
  transition: 0.5s;
}
.link:hover{
  opacity: 1;
}
.home__header h1{
  font-weight: bold;
  font-size: 22px;
  margin: 20px 0;
  padding: 0;
  color: #F4894C;
  letter-spacing: 1px;
}
.home__header p{
  opacity: 0.4;
  line-height: 130%;
  font-size: 14px;
}
.activities{
  margin: 40px 0 25px;
}
.activities h3{
  font-size: 20px;
  font-weight: 400;
}
.activities ul{
  list-style: none;
  padding: 0;
  margin-top: 30px;
}
</style>

<script>
import log from '@/components/log.vue';
import social from '@/components/social.vue';

export default {
  name: 'home',
  components: {
    log,
    social,
  },
  data(){
    return{
      logs:[
        { id: 1, name: 'Edward Milleburry', activ: 'add new item kitchen shell', date: '12:35 2018-12-12' },
        { id: 2, name: 'Kristen Dull', activ: 'add new item black wardrobe', date: '12:56 2018-12-05' },
        { id: 3, name: 'Jeff Jefferson', activ: 'delete item simple chair', date: '06:11 2018-08-12' },
        { id: 4, name: 'Edward Milleburry', activ: 'add new item yellow chair', date: '09:22 2018-11-01' },
      ]
    }
  },
}
</script>
