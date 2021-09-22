<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> {{ $branch ?? "main" }}
    </div>
    <strong>Copyright &copy; {{ now()->format("d/m/Y") }} <a href="https://mobiconectividades.com.br">{{ env("APP_NAME") }}</a>.</strong> Todos os diretos reservados.
</footer>
