<x-app-layout>

    <h5 class="mt-3">Gerenciar Categorias</h5>

    <a class="btn btn-success" href="/categoria/create">
        Inserir nova Categoria
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sapato</td>
                <td>
                    <a href="/categoria/1/edit" class="btn btn-warning">Alterar</a>
                    <a href="/categoria/1" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>