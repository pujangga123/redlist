<h2>Karyawan</h2>
<!-- button onclick="tableReload()">test</button -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formDetail">
  Launch demo modal
</button>

<div class="mt-3" style="width:700px">
    <table id="dataTable" class="display" >
        <thead>
            <tr>
                <th>id</th>
                <th>nik</th>
                <th>nama</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
<hr>

<!-- Modal: detail -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="formDetail" tabindex="-1" aria-labelledby="formDetailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formDetailLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END: modal detail -->
<script>
    function karyawanBaru() {
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        });
    }
    function tableReload() {    
        $("#dataTable").DataTable().ajax.reload();
    }
    var table;
    $(document).ready( function () {
        // prep table  
        var table = $('#dataTable').DataTable({
            ajax: {
                url: 'api.karyawan.php',
                type: "POST",
                dataSrc: 'data',
                data: {
                    token:"list"
                }
            },        
            "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
            columns: [
                { data: 'id', width:"50px", visible:false },
                { data: 'nik', width: "80px"},
                { data: 'nama'}
            ]
        });
        $('#dataTable tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();
            alert( 'You clicked on '+data['id']+'\'s row' );
        } );
    } );
</script>