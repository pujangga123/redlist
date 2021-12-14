<h2>Karyawan</h2>
<button onclick="tableReload()">test</button>
<table>
    <thead>
        <tr>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
    {{foreach from=$data item=row key=key}}
        <tr>
            <td>{{$row.nama}}</td>
        </tr>
    {{/foreach}}
    </tbody>
</table>

<div style="width:100%; background-color:red" class="text-end" >budi</div>

<table id="dataTable" class="display">
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
<hr>
<script>
    function tableReload() {    
        $("#dataTable").DataTable().ajax.reload();
    }
    $(document).ready( function () {
        // prep table        
        $('#dataTable').DataTable({
            ajax: {
                url: 'api.karyawan.php',
                type: "POST",
                dataSrc: 'data',
                data: {
                    token:"list"
                }
            },           
            columns: [
                { data: 'id' },
                { data: 'nik'},
                { data: 'nama'}
            ]
        });
    } );
</script>