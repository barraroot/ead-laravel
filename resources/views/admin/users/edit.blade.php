@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Edição de Usuários</h3>
            {!!
                form($form->add('insert', 'submit', [
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => 'Salvar'
                ]))
            !!}
        </div>
    </div>
</div>
@endsection
