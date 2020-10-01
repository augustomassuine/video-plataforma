<!-- Logout Modal-->
<div class="modal fade" id="deleteChannelModal{{ $channel->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar o canal?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">O canal <b>{{ $channel->name }}</b> será deletado, confirma?.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <span>
                    <a class="btn btn-primary" href="/channels/{{ $channel->id }}"
                       onclick="event.preventDefault();document.getElementById('delete-channel-form').submit();"
                    >
                        Confirmo, pode deletar.
                    </a>

                    <form id="delete-channel-form" action="/channels/{{ $channel->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </span>
                {{--<a class="btn btn-primary" href="login.html">Confirmo</a>--}}
            </div>
        </div>
    </div>
</div>