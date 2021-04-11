<div>
    Name: <br> <input type="text" wire:model = "name" /> <br>

    Message: <br>

    <textarea wire:model="message"></textarea><br>

    Marital Status: <br>
    Single <input type="radio" value="Single" wire:model="marital_status">
    Married <input type="radio" value="Married" wire:model="marital_status"><br>

    Favourite color: <br>

    Red <input type="checkbox" value="red" wire-model="colors"> <br>
    Green <input type="checkbox" value="green" wire-model="colors"> <br>
    Blue <input type="checkbox" value="blue" wire-model="colors"> <br>

    Favourite Fruit: <br>

    <select wire-model="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Bana</option>
    </select>

    <hr>
    Name: {{$name}} <br> <!--inputa girilen veriyi anlık olarak çıktılayacak-->
    Message: {{$message}} <br>
    Marital Status: {{$marital_status}} <br>
    Favourite Colors:
    <ul>
    @foreach ($colors as $color)
        <li>{{$color}}</li>
    @endforeach
    </ul>

    Favourite Fruit: {{$fruit}}
</div>
