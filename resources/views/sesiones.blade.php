<x-app-layout>
    <x-slot name="header">
        <h3 class="mb-1 text-xl font-bold text-center">SESIONES PASO POR middleware</h3>
        Fecha de ultima sesion:
        {{
            Auth::user()->ultimaSesion
        }}
    </x-slot>
</x-app-layout>
