<template>
    <div class="row">
        <div class="col-md-12">

            <div class="adblock">
                <div class="img">
                    Google AdSense<br>
                    336 x 280
                </div>
            </div>

            <div class="main-title">
                <div class="btn-group float-right right-action">
                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                    </div>
                </div>
                <h6>Up Next</h6>
            </div>
        </div>

        <div class="col-md-12">

            <template v-for="(video, index) in videos">

                <div v-if="index > 0 && index % 6 === 0" class="adblock mt-0">
                    <div class="img">
                        Google AdSense <br>
                        336 x 280
                    </div>
                </div>

                <video-component :video="video"/>

            </template>

        </div>

    </div>

</template>

<script>

    import VideoComponent from './VideoComponent'

    export default {
        name: "BaseVideosComponent",
        props: ['videos'],
        components: { VideoComponent },
        // computed: {
        //     videos () {
        //         return this.course.videos
        //     }
        // },
        mounted () {

            console.log('course: ', this.course)

        }
    }
</script>

<style scoped>

</style>