<x-app-layout>
    <x-slot name="header">
        <div class="flex">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __( $collection ) }}
            </h2>
            <a href="" style="margin-left: 3rem">ADD QUESTION</a>
        </div>
    </x-slot>

    <div id="form-content" class="form-content">

        <form action="{{route('question-store', ['collection' => $collection ])}}" method="POST" style="width: 66%">
            @csrf

            <div style="margin: 2rem 0rem;">
                <label for="question-name">Question name : </label>
                <input class="question-input" type="text" placeholder="Question name" name="question_name">
            </div>

            <div class="p-3">
                <div class="mb-3">
                    <label for="question-name" class="p-2">Question : </label>
                </div>
                <textarea id="textbox" name="question"></textarea>
            </div>

            <div class="p-3">
                <div class=" mb-3">
                    <label for="question-name" class="p-2">Expected result : </label>
                </div>
                <textarea id="textbox" name="expected_result"></textarea>
            </div>



            <div id="ans-list" style="padding: 2rem;">
                <h2>Correct answer</h2>
                {{-- display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); --}}

            </div>
            <hr>
            <div class="grid place-items-center">
                <i class="fa fa-plus p-4 rounded-full bg-gray-300 hover:bg-gray-400 cursor-pointer hover:text-white" onclick="addAnswerElement()"></i>
            </div>
            <hr>
            <div id="wrong-ans-list" style="padding: 2rem;">
                <h2>Wrong answer</h2>

            </div>
            <hr>
            <div class="grid place-items-center" >
                <i class="fa fa-plus p-4 rounded-full bg-gray-300 hover:bg-gray-400 cursor-pointer hover:text-white" onclick="addWorngAnswerElement()"></i>
            </div>
            <hr>

            <div class="submit-button-container">

                <button class="submit-button" type="submit">Submit</button>
            </div>

            {{-- @foreach ($elementList as $element)
                {{$element}}
            @endforeach --}}
            {{-- <x-ans.answer ansnumber='1'></x-ans.answer> --}}
        </form>
    </div>


</x-app-layout>

<script>
    var i = 0;
    var elementList = [];
    function addAnswerElement(){
        const e = document.createElement('x-ans.answer');
        e.innerHTML =
        `<div id="as-${i}" style="display: flex; padding: .5rem;">
            <input class="question-input" style="width:50%;" type="text" name="ans['${i}']">
            <div onclick="deleteElement(this.parentElement.id)" class="delete-button" >X</div>
        </div>`;
        i++;
        const fContent = document.getElementById("ans-list");
        fContent.appendChild(e);
    }

    function deleteElement(id){
        const e = document.getElementById(id);

        e.remove();


    }

    var wrong_i = 0;
    function addWorngAnswerElement(){
        const e = document.createElement('x-ans.answer');
        e.innerHTML =
        `<div id="wrong-ans-${wrong_i}" style="display: flex; padding: .5rem;">
            <input class="question-input" style="width:50%;" type="text" name="wrong_ans['${wrong_i}']">
            <div onclick="deleteElement(this.parentElement.id)" class="delete-button" >X</div>
        </div>`;
        wrong_i++;
        const fContent = document.getElementById("wrong-ans-list");
        fContent.appendChild(e);
    }
</script>
<style>
    .content{
        margin-left: 200px;

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

    .form-content{
        width: 100%;
        display: flex;
        justify-content: center;
        justify-items: center;
        margin: 0 auto;
    }
    .submit-button-container{
        text-align: center;
        margin: .5rem 0;

    }
    .submit-button{
        border-radius: 2rem;
        border-color: rgb(182, 182, 182);
        background-color: white;
        padding: 1rem;
        font-weight: 600;
        margin-top: 1rem;
        margin-bottom: 2rem;


    }

    .question-input{
        border-radius: .5rem;
    }

    .add-answer-button{
        display: grid;
        place-items: center;
        background-color: #e6e6e6;
    }

    .delete-button{
        background-color: #ff4d4d;
        color: white;
        height: 100%;
        margin: auto 0;
        padding: .5rem;
        font-weight: 800;
        border-radius: .25rem;
        margin-left: .25rem
    }

    .addIngredientDiv{
    margin-top: 16px;
    text-align: center;
}
.addIngredient{
    font-style: normal;
    font-stretch: normal;
    letter-spacing: -0.1px;
    width: auto;
    padding: 9px 15px;
    border-radius: 4px;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    outline: none;
    background-color: rgb(255, 255, 255);
    cursor: pointer;
    border: 1px solid rgb(118, 121, 122);
    color: rgb(118, 121, 122);
    box-sizing: border-box;
    display: inline-block;
}
</style>
