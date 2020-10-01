<template>
    <!-- Logout Modal-->
    <div class="modal fade" :id="dialogID" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <slot name="title"></slot>
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <slot name="content"></slot>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <span>
                    <button @click="$emit('confirmed')" type="button" data-dismiss="modal" class="btn btn-primary">
                        Confirmo
                    </button>

                </span>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ConfirmDialogComponent",
        props: ['dialogID']
    }
</script>

<style scoped>

</style>