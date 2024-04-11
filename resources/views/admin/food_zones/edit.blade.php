@extends('layout.admin')

@section('title', 'Stylist page')

@section('content')




    <p class="font-bold mt-8 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Редагувати фуд.зону </p>

    <div class="relative overflow-x-auto bg-white text-[12px] mt-8  ml-10 ">

        <form action="{{route('admin.food_zones.update',['food_zone'=>$food_zone->id])}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-24 flex flex-row ">
                <img class=" max-h-[500px]" src="{{asset($food_zone->photo)}}" alt="">
                <div class="ml-24">
                    <div class="mb-4">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Назва фуд.зони</label>
                        <input value="{{$food_zone->name}}" placeholder="{{$food_zone->name}}" type="text" id="first_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 " required>
                    </div>
                    <br>
                    <div class="mb-4">

                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Опис фуд.зони</label>
                        <textarea id="message" rows="4"  name="description"   class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Напишіть опис тут">{{$food_zone->description}}</textarea>

                    </div>
                    <br>
                    <div class=" mb-4">

                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Загрузити меню</label>
                        <input name="photo_menu_url" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " id="file_input" type="file">
                        <input type="hidden" name="photo_menu_url_hidden" value="{{$food_zone->menu_url}}">
                    </div>
                    <div class=" mb-4">

                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Загрузити фото</label>
                        <input name="photo_url" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " id="file_input" type="file">
                        <input type="hidden" name="photo_url_hidden" value="{{$food_zone->photo}}">
                    </div>
                </div>

            </div>

            <div class="mb-4 w-3/6  flex flex-row justify-evenly">
                <button type="submit"  class="p-10  pt-3 pb-3 bg-[#CA0202] rounded-lg text-white text-[16px] font-bold hover:underline">Зберегти</button>

                <a href="{{route('admin.food_zones.index')}}" class="p-10 pt-3 pb-3 rounded-lg text-black text-[16px] font-bold hover:underline">Відмінити</a>

            </div>
        </form>

    </div>
    і
@endsection


