<template>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="video-card">
            <div class="video-card-image">
                <a class="play-icon" :href="videoRouteTo">
                    <i class="fas fa-play-circle"></i>
                </a>
                <a :href="videoRouteTo">

                    <img class="img-fluid" :src="videoImage" :alt="video.title">

                </a>
                <div class="time">
                    {{ video.duration }}
                </div>
            </div>
            <div class="video-card-body" style="height: 100px">
                <div class="video-title">
                    <a :href="videoRouteTo">
                        {{ video.title }}
                    </a>
                </div>
                <div class="video-page text-success">
                    Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                </div>
                <div class="video-view">
                    0 visualizações &nbsp;<i class="fas fa-calendar-alt"></i> 11 meses atrás
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "VideoChannelComponent",
        props: ['video'],
        computed: {
            videoRouteTo () {
                return `/videos/play/${ this.video.id }`
            },
            videoImage () {
                return `/storage/${ this.video.image_url }`
            }
        }
    }
</script>

<style scoped>

</style>