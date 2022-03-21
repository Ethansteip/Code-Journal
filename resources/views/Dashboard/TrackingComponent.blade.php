@extends('layouts.DashboardLayout')

@section('content')
<main class="flex flex-col w-screen h-screen bg-gray-200">
  <div class="flex flex-col w-1/2 h-5/6 items-center mx-5 ">

    <!-- Main Date and Month Nav -->
    <livewire:date-picker />

    <!-- Begin Main time Tracking Sheet component -->
    <livewire:entries-display />

  </div>
  

</main>

<script>

  // function changeClass(){
  //   document.getElementById("date-picker").classList.remove('bg-gray-800');
  //   document.getElementById("date-picker").classList.add('bg-indigo-300');
  // }

</script>


@endsection