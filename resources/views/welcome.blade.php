@extends('layouts.template')

@section('title', 'Welcome')

@section('content')
    <!-- welcome -->
    <div class="container flex flex-grow justify-center flex-wrap text-right text-xl lg:px-3 my-10 py-6">
        <div class="flex flex-row flex-wrap">
            <div class="flex flex-grow lg:flex-grow-0 xl:flex-grow-0 2xl:flex-grow-0">
                <span class="tracking-wider leading-loose">
                    Hi! <br> 
                    My name is Mario Oviedo <br> 
                    and I'm a Software Engineer <br>
                    technology and sports lover <br>
                    Actually I'm a Web developer <br>
                    Welcome and hello world! <br>
                </span>
            </div>
            <div class="flex justify-center flex-grow lg:flex-grow-0 xl:flex-grow-0 2xl:flex-grow-0 ">
                <svg height="256pt" viewBox="0 0 512 512" width="256pt" xmlns="http://www.w3.org/2000/svg">
                    <path d="m482.367188 38.414062h-193.820313c-16.121094 0-29.1875 13.070313-29.1875 29.191407v109.632812c0 16.125 13.066406 29.191407 29.1875 29.191407h68.945313l-11.144532 44.976562c-1.449218 5.859375 5.292969 10.273438 10.082032 6.597656l67.136718-51.570312h58.800782c16.121093 0 29.191406-13.070313 29.191406-29.191406v-109.636719c0-16.121094-13.070313-29.191407-29.191406-29.191407zm0 0" fill="#88dbfd"/><path d="m354.96875 216.617188-8.621094 34.789062c-1.449218 5.859375 5.292969 10.273438 10.082032 6.597656l67.136718-51.570312h-55.335937zm0 0" fill="#5abfe9"/><path d="m482.367188 38.414062h-55.335938c16.121094 0 29.191406 13.070313 29.191406 29.191407v109.632812c0 16.125-13.070312 29.191407-29.191406 29.191407h55.335938c16.121093 0 29.191406-13.066407 29.191406-29.191407v-109.632812c0-16.121094-13.070313-29.191407-29.191406-29.191407zm0 0" fill="#5abfe9"/><g fill="#f2f2f2"><path d="m341.761719 122.105469 24.238281-15.742188c.476562-.382812 1.144531-.476562 1.8125-.476562 2.859375 0 6.488281 3.050781 6.488281 6.964843 0 1.621094-.667969 3.050782-1.71875 3.71875l-16.792969 10.878907 16.792969 10.875c1.050781.667969 1.71875 2.101562 1.71875 3.722656 0 3.910156-3.628906 6.964844-6.488281 6.964844-.667969 0-1.335938-.097657-1.8125-.476563l-24.238281-15.742187c-2.191407-1.433594-2.957031-3.722657-2.957031-5.34375 0-1.625.765624-3.914063 2.957031-5.34375zm0 0"/><path d="m427.925781 85.273438c0 .574218-.097656 1.242187-.382812 1.8125l-33.585938 68.796874c-.667969 1.429688-2.480469 2.386719-4.292969 2.386719-3.246093 0-5.34375-2.671875-5.34375-5.058593 0-.570313.191407-1.238282.476563-1.8125l33.492187-68.796876c.761719-1.621093 2.289063-2.382812 4.007813-2.382812 2.671875 0 5.628906 2 5.628906 5.054688zm0 0"/><path d="m470.484375 132.792969-24.234375 15.742187c-.476562.378906-1.144531.476563-1.8125.476563-2.863281 0-6.492188-3.050781-6.492188-6.964844 0-1.621094.667969-3.054687 1.71875-3.722656l16.792969-10.875-16.792969-10.878907c-1.050781-.667968-1.71875-2.097656-1.71875-3.71875 0-3.914062 3.628907-6.964843 6.492188-6.964843.667969 0 1.335938.09375 1.8125.476562l24.234375 15.742188c2.195313 1.429687 2.957031 3.71875 2.957031 5.34375 0 1.621093-.761718 3.910156-2.957031 5.34375zm0 0"/></g><path d="m407.09375 384.195312c-1.453125-24.769531-17.179688-44.957031-40.582031-55.917968-28.648438-13.410156-106.667969-33.707032-106.667969-33.707032-7.539062-1.398437-13.003906-7.976562-13.003906-15.644531v-44.601562h-84.820313v44.601562c0 7.667969-5.46875 14.242188-13.007812 15.644531 0 0-78.015625 20.296876-106.664063 33.707032-23.40625 10.960937-39.132812 31.148437-40.585937 55.917968l-1.761719 106.324219c-.140625 11.820313 9.402344 21.480469 21.226562 21.480469h366.402344c11.824219 0 21.367188-9.660156 21.226563-21.480469zm0 0" fill="#fcc18b"/><path d="m407.09375 384.195312c-1.453125-24.769531-17.179688-44.957031-40.582031-55.917968-28.648438-13.410156-106.667969-33.707032-106.667969-33.707032-7.539062-1.398437-13.003906-7.976562-13.003906-15.644531v-44.601562h-55.335938v71.347656c0 7.667969 5.464844 14.242187 13.003906 15.644531 0 0 78.019532 20.296875 106.667969 33.707032 23.402344 10.960937 39.128907 31.148437 40.582031 55.917968l1.671876 101.058594h34.199218c11.824219 0 21.367188-9.660156 21.226563-21.480469zm0 0" fill="#eaab65"/><path d="m116.5 121.425781h-11.136719c-4.03125 0-7.746093 1.363281-10.710937 3.652344-5.144532 3.976563-7.398438 10.664063-6.238282 17.0625l4.375 24.074219c3.390626 17.847656 23.738282 9.691406 23.738282 9.691406zm0 0" fill="#eaab65"/><path d="m292.359375 121.425781h11.132813c4.035156 0 7.75 1.363281 10.710937 3.652344 5.144531 3.976563 7.402344 10.664063 6.238281 17.0625l-4.371094 24.074219c-3.394531 17.847656-23.738281 9.691406-23.738281 9.691406zm0 0" fill="#fcc18b"/><path d="m266.144531 29.921875c-14.480469-13.386719-34.832031-25.070313-61.714843-25.394531-26.886719.324218-47.238282 12.007812-61.71875 25.394531-18.464844 17.078125-28.472657 42.433594-28.472657 68.605469l.027344 91.246094c0 43.136718 56.070313 87.8125 90.164063 87.8125s90.164062-44.675782 90.164062-87.8125l.023438-91.246094c0-26.167969-10.003907-51.527344-28.472657-68.605469zm0 0" fill="#fcc18b"/><path d="m266.144531 29.921875c-14.480469-13.386719-34.832031-25.070313-61.714843-25.394531-10.140626.121094-19.351563 1.863281-27.667969 4.699218 13.730469 4.683594 25.027343 12.359376 34.046875 20.695313 18.46875 17.078125 28.472656 42.4375 28.472656 68.605469l-.023438 91.246094c0 32.640624-32.101562 66.15625-62.496093 80.535156 9.773437 4.625 19.371093 7.277344 27.667969 7.277344 34.09375 0 90.164062-44.675782 90.164062-87.8125l.023438-91.246094c0-26.167969-10.003907-51.527344-28.472657-68.605469zm0 0" fill="#eaab65"/><path d="m260.21875 0h-111.582031c-28.710938 0-51.984375 23.273438-51.984375 51.984375v71.730469s14.316406-.324219 23.515625 8.78125c1.914062 1.894531 5.167969.511718 5.167969-2.183594v-56.222656c0-12.6875 10.289062-22.976563 22.980468-22.976563h20.878906c5.476563 0 10.785157 1.894531 15.023438 5.359375l2.046875 1.671875c5.125 4.191407 11.542969 6.480469 18.164063 6.480469 6.621093 0 13.035156-2.289062 18.160156-6.480469l2.050781-1.671875c4.238281-3.464844 9.546875-5.359375 15.023437-5.359375h20.878907c12.6875 0 22.976562 10.289063 22.976562 22.976563v56.222656c0 2.695312 3.257813 4.078125 5.171875 2.183594 9.199219-9.105469 23.511719-8.78125 23.511719-8.78125v-71.730469c0-28.710937-23.273437-51.984375-51.984375-51.984375zm0 0" fill="#426175"/><path d="m260.21875 0h-19.300781c9.714843 11.433594 15.804687 28.605469 15.960937 51.113281h3.664063c12.6875 0 22.976562 10.289063 22.976562 22.980469v56.21875c0 2.695312 3.257813 4.082031 5.171875 2.183594 9.199219-9.101563 23.511719-8.777344 23.511719-8.777344v-71.734375c0-28.710937-23.273437-51.984375-51.984375-51.984375zm0 0" fill="#2c4456"/><path d="m366.511719 328.28125c-16.671875-7.804688-50.058594-17.941406-75.0625-25.050781l-5.40625 2.046875c-52.585938 19.917968-110.640625 19.917968-163.226563 0l-5.410156-2.046875c-25.003906 7.109375-58.386719 17.246093-75.058594 25.050781-23.40625 10.957031-39.132812 31.144531-40.585937 55.914062l-1.761719 106.324219c-.140625 11.820313 9.402344 21.480469 21.226562 21.480469h366.402344c11.824219 0 21.367188-9.660156 21.226563-21.480469l-1.761719-106.324219c-1.453125-24.769531-17.179688-44.957031-40.582031-55.914062zm0 0" fill="#33bca5"/><path d="m334.511719 485.355469h-264.039063c-8.03125 0-14.695312-6.207031-15.269531-14.21875l-10.796875-151.515625c-.632812-8.859375 6.382812-16.394532 15.265625-16.394532h285.640625c8.878906 0 15.898438 7.535157 15.265625 16.394532l-10.796875 151.519531c-.574219 8.007813-7.238281 14.214844-15.269531 14.214844zm0 0" fill="#f2f2f2"/><path d="m345.3125 303.230469h-55.742188c8.882813 0 15.898438 7.535156 15.265626 16.394531l-11.8125 165.730469h41.488281c8.03125 0 14.695312-6.207031 15.269531-14.21875l10.796875-151.515625c.632813-8.855469-6.382813-16.390625-15.265625-16.390625zm0 0" fill="#cdd6df"/><path d="m353.449219 512h-298.039063c-7.355468 0-13.320312-5.964844-13.320312-13.320312 0-7.359376 5.964844-13.320313 13.320312-13.320313h298.039063c7.355469 0 13.320312 5.960937 13.320312 13.320313 0 7.355468-5.964843 13.320312-13.320312 13.320312zm0 0" fill="#cdd6df"/><path d="m225.75 400.402344c0 11.777344-9.546875 21.320312-21.320312 21.320312-11.777344 0-21.320313-9.542968-21.320313-21.320312 0-11.773438 9.542969-21.316406 21.320313-21.316406 11.773437 0 21.320312 9.542968 21.320312 21.316406zm0 0" fill="#fff"/>
                </svg>
            </div>
        </div>
    </div>
    <!-- end welcome -->

    <!-- Technologies -->
    <div class="container my-10 py-6">
        <div class="text-center py-3"><span class="text-3xl antialiased font-semibold">Technologies</span></div>
        <div class="flex flex-row flex-wrap gap-6 text-center">
            @foreach ($technologies as $item)
                <div class="flex flex-col flex-grow">
                    <div class="flex justify-center">{!!$item->image!!}</div>
                    <div>{{$item->title}}</div>
                </div>
            @endforeach   
        </div>
    </div>
    <!-- end Technologies -->

    <!-- Projects -->
    <div class="container my-10 py-6">
        <div class="text-center py-3">
            <span class="text-3xl antialiased font-semibold">Projects</span><br>
            <span class="text-xl antialiased font-medim">Some projects where I can participate also you can view all the projects <a href="{{route('projects')}}">here</a></span>
        </div>
        <div class="flex flex-row flex-wrap gap-6 text-center">
            @foreach ($posts as $item)
                <div class="flex flex-col flex-grow">
                    <div class="flex justify-center">
                        <img class="w-32" src="{{asset($item->image)}}" alt="">
                    </div>
                    <div class="pt-4">{{$item->title}}</div>
                </div>       
            @endforeach   
        </div>
    </div>
    <!-- end Projects -->
   
@endsection


