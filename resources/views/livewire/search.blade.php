<div class="relative">
    <!--<input class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500 px-2 py-1 rounded-full"
        placeholder="Recherche..." type="text" name="search" wire:model='query'>-->
    <!--<svg class="h-5 w-5 text-gray-500 absolute top-0 right-0 mr-5 mt-2" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd" />
    </svg>-->

    <style>
        input[type="search"] {
            font-family: FontAwesome;
        }

    </style>
    <div class="pull-right">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

        <input type="search" placeholder="&#xf002 Search" wire:model='query'>

        @if (strlen($query) > 2)
            <div class="pull-right">
                @if (count($series) > 0)
                    @foreach ($series as $index => $serie)
                        <p><a href="{{ route('series.show', ['id' => $serie->id]) }}">{{ $serie->title }}</a>
                        </p>
                        <!--<p>{{-- > //$serie->content// <! --}}</p>-->
                    @endforeach
                @else
                    <span>
                        <p>0 résultat pour "{{ $query }}"
                        <p>
                    </span>
                @endif
            </div>

        @endif
    </div>


    {{-- The whole world belongs to you. --}}
</div>
