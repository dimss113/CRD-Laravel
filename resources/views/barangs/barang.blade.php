<x-app-layout>

  <div class="w-full bg-gray-200 min-h-screen py-5">
  @if ($message = Session::get('success'))
    <div class="mx-auto w-[50%] bg-green-300 px-5 py-4 rounded-lg flex justify-center items-center">
      <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
  @endif

  @if ($message = Session::get('error'))
  <div class="mx-auto w-[50%] bg-red-300 px-5 py-4 rounded-lg flex justify-center items-center">
    <button type="button" class="close" data-dismiss="alert">×</button>	
      <strong>{{ $message }}</strong>
  </div>
@endif
    <div class="w-[80%] bg-white mx-auto min-h-screen rounded-lg p-10">
      <div class="w-full flex justify-end items-center my-5">
        <button class="w-[8rem] hover:scale-90 transition-all duration-200 h-[3rem] bg-green-400 rounded-lg text-base font-[700] font-montserrat">
          <a href="/barang/add">Add Barang</a>
        </button>
      </div>

      <div class="w-full bg-gray-200 rounded-lg p-2 gap-5 flex flex-col justify-center items-center">
        <div class="w-full flex  flex-row justify-start items-center gap-x-10 bg-yellow-400 ">
          <div class="basis-1/12 ">id</div>
          <div class="basis-1/12 ">image</div>
          <div class="basis-1/4  ">nama</div>
          <div class="basis-3/4">deskripsi</div>
          <div class="basis-1/4 ">kecacatan</div>
          <div class="basis-1/4 ">jumlah</div>
          <div class="basis-1/3 ">action</div>
        </div>
        @php
          $i = 1;
        @endphp
        @foreach ($barangs as $barang)
          <div class="w-full flex  flex-row justify-start items-center gap-x-10">
            <div class="basis-1/12 ">{{ $i }}</div>
            <div class="basis-1/4 rounded-full  flex justify-center items-center">
              @if ($barang->image !== null)
                <img src="storage/images/{{$barang->image}}" alt="profile" class="w-[3rem] h-[3rem] object-contain">
              @else
                <img src="storage/images/2023-10-23-21-01-17.png" alt="profile" class="w-[3rem] h-[3rem] object-contain">
              @endif
            </div>
            <div class="basis-1/4 ">{{ $barang->nama }}</div>
            <div class="basis-3/4 ">{{ $barang->deskripsi }}</div>
            <div class="basis-1/4 ">{{ $barang->kecacatan }}</div>
            <div class="basis-1/4 ">{{ $barang->jumlah }}</div>
            <div class="basis-1/3 flex justify-between items-center">
              <button class="bg-green-400 w-[8rem] h-[2rem] rounded-lg hover:scale-90 transition-all duration-200">
                <a class="w-full flex  justify-center items-center" href="/barang/detail/{{$barang->id}}">Detail</a>
              </button>
            </div>    
          </div>
          @php
            $i++;
          @endphp
        @endforeach
      </div>
    </div>   
  </div>        
</x-app-layout>