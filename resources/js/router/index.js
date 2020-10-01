
import Vue from 'vue'
import VueRouter from 'vue-router'

import channelRoutes from './channelRoutes'
// Importação das rotas declaradas

const router = new VueRouter({
    mode: 'hash',
    routes:  channelRoutes
})

Vue.use(VueRouter)

export default router


