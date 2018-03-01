<div class="container">

    <div class="row">
        <div class="col-sm-7">
          <h3>Lista de Empleados</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('employees')}}?search='+this.value)"
                       placeholder="Buscar Email" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('employees')}}?search='+$('#search').val())">
                            <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

          </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th style="vertical-align: middle">Email</th>
            <th style="vertical-align: middle">Posición</th>
            <th style="vertical-align: middle">Salario</th>
            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('employees/create')}}')"
                 class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> Nuevo Empleado</a>
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($employees as $employee)
          <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
            <td>
              <center>
                <a class="btn btn-info btn-xs" title="Detalle del Empleado"
                   href="javascript:ajaxLoad('{{url('employees/show/'.$employee->id)}}')"> Detalle
                </a>
              </center>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

        <ul class="pagination">
            {{ $employees->links() }}
        </ul>
</div>