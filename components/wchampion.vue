<template>
	<div class="gridlist-demo-container">
		<mu-grid-list class="gridlist-demo" style="padding-top:56px; padding-bottom: 56px;">
			<!--<mu-sub-header>图片展示</mu-sub-header>-->
			<mu-grid-tile v-for="tile in list" :key = "tile.id">
				<a :href="'#/detail/'+tile.id" class="mu-grid-tile multiline">
					<img :src="'http://cdn.tgp.qq.com/pallas/images/champions_id/'+tile.id+'.png'" />
				</a>
				<span slot="title">{{tile.title}}</span>
				<span slot="subTitle"><b>{{tile.ename}}</b></span>
				<mu-icon-button icon="star_border" slot="action" />
			</mu-grid-tile>
		</mu-grid-list>
	</div>
</template>
<script>
	export default {
		data() {
				return {
					list: []
				}
			},
			methods: {
				getChampion: function() {
					this.$http.get("http://localhost/lol/hero.php", {
						headers: {
							"DAIWAN-API-TOKEN": "F4E9C-448AB-2BF93-4E988"
						}
					}).then(function(data) {
						console.log(data)
						this.list = data.data.data
					});
				}
			},
			mounted: function() {
				this.getChampion()
			}
	}
</script>
<style>
	.gridlist-demo-container {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
	}
	
	.gridlist-demo {
		width: 500px;
		/*height: 450px;*/
		height: 100%;
		overflow-y: auto;
	}
</style>