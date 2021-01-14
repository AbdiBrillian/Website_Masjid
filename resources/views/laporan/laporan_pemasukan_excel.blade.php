<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3><b><i>Laporan Pemasukan</i></b></h3>
	<table id="table-pemasukan" class="table align-items-center table-flush">
		<thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Sumber</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Nominal</th>
            </tr>
		</thead>
		<tbody>
			@foreach($pemasukan as $e=>$ps)
			<tr>
                    <td> {{ $e+1 }} </td>
                    <td> {{ date('d M Y',strtotime($ps->tanggal)) }} </td>
                    <td> {{ $ps->nama }} </td>
                    <td> {{ $ps->keterangan }} </td>
                    <td> Rp. {{ number_format($ps->nominal,0) }} </td>
                </tr>
			@endforeach
			<tr>
				<td></td>
				<td>Total Pemasukan : </td>
				<td><b><i>Rp. {{ number_format($total_pemasukan,0) }}</i></b></td>
			</tr>
		</tbody>
	</table>
</body>
</html>