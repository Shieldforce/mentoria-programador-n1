<!DOCTYPE html>
<html lang="pt-BR">
    @includeIf("$routeAmbient.template.head")
    <body class="hold-transition sidebar-mini layout-footer-fixed">
        <div class="wrapper">
            @includeIf("$routeAmbient.template.navbar")
            @includeIf("$routeAmbient.template.sidebar-left")
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">

                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>{{ $routeBreadcrumbTitle }}</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route("panel.main.index") }}">Home</a></li>
                                    <li class="breadcrumb-item active">{{ $routeBreadcrumbTitle }}</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                @yield("content")
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @includeIf("$routeAmbient.template.footer")
            @includeIf("$routeAmbient.template.footer")
        </div>
        @includeIf("$routeAmbient.template.javascript")
    </body>
</html>
