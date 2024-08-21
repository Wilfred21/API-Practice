<!DOCTYPE html>
<html>

<head>
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center">Usuarios </h1>

    <button class="btn btn-primary hover-elevate-up btn-sm" data-bs-toggle="modal"
        data-bs-target="#modalForm">

        Crear un Usuario

    </button>


    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <table class="table table-striped table-hover">
        <thead>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Correo electronico</th>
            <th class="text-center">Telefono</th>
            <th class="text-center">Puesto de trabajo</th>
        </thead>
        <tbody class="fw-semibold text-gray-600">

            @foreach ($users as $us)
            <tr>
                <td class="text-center">
                    {{ $us->name }}
                </td>
                <td class="text-center">
                    {{ $us->lastName }}
                </td>
                <td class="text-center">
                    {{ $us->email }}
                </td>
                <td class="text-center">
                    {{ $us->phone }}
                </td>
                <td class="text-center">
                    {{ $us->workstation }}
                </td>


            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <h6 class="mb-4" id="title">Crear un usuario</h6>


                    <form action="{{ route('rutCtrateUser') }}" method="post">
                        @csrf

                        <input type="hidden" value="0" name="userId" id="userId">

                        <div class="row">
                            <div class="col-md-6 mx-auto mb-3">


                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtName" name="txtName"

                                        placeholder="Maria" required />
                                    <label for="name">Nombre</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtLasName" name="txtLasName"

                                        placeholder="Maria" required />
                                    <label for="name">Apellido</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtUserEmail" name="txtUserEmail"

                                        placeholder="Maria" required />
                                    <label for="name">Correo</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtPhone" name="txtPhone"

                                        placeholder="Maria" required />
                                    <label for="name">Telefono</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtPassword" name="txtPassword"

                                        placeholder="Maria" required />
                                    <label for="name">Contraseña</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtWorkStation" name="txtWorkStation"

                                        placeholder="Maria" required />
                                    <label for="name">Puesto</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="txtStation" name="txtStation"

                                        placeholder="Maria" required />
                                    <label for="name">Estado</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-success mx-2" id="btn-form">Guardar</button>
                            <button type="button" class="btn btn-light mx-2" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>