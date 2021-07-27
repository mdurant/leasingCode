@extends('errors.header_error')
    <body class="bg-white">
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="img-fluid p-4" src="assets/img/illustrations/503-error-service-unavailable.svg" alt="" />
                                    <p class="lead">El servidor no puede atender temporalmente su solicitud debido a problemas de mantenimiento o de capacidad. Por favor, inténtelo de nuevo más tarde.</p>
                                    <a class="text-arrow-icon" href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                                        <i class="ms-0 me-1" data-feather="arrow-left"></i>
                                        Volver al Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            {{-- footer --}}
            @extends('errors.error_footer')
        </div>
        @extends('errors.footer_script')
    </body>
</html>
