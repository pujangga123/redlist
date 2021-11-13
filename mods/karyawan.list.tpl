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