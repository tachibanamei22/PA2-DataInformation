<!DOCTYPE html>
<html>
<head>
	<title>Isi Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <style>
        .breeding-rhombus-spinner {
        height: 65px;
        width: 65px;
        position: relative;
        transform: rotate(45deg);
      }

      .breeding-rhombus-spinner, .breeding-rhombus-spinner * {
        box-sizing: border-box;
      }

      .breeding-rhombus-spinner .rhombus {
        height: calc(65px / 7.5);
        width: calc(65px / 7.5);
        animation-duration: 2000ms;
        top: calc(65px / 2.3077);
        left: calc(65px / 2.3077);
        background-color: #ff1d5e;
        position: absolute;
        animation-iteration-count: infinite;
      }

      .breeding-rhombus-spinner .rhombus:nth-child(2n+0) {
        margin-right: 0;
      }

      .breeding-rhombus-spinner .rhombus.child-1 {
        animation-name: breeding-rhombus-spinner-animation-child-1;
        animation-delay: calc(100ms * 1);
      }

      .breeding-rhombus-spinner .rhombus.child-2 {
        animation-name: breeding-rhombus-spinner-animation-child-2;
        animation-delay: calc(100ms * 2);
      }

      .breeding-rhombus-spinner .rhombus.child-3 {
        animation-name: breeding-rhombus-spinner-animation-child-3;
        animation-delay: calc(100ms * 3);
      }

      .breeding-rhombus-spinner .rhombus.child-4 {
        animation-name: breeding-rhombus-spinner-animation-child-4;
        animation-delay: calc(100ms * 4);
      }

      .breeding-rhombus-spinner .rhombus.child-5 {
        animation-name: breeding-rhombus-spinner-animation-child-5;
        animation-delay: calc(100ms * 5);
      }

      .breeding-rhombus-spinner .rhombus.child-6 {
        animation-name: breeding-rhombus-spinner-animation-child-6;
        animation-delay: calc(100ms * 6);
      }

      .breeding-rhombus-spinner .rhombus.child-7 {
        animation-name: breeding-rhombus-spinner-animation-child-7;
        animation-delay: calc(100ms * 7);
      }

      .breeding-rhombus-spinner .rhombus.child-8 {
        animation-name: breeding-rhombus-spinner-animation-child-8;
        animation-delay: calc(100ms * 8);
      }

      .breeding-rhombus-spinner .rhombus.big {
        height: calc(65px / 3);
        width: calc(65px / 3);
        animation-duration: 2000ms;
        top: calc(65px / 3);
        left: calc(65px / 3);
        background-color: #ff1d5e;
        animation: breeding-rhombus-spinner-animation-child-big 2s infinite;
        animation-delay: 0.5s;
      }


      @keyframes breeding-rhombus-spinner-animation-child-1 {
        50% {
          transform: translate(-325%, -325%);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-2 {
        50% {
          transform: translate(0, -325%);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-3 {
        50% {
          transform: translate(325%, -325%);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-4 {
        50% {
          transform: translate(325%, 0);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-5 {
        50% {
          transform: translate(325%, 325%);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-6 {
        50% {
          transform: translate(0, 325%);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-7 {
        50% {
          transform: translate(-325%, 325%);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-8 {
        50% {
          transform: translate(-325%, 0);
        }
      }

      @keyframes breeding-rhombus-spinner-animation-child-big {
        50% {
          transform: scale(0.5);
        }
      }
    </style>

    <style>
        .overlay {
            background: #000;
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.5;
        }
    </style>

</head>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bakul Akun') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    List Akun
                </div>

                  <!-- This example requires Tailwind CSS v2.0+ -->
                  <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                          <x-button>
                            <a onclick="loading()" style="color: white;" href="/list/add"> + Tambah Akun Baru</a>
                            <br>
                          </x-button>
                          <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                              <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Nama Akun
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Jenis Akun
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Grade
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Harga
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Opsi
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              @foreach($daftar_akun as $a)
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                      <img class="h-10 w-10 rounded-full" src="https://picsum.photos/200" alt="">
                                    </div>
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">
                                        {{ $a->nama_akun }}
                                      </div>
                                      <div class="text-sm text-gray-500">
                                        <?php
                                          $file = "word_list.txt";
                                          $file_arr = file($file);
                                          $num_lines = count($file_arr);
                                          $last_arr_index = $num_lines - 1;
                                          $rand_index = rand(0, $last_arr_index);
                                          $rand_text = $file_arr[$rand_index];
                                          $randomness = preg_replace('/\s+/', '',$rand_text);
                                          echo $randomness."@example.com";
                                      ?>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="text-sm text-gray-900">{{ $a->jenis_akun }}</div>
                                  <div class="text-sm text-gray-500">Game</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $a->grade_akun }}
                                  </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                  Rp.{{ $a->harga_akun }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                  <x-button>
                                    <a href="/list/edit/{{ $a->id_akun }}" onclick="loading()" style="color: rgb(255, 255, 255);">Edit</a>
                                  </x-button>
                                  <x-button>
                                    <a href="/list/delete/{{ $a->id_akun }}" onclick="loading()" style="color: rgb(248, 104, 104);">Hapus</a>
                                  </x-button>
                                  </td>
                              </tr>
                              @endforeach

                              <!-- More people... -->
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


                    <!-- <div class="container">
                        <div class="">
                            <div class="card-body">

                                <a onclick="loading()" style="color: white;" class='btn btn-info' href="/list/add"> + Tambah Akun Baru</a>
                                </br> <br/>

                                <table class="table table-bordered table-hover">
                                    <caption>List Akun</caption>
                                    <tr>
                                        <th>Pemilik Akun</th>
                                        <th>Jenis Akun</th>
                                        <th>Grade</th>
                                        <th>Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                    @foreach($daftar_akun as $a)
                                    <tr>
                                        <td>{{ $a->nama_akun }}</td>
                                        <td>{{ $a->jenis_akun }}</td>
                                        <td>{{ $a->grade_akun }}</td>
                                        <td>Rp.{{ $a->harga_akun }}</td>
                                        <td>
                                            <a onclick="loading()" class="btn btn-warning btn-sm" href="/list/edit/{{ $a->id_akun }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="/list/delete/{{ $a->id_akun }}">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>

<center>
    <div id="overlay" class="overlay" style="display: none;">
        <div id="loading" class="breeding-rhombus-spinner" style="margin-top: 40%;">
            <div class="rhombus child-1"></div>
            <div class="rhombus child-2"></div>
            <div class="rhombus child-3"></div>
            <div class="rhombus child-4"></div>
            <div class="rhombus child-5"></div>
            <div class="rhombus child-6"></div>
            <div class="rhombus child-7"></div>
            <div class="rhombus child-8"></div>
            <div class="rhombus big"></div>
        </div>
    </div>
</center>

</x-app-layout>



<script>
function loading() {
   document.getElementById('overlay').style.display = "block";
}
</script>

</html>