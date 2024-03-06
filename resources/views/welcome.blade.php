<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biblioteca</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/src/output.css') }}">
</head>
<style>
    .king{
        background-color: #325B87;
    }
</style>

<body class="gap-0">
    <div class="relative sm:flex sm:justify-center sm:items-center king shadow-md p-3">
        <div class="flex px-3">
            <p class="font-bold text-white">SGE</p>
            <span class="bg-white mx-1 w-1"></span>
            <p class="font-bold text-white">UT</p>
        </div>
    </div>
    <section class="">
        <div class="p-5">
            <div class="relative">
                <p class="font-bold text-lg">
                    Control de libros del alumno
                </p>
                <hr class="border-2">
            </div>
            <div class="flex flex-col lg:flex-row justify-between px-4 py-4 w-full">
                <div class="relative">
                    <a type="button" href="{{ url('datos') }}" class="king p-2 mb-6 rounded-full text-white">Colaboracion compartida</a>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6">
                        <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                        <div class="relative mx-2 my-2">
                            <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                            <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-xl bg-slate-200 p-3">
                        <p class="font-semibold">Colaboradores</p>
                        <div class="relative mx-2 my-2">
                            <select name="select" id="select" class="w-full rounded-md font-bold p-1">
                                <option value="">Colaboradores</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="px-2 lg:px-20 py-10">
                <hr class="border-2">
                <div class="flex flex-col">
                    <p class="font-bold text-2xl mt-4 mb-6">Detalles del Libro</p>
                    <div class="p-2">
                        <p class="font-semibold mb-6">Titulo del libro</p>
                        <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6  w-full lg:w-2/5">
                            <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                            <div class="relative mx-2 my-2">
                                <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                                <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                            </div>

                        </div>
                        <p class="font-semibold mb-6">Autor del libro</p>
                        <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6  w-full">
                            <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                            <div class="relative mx-2 my-2">
                                <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                                <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                            </div>

                        </div>
                        <p class="font-semibold mb-6">Carrera</p>
                        <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6  w-full">
                            <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                            <div class="relative mx-2 my-2">
                                <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                                <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>