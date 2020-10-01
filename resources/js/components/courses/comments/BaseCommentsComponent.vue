<template>
    <div class="col-lg-12">
        <div class="card p-3">
            <div class="card-body text-center">
                <h4 class="card-title">Comentários</h4>
            </div>
            <div class="comment-widgets">

                <comment-component
                    v-for="comment in comments"
                    :key="comment.id"
                    :comment="comment"
                    @courseUpdated="handleUpdatedCourse"
                />

            </div> <!-- Card -->

            <comment-form-component
                :course="course"
                :auth="auth"
                @courseUpdated="handleUpdatedCourse"
            />

        </div>
    </div>
</template>

<script>
    import CommentComponent from "./CommentComponent";
    import CommentFormComponent from "./CommentFormComponent";
    export default {
        name: "BaseCommentsComponent",
        props: ['course', 'auth'],
        data () {
            return {
                commentsToDisplay: []
            }
        },
        components: {CommentFormComponent, CommentComponent},
        computed: {
            comments () {
                return this.commentsToDisplay
            }
        },
        methods: {
            handleUpdatedCourse (course) {

                this.commentsToDisplay = course.course_comments

            }
        },
        mounted () {
            this.commentsToDisplay = this.course.course_comments
        }
    }
</script>

<style scoped>

</style>