@extends('layouts.app')

@section('content')
    <div class="container py-4" style="border: 2px solid black;">
        <div class="text-center">
            <img src="{{ str_starts_with($game->image_url, 'https') ? $game->image_url : Storage::url($game->image_url) }}" class="w-50 mb-4" alt="game image">                    
            <p class="mb-4">THIS GAME NAY NOT BE APPROPRIATE FOR ALL AGES,<br>OR MAY NOT BE APPROPRIATE FOR VIEWING AT WORK</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="bg-dark py-3 w-auto text-white">
                    <p class="text-center mb-0">Enter your date of birth to continue</p><br>
                    <form action="{{ route('games.process-check-age', ['id' => $game->id]) }}" method="post" id="form-check-age">
                        @csrf

                        <div class="d-flex justify-content-center">
                            <select class="p-1" name="day" id="day" required>
                                @for ($i = 1; $i <= 31; $i++) 
                                    <option value="{{ $i < 10 ? "0$i" : $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select class="p-1" name="month" id="month" required>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">November</option>
                            </select>
                            <select class="p-1" name="year" id="year">
                                @php
                                    $year = (int)date('Y');
                                @endphp
                                
                                @for ($i = 1900; $i <= $year; $i++) 
                                    <option value="{{ $i }}" {{ $i == $year ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>                                            
                    </form>
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-sm btn-secondary" onclick="document.getElementById('form-check-age').submit();">View Page</button>
                    <a href="{{ route('home') }}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Cancel</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <p class="text-center mt-3">This data is for verification purposes only and will not be stored.</p>
@endsection
