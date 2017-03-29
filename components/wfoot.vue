<template>
  <mu-paper style="position: fixed; bottom: 0px; width: 100%;">
    <mu-bottom-nav :value="bottomNav" shift @change="handleChange">
      <mu-bottom-nav-item value="news" title="资讯" icon="ondemand_video" href="#/index/news/1"/>
      <mu-bottom-nav-item value="favorites" title="信息" icon="music_note" href="#/index/players/2"/>
      <mu-bottom-nav-item value="heros" title="英雄" icon="books" href="#/index/heros/3"/>
      <mu-bottom-nav-item value="mybuy" title="个人中心" icon="photo" href="#/index/pic/4"/>
    </mu-bottom-nav>
  </mu-paper>

</template>

<script>
export default {
  data () {
    return {
      bottomNav: 'news',
      bottomNavColor: 'news'
    }
  },
  mounted:function(a,b){
        console.log(this.$route.params);
        var id = this.$route.params.id;
        switch(id){
          case "1":
          this.bottomNav = "recents";
          this.bottomNavColor= "recents";
          break;
          case "2":
          this.bottomNav = "favorites";
          this.bottomNavColor= "favorites";
          break;
          case "3":
          this.bottomNav = "heros";
          this.bottomNavColor= "heros";
          break;
          case "4":
          this.bottomNav = "mybuy";
          this.bottomNavColor= "mybuy";
          break;
        }
      },
  methods: {
    handleChange (val) {
      this.bottomNav = val
    }
  }
}
</script>