<x-app-layout>
    <x-slot name="header">
    <!---------------------------------------------------------------------->
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vista Administrador') }}
        </h1>

        

        <h3>

        </h3>
    <!---------------------------------------------------------------------->
    </x-slot>

    <div style="background-color:coral">
    <div>
        <h2>Crear Tarea</h2>
    </div>
    <div>
        <a href="{{route('panelmascotas.index')}}">Volver</a>
    </div>


    <form action="" method="">
        <div>
            <label for="">Nombre de la mascota</label>
            <input type="text" class="form-control">
        </div>
        <div>
            <label for="">Estado</label>
            <select name="" id="">
                <option value="En adopción">En adopción</option>
                <option value="Adoptado">Adoptado</option>
                <option value="En tratamiento">En tratamiento</option>
            </select>
        </div>
        <div>
            <label for="">Tipo</label>
            <input type="text" class="form-control">
            <label for="">Raza</label>
            <input type="text" class="form-control">
        </div>
        <div>
            <label for="">Edad</label>
            <input type="number">
            <label for="">Fecha de recojo</label>
            <input type="date" class="form-control">
        </div>
        <div>
            <label for="">Imagen</label>
            <input type="text" class="form-control">
        </div>
        <div>
            <label for="">Descripción</label>
            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <br>
        <div>
            <button type="submit"><strong>CREAR</strong></button>
        </div>
    </form>
    </div>

</x-app-layout>
