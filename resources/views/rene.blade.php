 @extends('layout') {{-- use the team layout --}}

@section('title', 'Rene Biography')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
  <table class="w-full border-collapse border border-gray-300 shadow-lg">
    <tr>
      <td rowspan="2" class="w-48 p-4">
        <img src="{{ asset('images/rene.jpg') }}" alt="My Photo" class="rounded-full shadow-md">
      </td>
      <th class="bg-blue-600 text-white text-lg p-3">My Biography</th>
    </tr>
    <tr>
      <td class="p-4">
        <ul class="list-disc list-inside text-gray-700">
          <li><strong>Name:</strong> Rene S. Garcia</li>
          <li><strong>Birth Date:</strong> March 29, 2004</li>
          <li><strong>Birth Place:</strong> Gabur, Tagudin, Ilocos Sur</li>
          <li><strong>Hobbies:</strong> Playing Online Games, Basketball, Watching Anime</li>
        </ul>
      </td>
    </tr>
    <tr>
      <th colspan="2" class="bg-blue-600 text-white text-lg p-3">About Me</th>
    </tr>
    <tr>
      <td colspan="2" class="p-4 text-gray-700">
        My name is Rene S. Garcia. I am 21 years old and a student at Ilocos Sur Polytechnic State College.
        My family lives a simple life. We go through good times and tough times, just like everyone else.
      </td>
    </tr>
    <tr>
      <th colspan="2" class="bg-blue-600 text-white text-lg p-3">Social Media</th>
    </tr>
    <tr>
      <td colspan="2" class="p-4">
        <p class="mb-2">Check me out on:</p>
        <ul class="list-disc list-inside text-blue-600">
          <li><a href="https://www.facebook.com/somerarene" target="_blank">Facebook</a></li>
          <li><a href="https://www.instagram.com/renxcia" target="_blank">Instagram</a></li>
          <li><a href="https://discord.com/users/1396721393860739213" target="_blank">Discord</a></li>
        </ul>
      </td>
    </tr>
  </table>

  <footer class="mt-6 text-center text-gray-500 text-sm">
    &copy; 2025 Rene S. Garcia. All rights reserved.
  </footer>
</div>
@endsection
