

@include('layouts.css')

<body id="page-top">
    <div id="wrapper">
  
        @include('layouts.navbar')
      
     
        <div id="content-wrapper" class="d-flex flex-column">
       
            <div id="content">
               
                @include('layouts.header')
                
                <div class="container-fluid">
                    @yield('content')
                </div>
              
            </div>
         
            @include('layouts.footer')
          
        </div>
    </div>

    {{-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> --}}
   
    @include('layouts.js')

