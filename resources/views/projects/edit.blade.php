@if ($errors->any())
  <div class="alert alert-danger">
    <h4>Correggi i seguenti errori per proseguire: </h4>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif