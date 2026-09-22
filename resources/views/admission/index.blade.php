<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-semibold">Admissions</h1>
                <a href="{{route('admission.create')}}" class="bg-indigo-700 text-white px-4 py-2 rounded-full">new admission</a>
            </div>

            <table class="w-[100%] text-center">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-500 p-1">SN</th>
                        <th class="border border-gray-500 p-1">Title</th>
                        <th class="border border-gray-500 p-1">Price</th>
                        <th class="border border-gray-500 p-1">Action</th>
                    </tr>
                </thead>

                <tbody>
                    {{-- @foreach ($courses as $course)
                        <tr>
                            <td class="border border-gray-500 p-1">{{ $loop->iteration }}</td>
                            <td class="border border-gray-500 p-1">{{ $course->title }}</td>
                            <td class="border border-gray-500 p-1">Rs.{{ $course->price }}/-</td>
                            <td class="border border-gray-500 p-1 flex gap-2 justify-center">
                                <a href="/course/edit/{{ $course->id }}" class="text-indigo-700">Edit</a>
                                <form action="/course/delete/{{ $course->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
