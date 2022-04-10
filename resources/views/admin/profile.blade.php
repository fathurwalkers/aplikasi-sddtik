@extends('layouts.admin-layouts')
@section('title', 'Profil Pengguna')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Profil Pengguna')

@section('main-content')

<div class="row">

	<div class="col-sm-2 col-md-2 col-lg-2">
		<img class="img img-thumbnail" src="{{ asset('foto/default-profile.jpg') }}" alt="" width="200px">
	</div>

	<div class="col-sm-10 col-md-10 col-lg-10">
		<table class="border-0">
			<tr>
				<td>
					<ul class="list-unstyled">
						<li>Nama </li>
						<li>Tempat / Tanggal Lahir &nbsp; &nbsp; </li>
						<li>Jenis Kelamin </li>
						<li>Username </li>
						<li>Email </li>
						<li>No. HP / Telepon </li>
					</ul>
				</td>
				<td>
					<ul class="list-unstyled">
						<li> : {{ $users->login_nama }}</li>
						<li> : @php echo "TIDAK ADA DATA"; @endphp</li>
						<li> : @php echo "TIDAK ADA DATA"; @endphp</li>
						<li> : {{ $users->login_username }}</li>
						<li> : {{ $users->login_email }}</li>
						<li> : {{ $users->login_telepon }}</li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
</div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush