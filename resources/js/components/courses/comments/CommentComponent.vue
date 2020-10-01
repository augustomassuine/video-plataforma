<template>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row my-3">
        <div class="p-2">
            <img :src="user.avatar" alt="user" width="50" class="rounded-circle">
        </div>
        <div class="comment-text w-100">
            <h6 class="font-medium">{{ user.name }}</h6>

            <input v-if="isEditing" type="text"  v-model="formData.description" class="form-control">

            <span v-else class="m-b-15 d-block">{{ comment.description }}</span>

            <div class="comment-footer my-3">
                <span class="text-muted float-right">April 14, 2019</span>

                <template v-if="isEditing">
                    <button @click="cancelEdit()" type="button" class="btn btn-cyan btn-sm">Cancelar</button>
                    <button @click="updateComment()" type="button" class="btn btn-primary btn-sm">Actualizar</button>
                </template>


                <button v-else @click="edit()" type="button" class="btn btn-cyan btn-sm">Edit</button>

                <button type="button" data-toggle="modal" :data-target="'#' + dialogID" class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>

        <confirm-dialog-component @confirmed="deleteComment()" :dialogID="dialogID">
            <template v-slot:title>
                O comentário será removido
            </template>
            <template v-slot:content>
                Deseja remover o comentário: <b>{{ comment.description }}</b>??
            </template>
        </confirm-dialog-component>

    </div> <!-- Comment Row -->
</template>

<script>
    import ConfirmDialogComponent from "../../dialogs/ConfirmDialogComponent";
    export default {
        name: "CommentComponent",
        components: {ConfirmDialogComponent},
        props: ['comment'],
        data () {
            return {
                isEditing: false,
                dialogID: '',
                formData: {
                    description: '',
                }
            }
        },
        computed: {
            user () {
                return this.comment.user
            }
        },
        methods: {
            edit () {
                this.isEditing = true
                this.formData.description = this.comment.description
            },
            cancelEdit () {
                this.isEditing = false
            },
            updateComment () {

                this.formData.comment_id = this.comment.id

                axios.post('/courses/update/comment/', this.formData)
                    .then(response => {

                        this.$emit('courseUpdated', response.data)
                        this.cancelEdit ()

                    })
            },
            deleteComment () {

                this.formData.comment_id = this.comment.id

                axios.delete('/courses/'+ this.comment.course_id +'/delete/comment/' + this.comment.id)
                    .then(response => {

                        this.$emit('courseUpdated', response.data)
                        this.cancelEdit ()

                    })
            }
        },
        mounted () {
            this.dialogID = 'comment_' + this.comment.id
        }
    }
</script>

<style scoped>

</style>