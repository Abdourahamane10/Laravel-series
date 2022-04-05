<div class="relative">


    <div class="pull-right">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
        <link href="/css/app.css" rel="stylesheet"/>

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
