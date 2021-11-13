<form id="formKaryawan">
    <input type="hidden" id="id">
    <label class="col-form-label">Nama</label><input id="nama">    
    <button type="submit">Simpan</button>
</form>


<script>
    function getData(id) {
        if(id=="") { // reset
            $("#id").val("");
            $("#nama").val("");
        } else {
            $.post("api.karyawan.php", { token: 'load', id:id}, function(result) {
                obj = JSON.parse(result);
                $("#id").val(obj.id);
                $("#nama").val(obj.nama);
            });
        }
    }
    $(document).ready(function(){
        getData(id);
    });
</script>