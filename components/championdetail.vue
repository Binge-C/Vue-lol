<template>
	<div></div>
</template>
<script>
	module.exports = {
		methods: {
			getChampionDetail: function() {
				//$routeParams $state
				this.$http.get("http://lolapi.games-cube.com/GetChampionDetail?champion_id=" + this.$route.params.id, {
					headers: {
						"DAIWAN-API-TOKEN": "F4E9C-448AB-2BF93-4E988"
					}
				}).then(function(data) {
					console.log(data)
				})
			}
		},
		mounted:function(){
			this.getChampionDetail()
		}
	}
</script>