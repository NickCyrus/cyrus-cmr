<template>
  <div>
    <div class="" v-for="(menu_item, m_index)  in user.modules" v-on="menu_item.submenu?{click: (e) => addActiveClass(e)}:{}">
      <Link class="flex items-center py-2" :href="(menu_item.submenu.length) ? '#' : route(menu_item.slug)" :class="{'have-sub-menu': menu_item.submenu.length}">
        <icon :name="menu_item.icon" class="w-8 h-8 mr-3" :class="isUrl(menu_item.slug) ? 'stroke-active active ' : 'stroke group-hover:w-4 '" />
        <div :class="isUrl(menu_item.slug) ? 'text-white' : 'text-indigo-300 group-hover:text-white'">{{ menu_item.name }}</div>
      </Link>

        <div v-if="menu_item.submenu.length" class="sub-menu-items pl-4 mt-2 mb-5">
            <Link class="flex items-center" v-for="(sub_menu_item, s_m_index) in menu_item.submenu" :key="s_m_index"
                :class="this.isUrl(sub_menu_item.slug) ? 'stroke-active ' : 'stroke group-hover:w-4 '" :href="route(sub_menu_item.slug)">
                <icon :name="sub_menu_item.icon" class="w-4 h-4 mr-3 " />
                <div class="text-white text-[12px]">{{ __(sub_menu_item.name) }}</div>
            </Link>
        </div>
   </div>

  

  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import Icon from '@/Shared/Icon'

export default {
  components: {
    Icon,
    Link,
  },
  data(){
      return{
          user : null,
          menu : null
      }
  },
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1)
      if (urls[0] === '') {
        return currentUrl === ''
      }
      return urls.filter((url) => currentUrl.startsWith(url)).length
    },
    addActiveClass(e){
          e.currentTarget.classList.toggle('hover')
      },
  },
  created() {
      this.user = this.$page.props.auth.user;
      this.menu = this.user.modules;
       

       
  }
}
</script>
