<x-mail::message>
{{-- No se debe indentar --}}
{{-- Equivalente a H1 --}}
# Correo por aprobar

{{-- Equivalente a un p --}}
<x-mail::panel>
Se ha creado un nuevo post que necesita ser aprobado.
</x-mail::panel>

{{-- Equivalente a un a --}}
<x-mail::button :url="route('posts.show', $post)" color="success">
Click para probar
</x-mail::button>
</x-mail::message>