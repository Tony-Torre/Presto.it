<x-main>
<div class="container text-center">
    <div class="row">
        @foreach($articles as $article)
            <!-- <li> -->
            <div class="col-md-auto">
                <x-card_article :$article/>
            </div>
            <!--  </li> -->
        @endforeach
    </div>
</div>
</x-main>