# Vue-lol
Vue+webpack+vue-resource+vue-router    test<br>
## 这是我练习Vue的一个小test/<br>

<br>
## 首先，配置Webpack<br>
  webpack默认读取webpack.config.js，文件名不能随便改，其中 entry 是必须配置的 
  <pre><code>
  module.exports = {
    entry: './src/main.js',
    output: {
        path: __dirname + '/dist',
        publicPath: '/static/',
        filename: 'build.js'
    }
}
  </code></pre>
