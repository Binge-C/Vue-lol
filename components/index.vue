<!--html-->
<template>
	<div>
		<wheader></wheader>
		<router-view></router-view>
		<popup></popup>
		<wfoot></wfoot>
	</div>
</template>
<script>
	//es6/es7
	//import wheader from "./wheader.vue";
	//es5
	var wheader = require("./wheader.vue")
	var wfooter = require("./wfooter.vue")
	var popup = require("./popup.vue");
	var wfoot = require("./wfoot.vue");
	module.exports = {
		data: function() {
			return {
				name: 'wscat'
			}
		},
		computed: {
			abc: function() {
				return this.$store.state.name
			}
		},
		//测试是否能用$http
		// methods: {
		// 	getData: function() {
		// 		this.$http.get("abc.html").then(function(data) {

		// 		}, function(err) {

		// 		})
		// 	}
		// },
		components: {
			wheader: wheader,
			// wfooter: wfooter,
			wfoot:wfoot,
			popup:popup
		},
		mounted: function() {
			// this.getData()
		}
	}
</script>
<style>

</style>