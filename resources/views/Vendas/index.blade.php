@extends('TemplateAdmin.index')

@section('contents')
<h1 class="h3 mb-4 text-gray-800">Marca de produtos</h1>
<div class="card">
    <div class="card-header"> 
        Lista de marcas
    </div>
    <div class="card-body"> 
        <a href='/marca/novo' class="btn btn-success">
            Novo
        </a>
    
        <table table class="table table-bordered dataTable">
            <thead>
                <td>ID</td>
                <td>Nome</td>
                <td>Nome Fantasia</td>
                <td>Opções</td>
            </thead>
            <tbody>
                
            </tbody>
        </table>    
    </div>
</div>
@endsection