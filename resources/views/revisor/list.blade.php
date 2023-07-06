<x-main>
    <h1 class="text-center mt-5">Lista di tutti gli annunci</h1>
    <table class="table border mt-5 w-75 m-auto ">
        <thead>
            <tr>
                <th scope="col">Codice</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data creazione</th>
                <th scope="col">Stato</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
            
                <tr>
                    
                    <td>{{ $article['id'] }}</td>
                    <td>{{ $article['title'] }}</td>
                    <td>{{ $article->created_at->format('d/m/Y') }} </td>
                    <td>
                    @if ($article->is_accepted===1)
                        Accettato <i class="fa-solid fa-circle" style="color: #19d600;"></i>
                    @elseif ($article->is_accepted===0)
                        Rifiutato <i class="fa-solid fa-circle" style="color: #c20000;"></i>
                    @else
                        Da revisionare <i class="fa-solid fa-circle" style="color: #f0e400;"></i>
                    @endif    
                    </td>
                </tr>

            @empty
                <tr colspan="4"> </tr>
            @endforelse
        </tbody>
    </table>

</x-main>