<div class="btn-group gap-2">
  <a href="{{ route('kriteria.edit', $row->id) }}" class="btn btn-primary btn-sm"><i class="ti-pencil-alt"></i></a>
  <form action="{{ route('kriteria.delete', $row->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="show_confirm btn btn-danger btn-sm" data-toggle="tooltip" title="Delete">
      <i class="ti-trash"></i>
    </button>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/alert-delete.js') }}"></script>
