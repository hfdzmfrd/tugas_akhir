@extends('crudbooster::themes.adminlte.layout.layout')

@section('content')
<div>
  <canvas id="myChart"></canvas>
</div>

@push('bottom')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" 
integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endpush

@endsection