<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-xl">Ini Adalah Halaman Home Page</h3>
  <form action="/logout" method="post">
    @csrf
    <button type="sumbit">logout</button>
  </form>
</x-layout>