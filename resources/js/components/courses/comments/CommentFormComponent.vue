<template>
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="d-flex flex-column col-md-12">

                <div class="coment-bottom bg-white p-2 px-4">

                    <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                        <img class="img-fluid img-responsive rounded-circle mr-2" :src="auth.avatar" width="38">
                        <input v-model="formData.description" type="text" class="form-control mr-3" placeholder="Add comment">
                        <button :disabled="!canSubmitForm" @click="postData()" class="btn btn-primary" type="button">Comment</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CommentFormComponent",
        props: ['course', 'auth'],
        data () {
            return {
                formData: {
                    user_id: '', //Vamos durante post no próprio server.
                    course_id: '',
                    description: '',
                }
            }
        },
        computed: {
            canSubmitForm () {
                return this.formData.course_id
                    && this.formData.description
                    && this.formData.description.length > 1
            }
        },
        methods: {
            postData () {

                axios.post('/courses/add/comment', this.formData)
                .then(response => {

                    this.formData.description = ''
                    this.$emit('courseUpdated', response.data)
                    console.log('server response: ', response.data)
                })

            },
            initialize () {

                this.formData.course_id = this.course.id

            }
        },
        mounted () {

            this.initialize ()

        }
    }
</script>

<style scoped>

</style>