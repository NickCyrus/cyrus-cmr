<template>
  <div>
    <Head title="Dashboard" />
    <h1 class="mb-8 text-3xl font-bold">Dashboard</h1>
    <p class="mb-8 leading-normal">Hey there! Welcome to Ping CRM, a demo app designed to help illustrate how <a class="text-indigo-500 hover:text-orange-600 underline" href="https://inertiajs.com">Inertia.js</a> works.</p>

 
     
    <button class="border p-3 mb-4 bg-green-500 text-white font-bold rounded" @click="change">Cargar nuevos Elementos</button>
    <div class="flex flex-row">
      <div class="basis-1/3 border">
        <ul>
          <li v-for="item in categorias" class="block mb-3">
            <a class="cursor-pointer block p-3 hover:bg-orange-400" @click="moreInfo(item.strCategory)">{{ item.strCategory }}</a>
          </li>
        </ul>
      </div>
      <div class="basis-1/3 border">
        <ul>
          <li v-for="item in lista" class="block mb-3">
            <a class="cursor-pointer block p-3 hover:bg-orange-600" @click="setImage(item.strDrinkThumb)">{{ item.strDrink }}</a>
          </li>
        </ul>
      </div>
      <div class="basis-1/3 border">
          <div class="block p-3 font-bold">IMAGE</div>
          <div class="sticky top-0">
              <img v-if="image" class="block m-4 w-64 w-64 rounded-full" :src="image" />
          </div>
      </div>
   </div>

  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import axios from 'axios'

export default {
  components: {
    Head,
  },
  props: {
    categorias: Array,
    lista: Array,
  },
  data() {
    this.myMethod()
    return {
      image : null 
    }
  },
  layout: Layout,
  mounted: function () {
    this.$nextTick(function () {
      this.myMethod();
    })
  },
  methods: {
    change(e) {
      
      this.myMethod()
      // this.listaCompleta.push({ 'id': 1 , 'name': 'Lemus'}, { 'id':2 , 'name': 'Duque'})
      // console.log(this.listaCompleta);
    },
    setImage(img){
          this.image = img;
    },
    async moreInfo (url) {
        this.image = null
        axios.get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s='+url)
        .then(response => {
          this.lista.splice(0 , this.lista.length, ...response.data.drinks)
        })

    },
    async myMethod () {
        const catUrl  = 'https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list'; 
        axios.get(catUrl)
        .then(response => {
          this.categorias.splice(0 , this.categorias.length, ...response.data.drinks)
        })

        
      }
  },
}
</script>
