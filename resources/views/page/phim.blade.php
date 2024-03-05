@extends('welcome')
@section('content')


<body>
    <div class="content-film">

        <!-- SECTIONS -->

        <section class="movie-banner">
            <div class="hero-wrapper">
                <div class="movie-card">
                    <a href="   "><img src="https://livedemo00.template-help.com/wt_prod-20691/images/gallery-4.jpg"
                            alt="raya"></a>

                    <div class="movie-card-content">
                        <h2>Raya and the last Dragon</h2>


                        <ul class="movie-card-btns">
                            <li class="movie-card-btn">
                                family
                            </li>
                            <li class="movie-card-btn">
                                Fantacy
                            </li>
                            <li class="movie-card-btn">
                                animation
                            </li>
                            <li class="movie-card-btn">
                                action
                            </li>
                            <li class="movie-card-btn">
                                adventure
                            </li>
                        </ul>

                        <p class="movie-card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                            laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                            facere ab suscipit.
                        </p>



                    </div>
                </div>

            </div>
        </section>


        <section class="international-trailer">
            <div class="trailer-title">
                <h3>international trailer</h3>
            </div>
            <div class="international-vid">
                <iframe width="560" height="515" src="https://www.youtube.com/embed/3UFWsEY8Hdc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section>

        <section class="international-trailer  margin">
            <div class="trailer-title">
                <h3>official trailer</h3>
            </div>
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1VIZ89FEjYI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </section>

        <section class="international-trailer margin">
            <div class="trailer-title">
                <h3>teaser trailer</h3>
            </div>
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9BPMTr-NS9s"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </section>
    </div>
    <script src="{{asset('js/main.js')}}"></script>

</body>
@endsection