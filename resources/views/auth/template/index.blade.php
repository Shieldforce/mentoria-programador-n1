<!DOCTYPE html>
<html lang="pt-BR">
    @includeIf("$routeAmbient.template.head")
    <body class="hold-transition login-page background-access">
        @yield("content")
        @includeIf("$routeAmbient.template.javascript")
    </body>
</html>
