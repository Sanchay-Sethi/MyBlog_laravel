<x-app-layout>
    <x-slot name="header">

            @auth
                @if(Auth::user()->id===$post->user->id)
                    <a href="{{url('/blog/edit', $post->id)}}" class = "bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-black text-sm py-1 px-2 rounded">EDIT</a>
                    <a href="{{url('/blog/delete', $post->id)}}" class = "bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-red-600 text-sm py-1 px-2 rounded">DELETE</a>
                @endif
                @if(Auth::user()->id!=$post->user->id)
                    <marquee scrollamount="10" behavior=alternate onmouseover="this.stop();" onmouseout="this.start();" style = "width : 100%" direction = "left" loop="">Join our blog web, browse and add unlimuted blogs. Share your views to the world and explore your dream.</marquee>
                @endif
            @else
                <marquee scrollamount="10" behavior=alternate onmouseover="this.stop();" onmouseout="this.start();" style = "width : 100%" direction = "left" loop="">Login or register first to post whatever you want and share your creativity to the world.</marquee>
            @endauth
    </x-slot>
    <div class = "w-full h-24">
        <img src="https://source.unsplash.com/1600x400?{{$post->title}}" alt="">
    </div>
    <div class = "w-full" style = "display:flex; justify-content: center; align-items: center; flex-direction: column;">
        <h1 style = "font-size: 3rem; margin : 20px 0px;">~ {{$post->title}} ~</h1>
        <hr style = "width :70px; border-top: 2px solid rgb(11, 177, 253);" >
        <div class="text-gray-700 text-lg" style = " width :70%; margin : 50px 0px; text-align: justify;">
            {{$post->body}}
        </div>
        
    </div>
    <center>
    <p style = "width : 70%; text-align : right; ">
        Written by <span style = "color:rgb(255, 34, 119)">{{$post->user->name}}</span>
    </p>
    </center>
    <br>
    <br>
    <br>
    <br>
    
</x-app-layout>
