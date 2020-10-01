<!-- Logout Modal-->
<div class="modal fade" id="deleteCategoryModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar categoria?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">A categoria <b>{{ $category->name }}</b> será deletada, confirma?.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <span>
                    <a class="btn btn-primary" href="{{ route('categories.destroy', ['category' => $category->id]) }}"
                       onclick="event.preventDefault();document.getElementById('delete-category-form').submit();"
                    >
                        Confirmo, pode deletar.
                    </a>

                    <form id="delete-category-form" action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </span>
                {{--<a class="btn btn-primary" href="login.html">Confirmo</a>--}}
            </div>
        </div>
    </div>
</div>