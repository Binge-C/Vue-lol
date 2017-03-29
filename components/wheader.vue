<template>
	<mu-appbar title="LOL助手" style="position: fixed; top: 0px; width: 100%;text-align:center;">
		<mu-icon-button icon='menu' slot="left" @click="left()" />
		<mu-icon-button icon='expand_more' slot="right" @click="bottom()" />
	</mu-appbar>
</template>
<script>
	module.exports = {
		methods:{
			left:function(){
				this.$store.commit("set_isLeftPopUp",true)
			},
			bottom:function(){
				this.$store.commit("set_isBottomPopUp",true)
			}
		}
	}
</script>
