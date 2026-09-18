<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-semibold">Course Create</h1>
                <a href="/course/index" class="bg-indigo-700 text-white px-4 py-2 rounded-full">go back</a>
            </div>

            <form action="/course/store" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name">Enter Course Name</label>
                        <input type="text" name="name" id="name" class="border w-full py-1 px-1 rounded">
                    </div>

                    <div>
                        <label for="price">Enter Course Price</label>
                        <input type="text" name="price" id="price" class="border w-full py-1 px-1 rounded">
                    </div>

                    <div class="col-span-2">
                        <label for="description">Enter Description</label>
                        <textarea name="description" id="description" class="border w-full" rows="6"></textarea>
                    </div>
                </div>

                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-md">Save data</button>
            </form>
        </div>
    </section>
</x-layout>
