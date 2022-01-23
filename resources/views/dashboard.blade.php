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
                    <x-button>
                        <a onclick="loading()" style="color: white;" href="/list">List Akun</a>
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

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

<script>
function loading() {
   document.getElementById('overlay').style.display = "block";
}
</script>
