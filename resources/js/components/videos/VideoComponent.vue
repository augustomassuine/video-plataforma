<template>
    <div class="video-card video-card-list">
        <div class="video-card-image">
            <a class="play-icon" :href="routeToPlay"><i class="fas fa-play-circle"></i></a>
            <a :href="routeToPlay">

                <img class="img-fluid" :src="videoImage" alt="">

            </a>
            <div class="time">
                {{ video.duration }}
            </div>
        </div>
        <div class="video-card-body">
            <div class="btn-group float-right right-action">
                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                </div>
            </div>
            <div class="video-title">
                <a :href="routeToPlay">
                    {{ video.title }}
                </a>
            </div>
            <div class="video-page text-success">
                Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
            </div>
            <div class="video-view">
                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "VideoComponent",
        props: ['video'],
        computed: {
            videoImage () {
                return this.video.image_url ? '/storage' + this.video.image_url : 'assets/img/v1.png'
            },
            routeToPlay () {
                return '/courses/' + this.video.course_id + '/video/' + this.video.id
            }
        },

    }
</script>

<style scoped>

</style>