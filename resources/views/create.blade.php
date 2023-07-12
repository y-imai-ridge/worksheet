<?php?>
<x-app-layout>
    <section class="text-gray-600 body-font relative">
    <form method="post" action="#">
        @csrf
    <div class="container px-5 py-24 mx-auto">
        
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full relative">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Name*</label>
                <input type="text" id="name" name="name" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
            </div>
            <br>

            <div class="p-2 w-full">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">gender*</label><br>
                <input type="radio" name="gender" value="0" {{old('gender') == 0 ? 'checked' : ''}} >male
                <input type="radio" name="gender" value="1" {{old('gender') == 1 ? 'checked' : ''}} >female
            </div>
            </div>
            
            <div class="p-2 w-full">
            <div class="relative">
                <label for="age" class="leading-7 text-sm text-gray-600">age</label><br>
                <select name="age">
                    <option value="">select your age</option>
                    <option value="1" {{old('age') == 1 ? 'selected' : ''}} >teen</option>
                    <option value="2" {{old('age') == 2 ? 'selected' : ''}} >20s</option>
                    <option value="3" {{old('age') == 3 ? 'selected' : ''}} >30s</option>
                    <option value="4" {{old('age') == 4 ? 'selected' : ''}} >40s</option>
                    <option value="5" {{old('age') == 5 ? 'selected' : ''}} >50s</option>
                    <option value="6" {{old('age') == 6 ? 'selected' : ''}} >over 60s</option>
                </select>
            </div>
            </div>

            <div class="p-2 w-full">
            <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email*</label>
                <input type="email" id="email" name="email" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>

            <div class="p-2 w-full">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">mail Newsletter</label><br>
                <p class="leading-7 text-sm text-gray-600">May we send mail newsletter?</p>
                <input type="checkbox" id="caution" name="caution" checked> accept receive mail newsletters
            </div>
            </div>

            <div class="p-2 w-full">
            <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            </div>
 
            <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Confirm</button>
            </div>
        
            </div>
        </div>
        </div>
    </div>
    </form>
    </section>
</x-app-layout>