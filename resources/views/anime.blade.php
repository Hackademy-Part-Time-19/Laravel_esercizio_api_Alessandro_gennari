<x-layout>

    <div class="container">
        <div class="roow">
            <div class="col-lg-4">
                <img src="{{$anime['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
            </div>
            <div class="col-lg-8">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">                        
                        <div class="card-body">
                            <h5 class="card-title">{{$anime['title']}}</h5>
                            <p class="card-text">{{$anime['synopsis']}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</x-layout>