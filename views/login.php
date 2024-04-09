<div class="min-w-screen min-h-screen bg-blue-100 content-center p-2">
    <form class="border border-2 border-neutral-400 rounded flex flex-col mx-auto p-4 w-full md:w-1/3 bg-neutral-200 text-white font-bold">
        <h4 class="text-center">Hondutech</h4>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <div class="justify-end flex w-full">
            <button class="btn-primary shadow-sky-900 w-full md:w-5/12 lg:w-1/3">Iniciar Sesión</button>
        </div>
        <div class="mt-2 text-end text-gray-500">
            <p id="forgotPassword" class="cursor-pointer">Olvidaste tu Contraseña?</p>
        </div>
    </form>
</div>