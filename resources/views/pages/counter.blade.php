@extends('layouts.app')

@section('css')
@endsection()

@section('content')

    <div class="container">
        <div class="container">
            <h2 class="text-primary mt-5">Counter Oluşturma</h2>
            <pre><code class="language-php">php artisan make:livewire counter</code></pre>
        </div>
        <div class="container">
            <h3 class="text-primary mt-5">app/http/Livewire/Counter.php</h3>
            <pre>
                <code class="language-php">
class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
                </code>
            </pre>
        </div>
        <div class="container">
            <h3 class="text-primary mt-5">resources/views/livewire/counter.blade.php</h3>
            <pre>
                <code class="language-php">
class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
                </code>
            </pre>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>

@endsection

@section('js')
@endsection
