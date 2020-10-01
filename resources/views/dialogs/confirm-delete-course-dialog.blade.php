<!-- Logout Modal-->
<div class="modal fade" id="deleteCourseModal{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar o curso?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">O curso <b>'{{ $course->title }}'</b> será deletado, confirma?.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <span>
                    <a class="btn btn-primary" href="/courses/{{ $course->id }}"
                       onclick="event.preventDefault();document.getElementById('delete-course-form').submit();"
                    >
                        Confirmo, pode deletar.
                    </a>

                    <form id="delete-course-form" action="/courses/{{ $course->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </span>
                {{--<a class="btn btn-primary" href="login.html">Confirmo</a>--}}
            </div>
        </div>
    </div>
</div>