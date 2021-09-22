<!DOCTYPE html>
<html lang="pt-BR">
    @includeIf("auth.template.head")
    <body class="hold-transition login-page background-access">
        @yield("content")
        @includeIf("auth.template.javascript")
    </body>
</html>
