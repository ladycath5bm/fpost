require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
//instacnia de componente global
import 'material-icons/iconfont/material-icons.css'; 
import { createApp } from 'vue'
import Post from './components/posts/Post'

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

const app = createApp({})

app.use(VueSweetalert2);
app.component('post', Post)
app.mount('#app')