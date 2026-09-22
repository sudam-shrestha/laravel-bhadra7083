<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-semibold">Admission Create</h1>
                <a href="{{ route('admission.index') }}" class="bg-indigo-700 text-white px-4 py-2 rounded-full">go
                    back</a>
            </div>

            <form action="{{ route('admission.store') }}" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name">Enter Your Name</label>
                        <input type="text" name="name" id="name" class="border w-full py-1 px-1 rounded">
                    </div>

                    <div>
                        <label for="email">Enter Your Email</label>
                        <input type="email" name="email" id="email" class="border w-full py-1 px-1 rounded">
                    </div>

                    <div>
                        <label for="phone">Enter Your Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="border w-full py-1 px-1 rounded">
                    </div>

                    <div>
                        <label for="course">Select Course</label>
                        <select name="course" id="course" class="border w-full py-1 px-1 rounded">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-md">Save data</button>
            </form>
        </div>
    </section>
</x-layout>
