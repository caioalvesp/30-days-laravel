<!-- Crie um novo componente Blade chamado AlertComponent. Este componente deve aceitar uma propriedade type (por exemplo, 'success', 'error', 'info'). Usando as diretivas Blade if e else, faça com que o componente renderize um <div> com uma classe CSS diferente para cada tipo (ex: alert-success, alert-error). Se nenhum type for fornecido, ele deve renderizar um tipo padrão (ex: alert-info), similar à forma como o NavLink se comporta por padrão -->

@props(['type' => 'info'])

@if ($type === 'success')
  <div class="bg-green-400">
        <p>{{ $slot }}</p>
  </div>
@elseif ($type === 'error')
    <div class="bg-red-400">
        <p>{{ $slot }}</p>
    </div>
@else
    <div class="bg-blue-400">
        <p>{{ $slot }}</p>
    </div>
@endif
