<x-app-layout>

  <div class="w-full bg-gray-400 min-h-screen py-10">
    <div class="w-[50%] mx-auto  bg-white rounded-lg px-10 py-5">
      <form class="w-full" action="/barang/add" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="flex flex-col justify-center items-start gap-y-5">
          <label for="nama" class="font-[700] text-xl">Nama</label>
          <input type="text" placeholder="nama" name="nama" id="nama" class="w-[100%] outline-none" required/>

          <label for="deskripsi" class="font-[700] text-xl">Deskripsi</label>
          <input type="text" placeholder="deskripsi" name="deskripsi" id="deskripsi" class="w-[100%] outline-none" required/>

          <label for="kecacatan" class="font-[700] text-xl">kecacatan</label>
          <input type="text" placeholder="kecacatan" name="kecacatan" id="kecacatan" class="w-[100%] outline-none" required/>

          <label for="jumlah" class="font-[700] text-xl">jumlah</label>
          <input type="number" placeholder="jumlah" name="jumlah" id="jumlah" class="w-[100%] outline-none" required/>

          <label for="image" class="font-[700] text-xl">Image</label>
          <input type="file" placeholder="Upload image" name="image"  class="w-[100%] outline-none" required/>

          <label for="condition_id" class="font-[700] text-xl">Condition</label>
          <select name="condition_id" id="condition_id" class="w-[100%] outline-none">
            @foreach ($conditions as $condition)
              <option value="{{$condition->id}}">{{$condition->nama}}</option>
            @endforeach
          </select>

          <label for="type_id" class="font-[700] text-xl">Condition</label>
          <select name="type_id" id="type_id" class="w-[100%] outline-none">
            @foreach ($types as $type)
              <option value="{{$type->id}}">{{$type->nama}}</option>
            @endforeach
          </select>

          <button type="submit" class="bg-green-400 w-[8rem] hover:scale-90 transition-all duration-200 h-[3rem] rounded-lg flex justify-center items-center">
            Add
          </button>
        </div>
      </form>
    </div>
  </div>

</x-app-layout>