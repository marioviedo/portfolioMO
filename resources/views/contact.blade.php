@extends('layouts.template')

@section('title', 'Contact')

@section('content')
<div class="container px-2 mx-auto py-4">
    @if (isset($validate))
        <div class="flex bg-green-200 dark:bg-green-600 mb-4">
            <div class="w-16 bg-green">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M468.907 214.604c-11.423 0-20.682 9.26-20.682 20.682v20.831c-.031 54.338-21.221 105.412-59.666 143.812-38.417 38.372-89.467 59.5-143.761 59.5h-.12C132.506 459.365 41.3 368.056 41.364 255.883c.031-54.337 21.221-105.411 59.667-143.813 38.417-38.372 89.468-59.5 143.761-59.5h.12c28.672.016 56.49 5.942 82.68 17.611 10.436 4.65 22.659-.041 27.309-10.474 4.648-10.433-.04-22.659-10.474-27.309-31.516-14.043-64.989-21.173-99.492-21.192h-.144c-65.329 0-126.767 25.428-172.993 71.6C25.536 129.014.038 190.473 0 255.861c-.037 65.386 25.389 126.874 71.599 173.136 46.21 46.262 107.668 71.76 173.055 71.798h.144c65.329 0 126.767-25.427 172.993-71.6 46.262-46.209 71.76-107.668 71.798-173.066v-20.842c0-11.423-9.259-20.683-20.682-20.683z"/><path d="M505.942 39.803c-8.077-8.076-21.172-8.076-29.249 0L244.794 271.701l-52.609-52.609c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.077-8.077 21.172 0 29.249l67.234 67.234a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058L505.942 69.052c8.077-8.077 8.077-21.172 0-29.249z"/></svg>
                </div>
            </div>
            <div class="w-auto text-grey-darker items-center p-4">
                <span class="text-lg font-bold pb-4">
                    Message sent!
                </span>
                <p class="leading-tight">
                    The message has been sent correctly
                </p>
            </div>
        </div>
    @endif
    <div class="px-2 text-lg text-center">
        <p>Contact me through my professional social networks:</p>
    </div>  
    <!-- redes sociales zone -->      
    <div class="container px-2 mx-auto flex flex-row py-4 gap-5 justify-center">
        <!-- Whatsapp button -->                                    
        <div>
            <a href="https://api.whatsapp.com/send?phone=527713004765" target="_blank">
                <svg class="w-16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 418.135 418.135" style="enable-background:new 0 0 418.135 418.135;" xml:space="preserve">
                    <path style="fill:#7AD06D;" d="M198.929,0.242C88.5,5.5,1.356,97.466,1.691,208.02c0.102,33.672,8.231,65.454,22.571,93.536
                        L2.245,408.429c-1.191,5.781,4.023,10.843,9.766,9.483l104.723-24.811c26.905,13.402,57.125,21.143,89.108,21.631
                        c112.869,1.724,206.982-87.897,210.5-200.724C420.113,93.065,320.295-5.538,198.929,0.242z M323.886,322.197
                        c-30.669,30.669-71.446,47.559-114.818,47.559c-25.396,0-49.71-5.698-72.269-16.935l-14.584-7.265l-64.206,15.212l13.515-65.607
                        l-7.185-14.07c-11.711-22.935-17.649-47.736-17.649-73.713c0-43.373,16.89-84.149,47.559-114.819
                        c30.395-30.395,71.837-47.56,114.822-47.56C252.443,45,293.218,61.89,323.887,92.558c30.669,30.669,47.559,71.445,47.56,114.817
                        C371.446,250.361,354.281,291.803,323.886,322.197z"/>
                    <path style="fill:#7AD06D;" d="M309.712,252.351l-40.169-11.534c-5.281-1.516-10.968-0.018-14.816,3.903l-9.823,10.008
                        c-4.142,4.22-10.427,5.576-15.909,3.358c-19.002-7.69-58.974-43.23-69.182-61.007c-2.945-5.128-2.458-11.539,1.158-16.218
                        l8.576-11.095c3.36-4.347,4.069-10.185,1.847-15.21l-16.9-38.223c-4.048-9.155-15.747-11.82-23.39-5.356
                        c-11.211,9.482-24.513,23.891-26.13,39.854c-2.851,28.144,9.219,63.622,54.862,106.222c52.73,49.215,94.956,55.717,122.449,49.057
                        c15.594-3.777,28.056-18.919,35.921-31.317C323.568,266.34,319.334,255.114,309.712,252.351z"/>
                </svg>
            </a>
        </div>                                  
        <!-- end Whatsapp button -->
        <!-- LinkedIn button -->                                    
        <div>
            <a href="https://www.linkedin.com/in/mario-oviedo-ba%C3%B1os-358331201/" target="_blank">
                <svg class="w-16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 382 382" style="enable-background:new 0 0 382 382;" xml:space="preserve">
                    <path class="" style="fill:#0077B7;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
                        C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
                        H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
                        c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
                        s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
                        c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
                        c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
                        c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
                        L341.91,330.654L341.91,330.654z"/>
                </svg>
            </a>
        </div>                                  
        <!-- end LinkedIn button -->

        <!-- Instagram button -->                                    
        <div>
            <a href="https://github.com/marioviedo" target="_blank">
                <svg class="w-16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M255.968,5.329C114.624,5.329,0,120.401,0,262.353c0,113.536,73.344,209.856,175.104,243.872
                        c12.8,2.368,17.472-5.568,17.472-12.384c0-6.112-0.224-22.272-0.352-43.712c-71.2,15.52-86.24-34.464-86.24-34.464
                        c-11.616-29.696-28.416-37.6-28.416-37.6c-23.264-15.936,1.728-15.616,1.728-15.616c25.696,1.824,39.2,26.496,39.2,26.496
                        c22.848,39.264,59.936,27.936,74.528,21.344c2.304-16.608,8.928-27.936,16.256-34.368
                        c-56.832-6.496-116.608-28.544-116.608-127.008c0-28.064,9.984-51.008,26.368-68.992c-2.656-6.496-11.424-32.64,2.496-68
                        c0,0,21.504-6.912,70.4,26.336c20.416-5.696,42.304-8.544,64.096-8.64c21.728,0.128,43.648,2.944,64.096,8.672
                        c48.864-33.248,70.336-26.336,70.336-26.336c13.952,35.392,5.184,61.504,2.56,68c16.416,17.984,26.304,40.928,26.304,68.992
                        c0,98.72-59.84,120.448-116.864,126.816c9.184,7.936,17.376,23.616,17.376,47.584c0,34.368-0.32,62.08-0.32,70.496
                        c0,6.88,4.608,14.88,17.6,12.352C438.72,472.145,512,375.857,512,262.353C512,120.401,397.376,5.329,255.968,5.329z"/>
                </svg>
            </a>
        </div>                                 
        <!-- end Instagram button -->
    </div>    
    <!-- end redes sociales zone -->
    <div class="container px-2 text-lg text-center">
        <p>Also you can send an email to: <span class="text-red-600 px-1">contact@deepzone.com.mx</span></p>
        <p>or fills the following form and I'm going to contact you</p>            
    </div>  
    <!-- form -->
    <div class="container px-2 mx-auto flex justify-center py-4">
        <div class="rounded-lg border-2 border-gray-700">
            <form class="p-6 text-lg" action="{{route('contact.create')}}" method="post">
                @csrf
                <div class="flex justify-center gap-3 pb-4">
                    <label class="flex items-center" for="name">Name:</label>
                    <input class="border-2 border-gray-700 py-2 px-3 text-black rounded-md flex-grow" type="text" id="name" name="name">
                </div>
                <div class="flex gap-3 pb-4">
                    <label class="flex items-center" for="email">Email: </label>
                    <input class="border-2 border-gray-700 py-2 px-3 text-black rounded-md flex-grow" type="email" id="email" name="email">
                </div>
                <div class="flex gap-3 pb-4">
                    <label class="flex items-center" for="phone">Phone number: </label>
                    <input class="border-2 border-gray-700 py-2 px-3 text-black rounded-md flex-grow" type="number" id="phone_number" name="phone_number">
                </div>
                <div class="flex flex-col gap-3 pb-4">
                    <label class="flex items-center" for="message">Message: </label>
                    <textarea class="border-2 border-gray-700 py-2 px-3 rounded-md shadow-sm focus:outline-none text-black" name="message" id="message" cols="30" rows="4" maxlength="210"></textarea>
                </div>
                <div class="flex justify-center">
                    <div class="dark:text-white hover:text-white rounded-lg border-green-600 border-2 w-full text-center hover:bg-green-600">
                        <button class="p-2" type="submit">Sent</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end form -->   
</div>
@endsection