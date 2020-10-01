<template>
    <div>
        <div class="single-video">

            <div class="single-video">
                <iframe
                    width="100%"
                    height="475"
                    :src="videoPath"
                    frameborder="0"
                    allow="encrypted-media"
                    allowfullscreen
                >
                </iframe>
            </div>
        </div>

        <div class="single-video-title box mb-3">
            <h2><a href="#">
                {{ video.title }}
            </a></h2>
            <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PlayVideoComponent",
        props: ['video', 'course'],
        computed: {
            videoPath () {
                return '/storage' + this.video.video_url
            }
        }
    }
</script>

<style scoped>

</style>