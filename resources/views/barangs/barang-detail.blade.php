<x-app-layout>

  <div class="w-full bg-gray-200 min-h-screen py-5">
    <div class="w-[80%] bg-white mx-auto min-h-screen rounded-lg p-10">
      <div class="w-full flex justify-end items-center my-5">
        <button class="w-[8rem] hover:scale-90 transition-all duration-200 h-[3rem] bg-green-400 rounded-lg text-base font-[700] font-montserrat">
          <a href="/barang/add">Add Barang</a>
        </button>
      </div>

      <div class="w-full bg-gray-200 rounded-lg p-2 gap-5 flex flex-col justify-center items-center">
        <div class="w-full flex  flex-row justify-start items-center gap-x-2 bg-yellow-400 ">
          <div class="basis-1/12 ">id</div>
          <div class="basis-1/12 ">image</div>
          <div class="basis-1/4  ">nama</div>
          {{-- <div class="basis-3/4">deskripsi</div> --}}
          <div class="basis-1/6 ">kecacatan</div>
          <div class="basis-1/6 ">jumlah</div>
          <div class="basis-1/6 ">type</div>
          <div class="basis-1/6 ">condition</div>
          <div class="basis-1/3 ">action</div>
        </div>
          <div class="w-full flex  flex-row justify-start items-center gap-x-5">
            <div class="basis-1/12 ">{{ $barang->id }}</div>
            <div class="basis-1/12 rounded-full  flex justify-center items-center">
              @if ($barang->image !== null)
                <img src="/storage/images/{{$barang->image}}" alt="profile" class="w-[3rem] h-[3rem] object-contain">
              @else
                <img src="/storage/images/2023-10-23-21-01-17.png" alt="profile" class="w-[3rem] h-[3rem] object-contain">
              @endif
            </div>
            <div class="basis-1/4 ">{{ $barang->nama }}</div>
            {{-- <div class="basis-3/4 ">{{ $barang->deskripsi }}</div> --}}
            <div class="basis-1/6 ">{{ $barang->kecacatan }}</div>
            <div class="basis-1/6 ">{{ $barang->jumlah }}</div>
            <div class="basis-1/6 ">{{ $barang->type->nama }}</div>
            <div class="basis-1/6 ">{{ $barang->condition->nama }}</div>
            <div class="basis-1/3 flex justify-between items-center">
              <button class="bg-blue-400 w-[8rem] h-[2rem] rounded-lg hover:scale-90 transition-all duration-200">
                <a class="w-full flex  justify-center items-center" href="/barang/edit/{{$barang->id}}">Edit</a>
              </button>
              <button class="bg-red-400 w-[8rem] h-[2rem] rounded-lg hover:scale-90 transition-all duration-200">
                <a class="w-full flex  justify-center items-center" href="/barang/delete/{{$barang->id}}">Delete</a>
              </button>
            </div>    
          </div>
      </div>
    </div>   
  </div>        
</x-app-layout>