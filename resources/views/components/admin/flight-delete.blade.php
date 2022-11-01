<div class="modal" id="delete/{{session('id')}}">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Apakah anda yakin ingin menghapus data penerbangan?</h3>
      <div class="modal-action">
       <a href="#" class="btn btn-error">No</a>
       <a href="flight/destroy/{{session('id')}}" class="btn btn-success">Yes</a>
      </div>
    </div>
  </div>