@extends('layouts.app')

@section('content')
    <main class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-primary mb-4">Latest News</h2>
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title text-info">Breaking News: Economic Growth in Sri Lanka</h5>
                        <p class="card-text">The Sri Lankan economy is showing signs of recovery, with key sectors bouncing back. Experts predict a gradual return to pre-pandemic levels.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title text-info">Crisis in Education: What Lies Ahead?</h5>
                        <p class="card-text">As schools reopen, concerns about educational gaps persist. The government is implementing new strategies to support students.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title text-info">Environmental Initiatives Gaining Momentum</h5>
                        <p class="card-text">Community-driven efforts are being launched to tackle environmental challenges across the country. More people are joining the fight against pollution.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2 class="text-primary mb-4">Trending</h2>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Local Sports Events Rescheduled</li>
                    <li class="list-group-item">New Tourism Initiatives Unveiled</li>
                    <li class="list-group-item">Health Sector Reform Updates</li>
                    <li class="list-group-item">Cultural Festivals Planned for the Summer</li>
                </ul>

                <h2 class="text-primary mb-4">Follow Us</h2>
                <div class="d-flex justify-content-around">
                    <a href="#" class="btn btn-outline-primary">Facebook</a>
                    <a href="#" class="btn btn-outline-info">Twitter</a>
                    <a href="#" class="btn btn-outline-danger">Instagram</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybih8QQD7Tg5Ff3+hmGdVq2hYoK/lL4coeb2OnJk5xB46P7mn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ZrWhtV4ApRkuIzV6Ce8c9xPwxDgztxPMcDmj1U6cP5s5e27cTVL9HEzAY9Tk2/j4" crossorigin="anonymous"></script>
@endsection
