<template>
    <div>
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-12">

                    <!--@if (session('message'))-->
                    <!--@include('alerts.sucess-messages')-->
                    <!--@endif-->

                    <div class="main-title">
                        <div class="btn-group float-right right-action">

                            <a href="/upload" class="right-action-link text-gray mr-3">
                                Adicionar <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                            </div>
                        </div>
                        <h6>Novos Videos ({{ channelVideos.length }})</h6>
                    </div>
                </div>


                <video-channel-component
                    v-for="video in channelVideos"
                    :key="video.id"
                    :video="video"
                />


            </div>
        </div>
    </div>
</template>

<script>
    import VideoChannelComponent from "./VideoChannelComponent";
    export default {
        name: "VideoPage",
        components: {VideoChannelComponent},
        data () {
            return {
                channelVideos: []
            }
        },
        methods: {
            async initialize () {

                let response = await axios.get('/channel/videos')

                this.channelVideos = response.data

                console.log('this.channelVideos: ', this.channelVideos)

            }
        },

        mounted () {
            this.initialize()
        }
    }
</script>

<style scoped>

</style>