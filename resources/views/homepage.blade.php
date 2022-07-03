@extends('layouts.app')
@section('content')
<title>Home Page</title>
<x-swiper/>
<h1 class=" aureli papers text-4xl mt-12 font-bold text-center ">Featured Products</h1>
<x-featurescard/>
{{-- @if (!empty($items))
@foreach ($Item as $post)
<div style="box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1); gap-4">
    <div class=" bg-[#F6F7FB] w-56 h-64 ">
        <div class="space-x-4 pt-2 pl-2 text-blue-300">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                </svg>
            </button>
        </div>
        <button class="absolute mx-16 my-48 bg-green-500 text-white w-24 text-sm h-10">View Details</button>
        <img onclick="myFunction()" class="mx-auto py-10 " src="img\image1168.png" alt="hello">

    </div>
    <div class="text-center h-24 mt-4 ">
        <h1 class="text-[#FB2E86] font-bold">Chair</h1>
        <div class="flex gap-2 justify-center">
            <button class="rounded-full w-5 h-1 bg-orange-400"></button>
            <button class="rounded-full w-5 bg-pink-600"></button>
            <button class="rounded-full w-5 bg-blue-400"></button>
        </div>
        <p>{{$post->code}}</p>
        <p></p>
    </div>

</div>
@endforeach
@endif --}}
<h1 class=" aureli papers text-4xl mt-12 font-bold text-center ">Latest Products</h1>
<x-list/>
<x-latestproductsII/>
<h1 class="aureli papers text-4xl mt-20 font-bold text-center ">What Shopex Offer!</h1>
<x-shopex/>
<x-uniquebg/>
<h1 class="aureli papers text-4xl mt-12 font-bold text-center ">Trending Products</h1>
<x-trendingproducts/>
<x-trending2/>
@if (!empty($items))
@foreach ($Item as $post)
<div>
    <div>
        <div class="bg-[#F7F7F7] w-[270px] h-[236px] " style="box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1); "><img class="pl-[40px] pt-[46px] " src="img\image1171.png " alt=" "></div>
        <div class="bg-[#2F1AC4] w-[270px] h-[125px] grid text-center " style="background: #FFFFFF; box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1); ">
            <a class="papers font-bold text-lg pt-4 " href="# ">{{$post->name}}</a>
            <a class="papers " href="# ">$26.00 </a>
            <a class="eko " href="# "><s>$42.00 </s></a>
        </div>
    </div>
</div>
@endforeach
@endif
{{-- '@if(!empty($items))
@foreach ($Item as $post)

<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 justify-center mt-[39px] gap-10 xl:flex place-items-center mx-auto ">
    <div class="bg-[#FFF6FB] w-[420px] h-[270px] " style="box-shadow: 0px 8px 40px rgba(49, 32, 138, 0.05); ">
        <h1 class="aureli papers text-2xl font-bold pt-[34px] pl-6 ">23% off in all products</h1>
        <a class="underline colour pl-6 " href="# ">Shop Now</a>
        <img class="pl-[201px] -pt-10 " src="img\image1162.png " alt=" ">
    </div>
    <div class="bg-[#EEEFFB] w-[420px] h-[270px] " style="box-shadow: 0px 8px 40px rgba(49, 32, 138, 0.05); ">
        <h1 class="aureli papers text-2xl font-bold pt-[34px] pl-6 ">23% off in all products</h1>
        <a class="underline colour pl-6 " href="# ">View Collection</a>
        <img class="pl-[102px] pt-4 " src="img\image1161.png " alt=" ">
    </div>
    <div class="space-y-4">
        <div class="flex ">
            <div class="w-[107px] h-[77px] bg-[#F5F6F8] ">
                <img class="px-5 " src="img\image30.png " alt=" ">
            </div>
            <div>
                <a href="# " class="aureli papers text-base font-bold ">Executive Seat chair</a>
                <p class="papers line-through ">{{$post->code}}</p>
            </div>
        </div>
        <div class="flex ">
            <div class="w-[107px] h-[77px] bg-[#F5F6F8] ">
                <img class="px-5 " src="img\image19.png " alt=" ">
            </div>
            <div>
                <a href="# " class="aureli papers text-base font-bold ">Executive Seat chair</a>
                <p class="papers line-through ">$32.00</p>
            </div>
        </div>
        <div class="flex ">
            <div class="w-[107px] h-[77px] bg-[#F5F6F8] ">
                <img class="px-5 " src="img\image28.png " alt=" ">
            </div>
            <div>
                <a href="# " class="aureli papers text-base font-bold ">Executive Seat chair</a>
                <p class="papers line-through ">$32.00</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif' --}}
<h1 class="aureli papers text-4xl mt-12 font-bold text-center ">Discount Items</h1>
<div>
    <ul class="mt-6 text-center sm:flex justify-center gap-12 papers ">
        <li>
            <a class="hover:text-pink-500 hover:underline " href="# ">Wood Chair</a>
        </li>
        <li>
            <a class="hover:text-pink-500 hover:underline " href="# ">Plastic Chair</a>
        </li>
        <li>
            <a class="hover:text-pink-500 hover:underline " href="# ">Sofa Colletion</a>
        </li>
    </ul>
</div>
<x-discountitems/>
<h1 class="aureli papers text-4xl mt-12 font-bold text-center ">Top Categories</h1>
<x-categories2/>
<x-newslater/>
<img class="mx-auto mt-20 " src="img\image1174.png " alt=" ">
<h1 class="aureli papers lg:text-4xl mt-12 font-bold text-center ">Latest Blog</h1>
<div>
<x-blogcard/>
</div>
@endsection
