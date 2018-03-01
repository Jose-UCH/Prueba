<div class="container">
  <div class="col-md-8 offset-md2">
    <h2>Empleado : {{ $employee->name }}</h2>
    <hr>

    <table class="table table-bordered table-striped">
      <tbody>
        <tr>
          <th scope="row">Dirección</th><td>{{$employee->address}}</td>
        </tr>
        <tr>
          <th scope="row">Email</th><td>{{$employee->email}}</td>
        </tr>
        <tr>
          <th scope="row">Teléfono</th><td>{{$employee->phone}}</td>
        </tr>
        <!-- <tr>
          <th scope="row">Género</th><td>{{ ($employee->gender == 'male')? 'Masculino' : 'Femenino' }}</td>
        </tr> -->
        <!-- <tr>
          <th scope="row">Edad</th><td>{{$employee->age}}</td>
        </tr> -->
        <tr>
          <th scope="row">Posición</th><td>{{$employee->position}}</td>
        </tr>
        <tr>
          <th scope="row">Salario</th><td>{{$employee->salary}}</td>
        </tr>
      <!--   <tr>
          <th scope="row">En línea</th><td>{{ ($employee->isOnline == 1)? 'SI' : 'NO' }}</td>
        </tr> -->
      </tbody>
    </table>

    <br><br>

    <h2>Habilidades</h2>
    <hr>

    <table class="table table-bordered table-striped">
      <tbody>
        @foreach ($employee->skills as $value)
          <tr>
            <td>{{ $value->skill }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <a class="btn btn-xs btn-info" href="javascript:ajaxLoad('{{ url('employees') }}')">Regresar</a>
  </div>
</div>