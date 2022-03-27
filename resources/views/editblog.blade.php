<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="alert alert-dark" role="alert">
                Edit Your Blog
            </div>
        </h2>
    </x-slot>
    <div class = "py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class = "px-6 py-4 text-5xl text-white font-extrabold">EDIT</h1>
                <form method="POST" class="bg-white w-full max-w-sm shadow-md rounded pr-6 pl-8 pt-6 pb-8">
                    @csrf
                    @method('PUT')
                    {{-- SPOOF --}}
                    @if(session()->has('status'))
                    <div  class="bg-indigo-900 text-center py-4 lg:px-4" style = "background-color :rgb(11, 47, 63); margin : 2px 10px; border-radius : 15px;">
                        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert" style = "background-color :rgb(21, 98, 131); color : white; margin : 2px 15px; border-radius : 15px;">
                          <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Great ! </span>
                          <span class="font-semibold mr-2 text-left flex-auto">{{session('status')}}</span>
                          <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                        </div>
                      </div>
                    
                    @endif
                    <div class="px-6 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                            Your Blog Title
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter Title" name = "title" value = "{{$post->title}}" required>
                    </div>
                    <div class="px-6 mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                            Your Blog Content
                        </label>
                        <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="body" type="text" placeholder="Enter Content" name = "body"  required>{{$post->body}}</textarea>
                    </div>
                    <div class=" px-6 py-4 flex items-center justify-between">
                        <input style = "background-color : rgb(10, 28, 36); cursor : pointer;" class="shadow focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" name = "submit" value = "Update Blog" />
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    
</x-app-layout>
