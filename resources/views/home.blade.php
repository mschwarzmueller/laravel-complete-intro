@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        <h1>This is the main container</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci architecto at, beatae consectetur
            dolor
            dolore dolorem eaque facere fugiat impedit itaque nam natus nesciunt praesentium quidem rem unde vero!
            Lorem
            ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, dolor nulla possimus quaerat rem repellat
            velit? Beatae culpa dolore dolorem earum ex minus nam nostrum obcaecati tempora voluptas. Eius, ipsam?
            Lorem
            ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequatur dolore dolorem eius eveniet
            excepturi explicabo hic molestias odio, quaerat quas veniam. Dolorum eaque illo maiores nostrum!
            Incidunt,
            quo ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ex fuga molestiae natus
            quia?
            Asperiores aspernatur cum dolores doloribus eligendi iste qui saepe voluptatibus, voluptatum! At beatae
            dignissimos impedit molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis
            debitis explicabo illum minima necessitatibus nihil nobis numquam perspiciatis quod? Adipisci alias
            blanditiis doloremque eos porro provident sapiente veritatis vero.</p>

        <ul>
            @for($i = 0; $i < 5; $i++)
                @if($i === 4)
                    <li>Now the item is #4</li>
                @else
                    <li>Item <?= $i ?></li>
                @endif
            @endfor
        </ul>
    </div>
@endsection
