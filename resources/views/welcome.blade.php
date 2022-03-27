

<x-app-layout>
    <x-slot name="header">
        <marquee scrollamount="15"  onmouseover="this.stop();" onmouseout="this.start();" style = "width : 100%" direction = "left" loop="">👋 Welcome to best blog website!😊 Here you can add you blog easily as pancake and share your views to the whole world! So what are you waiting for! Make a blog and explore your dream..</marquee>
    </x-slot>

    <div class="py-6">
        @if(session()->has('status'))
            <div  class="bg-indigo-900 text-center py-4 lg:px-4" style = "position : relative; background-color :rgb(11, 47, 63); margin : 2px 10px; border-radius : 15px;">
                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert" style = "background-color :rgb(21, 98, 131); color : white; margin : 2px 15px; border-radius : 15px;">
                    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Great ! </span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{session('status')}}</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                </div>
                <form style = "position: absolute; top : 40%; right : 30px; color : white; cursor : pointer;">
                    <input type = "submit" value = "X">
                </form>
            </div> 
         @endif
         
         <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style = "object-fit : cover" src="{{URL('assets/banner1.png')}}" class="d-block w-100 h-75" alt="...">
              </div>
              <div class="carousel-item">
                <img style = "object-fit : cover" src="{{URL('assets/banner2.png')}}" class="d-block w-100 h-75" alt="...">
              </div>
              <div class="carousel-item">
                <img style = "object-fit : cover" src="{{URL('assets/banner3.png')}}" class="d-block w-100 h-75" alt="...">
              </div>
              <div class="carousel-item">
                <img style = "object-fit : cover" src="{{URL('assets/banner4.png')}}" class="d-block w-100 h-75" alt="...">
              </div>
              <div class="carousel-item">
                <img style = "object-fit : cover" src="{{URL('assets/banner5.png')}}" class="d-block w-100 h-75" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="alert alert-primary" role="alert">
            <marquee behavior="alternate" scrollamount="15"  onmouseover="this.stop();" onmouseout="this.start();" style = "width : 100%" direction = "left" loop="">Explore the timeline of all latest blogs !</marquee>
        </div>
       

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 " style = "margin : 20px 0px">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-full" style = "border-radius: 15px;">
                <h4 class = "px-6 py-4">Timeline</h4>
                <div class="bg-white border-b border-gray-200" style = "display:flex; flex-direction:row; flex-wrap:wrap; justify-content:space-evenly; align-items:center; ">
                    @foreach($posts as $post)
                    <a href="{{url('/blog/view', $post->id)}}">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg" style = "position:relative; margin:15px 10px; cursor: pointer; width : 350px;">
                        <div style = "position : absolute; background-color : white; padding : 5px 10px; border-bottom-right-radius : 10px; "><p class = "text-sm">Author - <span style ="color : rgb(50, 127, 199)">{{$post->user->name}}</span></p></div>
                        <img style = "object-fit:cover; width: 100%; height:200px" src="https://source.unsplash.com/1600x900?{{$post->title}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                          <div class="text-gray-600 text-sm" style = "width : 100%">
                            {{
                                substr($post->body,0,180);
                            }}......
                          </div>
                        </div>
                        <div class="px-6 py-6 ">
                        </div>
                      </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class = "w-1/2 mt-6 container mx-auto">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
