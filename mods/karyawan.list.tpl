<h2>Karyawan</h2>

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
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Kota</th>
            <th>no</th>
            <th>Tgl</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>
<hr>
<script>
    function getData() {
        var data = [
            {
                "name":       "Tiger Nixon",
                "position":   "System Architect",
                "salary":     "$3,120",
                "start_date": "2011/04/25",
                "office":     "Edinburgh",
                "extn":       "5421"
            },
            {
                "name":       "Garrett Winters",
                "position":   "Director",
                "salary":     "$5,300",
                "start_date": "2011/07/25",
                "office":     "Edinburgh",
                "extn":       "8422"
            }
        ];

        $('#dataTable').DataTable({
            data: data,
            columns: [
                { data: 'name' },
                { data: 'position'},
                { data: 'office'},
                { data: 'extn'},
                { data: 'start_date'},
                { data: 'salary', className: "text-end"},
            ]
        });
    }
    $(document).ready( function () {
        // prep table        
        
    } );
</script>