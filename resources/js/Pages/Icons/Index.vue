<template>
      <Head title="Iconos" />
        <input width="0px" style="opacity: 0; position:fixed;"  v-on:focus="$event.target.select()" ref="inputCopy" readonly :value="text"/>
        <div class="sticky -top-6 bg-white shadow" v-if="name">
              <div class="p-5 text-center">
                  <b >{{ name }}</b>
                  <div class="pt-2" v-if="name">Copiado al Clipboard</div>
              </div>
        </div>
        <div class="flex flex-wrap">

            <div  v-for="item in list_icons" class="w-24 mb-3">
              <a class="cursor-pointer block p-3 hover:bg-orange-600" @click="copy(item.icon)" :title="item.icon">
                <icon :name=item.icon class="m-auto w-10 h-10 stroke" :alt="item.icon"  />
              </a>
            </div>
        </div>
  </template>
  
  <script>
  import { Head } from '@inertiajs/inertia-vue3'
  import Layout from '@/Shared/Layout'
  import Icon from '@/Shared/Icon'
  import axios from 'axios'
  
  export default {
    components: {
      Head,
      Icon,
    },
    props: {
      list_icons: Array,
    },
     
    data() {
       
      return {
        text: 'This will get copied!',
        image : null,
        name : null,
      }
    }, 
    layout: Layout,
    mounted: function () {},
    methods: {
      copy(text) {
        this.name = text;
        this.$refs.inputCopy.value = text;
        this.$refs.inputCopy.focus();
        document.execCommand('copy');
        // alert("Copiado al Clipboard ")
      }
    },
  }
  </script>