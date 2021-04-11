<div>
    <button type="button" wire:click="addTwoNumbers(30,60)">Sum</button><br>

    <textarea wire:keydown.enter="DisplayMessage($event.target.value)"></textarea><br>

    <form wire:submit.prevent="getSum">
        Num1: <input type="text" name="num1" wire:model="num1">
        Num2: <input type="text" name="num2" wire:model="num2">
        <button type="submit">Submit</button>
    </form>

    Sum: {{$sum}} <br>
    Message: {{$message}}

</div>
