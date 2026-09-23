<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-semibold">Admissions</h1>
                <a href="{{ route('admission.create') }}" class="bg-indigo-700 text-white px-4 py-2 rounded-full">new
                    admission</a>
            </div>

            <table class="w-[100%] text-center">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-500 p-1">SN</th>
                        <th class="border border-gray-500 p-1">Name</th>
                        <th class="border border-gray-500 p-1">Email</th>
                        <th class="border border-gray-500 p-1">Phone</th>
                        <th class="border border-gray-500 p-1">Course</th>
                        <th class="border border-gray-500 p-1">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($admissions as $admission)
                        <tr>
                            <td class="border border-gray-500 p-1">{{ $loop->iteration }}</td>
                            <td class="border border-gray-500 p-1">{{ $admission->name }}</td>
                            <td class="border border-gray-500 p-1">{{ $admission->email }}</td>
                            <td class="border border-gray-500 p-1">{{ $admission->phone }}</td>
                            <td class="border border-gray-500 p-1">{{ $admission->course->title }},
                                Rs.{{ $admission->course->price }}/-</td>
                            <td class="border border-gray-500 p-1 flex gap-2 justify-center">
                                <a href="{{route('admission.edit', $admission->id)}}" class="text-indigo-700">Edit</a>
                                <form action="{{route('admission.destroy', $admission->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
