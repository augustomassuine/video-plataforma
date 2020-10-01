
import VideoPage from './../components/channels/VideoPage'
import CoursePage from './../components/channels/CoursePage'
import LivePage from './../components/channels/LivePage'
import MessagePage from './../components/channels/MessagePage'
import AboutPage from './../components/channels/AboutPage'

const routes = [
    {
        path: '/',
        redirect: '/videos'
    },
    {
        path: '/videos',
        component: VideoPage
    },
    {
        path: '/courses',
        component: CoursePage
    },
    {
        path: '/lives',
        component: LivePage
    },
    {
        path: '/messages',
        component: MessagePage
    },
    {
        path: '/about',
        component: AboutPage
    },
]

export default routes;