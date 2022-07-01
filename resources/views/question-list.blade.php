<x-app-layout>
    <x-slot name="header">
        <div class="flex">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __( $collection ) }}
            </h2>
            <a href="{{route('question-add', ['collection' => $collection])}}" style="margin-left: 3rem">ADD QUESTION</a>
        </div>
    </x-slot>



        {{-- <div class="sidebar " style=" background: rgb(66, 57, 57);">
            @foreach ($questions as $q)
            <div class="pt-2 pb-2 px-4">
                <a class="active" href="{{route('question-data' , ['collection' => $collection , 'id' => $q->id])}}">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white border-b border-gray-200 px-4 py-1">
                        {{$q->question_name}}
                    </div>
                </div>
            </a>
            </div>

            @endforeach
        </div> --}}
        <div class="content">

            {{-- Side bar --}}
            <div style="flex-grow: 0.5;overflow: auto; flex-basis: 200px">
                @foreach ($questions as $q)
                <div class="pt-2 pb-2 px-4">
                    <a class="active" href="{{route('question-data' , ['collection' => $collection , 'id' => $q->id])}}">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="bg-white border-b border-gray-200 px-4 py-1">
                            {{$q->question_name}}
                        </div>
                    </div>
                </a>
                </div>

                @endforeach
            </div>

            {{-- Question content --}}
            <div style="flex-grow: 2;padding: 2rem">
                @if ($question)
                <div style="display: grid; place-items:center;">
                    <h1 style="margin-bottom: 1rem;">{{$question->question_name}}</h1>
                    <div style="margin: 0 auto" style="display: grid;place-items: center;">
                        @php
                             $html = $question->question;
                             echo $html;
                        @endphp
                    </div>

                </div>


                @endif
            </div>
            <div style="flex-grow: 1;flex-basis: 200px; display: flex; flex-direction: column">
                <div style="background-color: red; flex-grow: 1">
                    <h1>Expected result: </h1>
                    @if ($question)

                    <div>
                        {{$question->expected_result}}
                    </div>
                    @endif

                </div>
                <div style="background-color: blue;flex-grow: 1">
                    <h1>Correct Answer: </h1>
                    @if ($correct_ans)

                    @foreach ($correct_ans as $ans )
                    <div>
                        {{$ans->answer}}
                    </div>

                    @endforeach
                    @endif
                </div>
                <div style="flex-grow: 1">
                    <h1>Wrong answer: </h1>
                    @if ($incorrect_ans)

                    @foreach ($incorrect_ans as $ans )
                    <div>
                        {{$ans->answer}}
                    </div>

                    @endforeach
                    @endif
                </div>
            </div>


        </div>
</x-app-layout>

<style>
    .content{
        display: flex;
        flex-direction: row;

        /* margin-left: 200px;
        display: grid;
        place-items: center; */
        height: 100%;

    }
    .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }
</style>
