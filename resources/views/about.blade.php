@extends('layouts.nav')
@section('content')
<div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <p class="text-style-14">PHP2</p>
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <p class="text-style-13">26914/26906 ITELECPHP2</p>
            <p class="text-style-13">Instructor: Gian Carlo Cataraja</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <p class="text-style-14">Web Development</p>
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <p class="style-text-13">
            Web development is the building and maintenance of websites; it’s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience.

            Web developers, or ‘devs’, do this by using a variety of coding languages. The languages they use depends on the types of tasks they are preforming and the platforms on which they are working.

            Web development skills are in high demand worldwide and well paid too – making development a great career option. It is one of the easiest accessible higher paid fields as you do not need a traditional university degree to become qualified.

            The field of web development is generally broken down into front-end (the user-facing side) and back-end (the server side). Let’s delve into the details.
            </p>
        </div>
      </div>
    </div>
  </div>
@endsection
