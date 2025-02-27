@extends('includes.app')

@section('css')
<style>
  #hero {
    background: url("{{ asset('theme/frontend/assets/img/single_service_header.jpg') }}") center center;
  }

  .singleServiceHero {
    background: url("{{ asset('course/images/'.$training->breadcrumb_image) }}") top right;
  }
</style>
@endsection

@section('hero')

<!-- ======= Hero Section ======= -->

<section id="pageHero" class="singleServiceHero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color: white;">{{ $training ->course_title  }} </h1>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->


@endsection

@section('content')




<!-- ======= Values Section ======= -->
<div class="container">



  <section id="singleService">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="content">
            <h2>{{ $training -> course_title }} </h2>
            <p>{!! $training -> description !!}</p>




          </div>
        </div>


        <div class="col-12 col-md-4">
          <div class="content border border-dark rounded p-4 mb-4 text-center">
            <div class="text-center">{{ $training -> course_title }}</div>
            <hr>
            <div class="text-center mb-3">Price : ${{ $training -> price }}</div>


            <form action="{{route('users.enrolls.store')}}" method="post">
              @csrf
              <input type="text" name="course_id" id="course_id" value="{{$training->id}}" hidden>
              <input type="text" name="seminar_id" id="seminar_id" value="0" hidden>
              <input type="text" name="price" id="price" value="{{ $training -> price }}" hidden>

              <input type="text" name="payment_method" id="payment_method" value="CASH" hidden>

              <input type="text" name="payment_Comment" id="payment_Comment" value="Payment via cash" hidden>

            <button type="submit"  class=" btn appointment-btn scrollto  ">Start Now</button>
            </form>
          </div>
        </div>



      </div>
    </div>
  </section>
</div>








@endsection