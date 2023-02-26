@extends('layouts.app')

@section('css')
@endsection()

@section('content')
    <div class="container">
        <div class="container">
        <h1 class="text-primary"> Giriş & Kurulum</h1>
        <h2 class="text-primary mt-5">Laravel Projesi Oluşturma</h2>
        <pre><code class="language-php">laravel new example-app</code></pre>
        </div>
        <div class="container">
        <h2 class="text-primary mt-5">Livewire'i Projeye dahil etme</h2>
        <pre><code class="language-php">composer require livewire/livewire</code></pre>
        </div>
        <div class="container">
            <h2 class="text-primary mt-5">Livewire ( kullanacak her sayfaya JavaScript ) ekleme.</h2>
            <h4 class="text-primary mt-5">head tagları arasına</h4>
            <pre><code class="language-markup">@livewireStyles</code></pre>
            <h4 class="text-primary mt-5">bodynin üstüne</h4>
            <pre><code class="language-markup">@livewireScripts</code></pre>
        </div>
        <div class="container">
            <h2 class="text-primary mt-5">Bileşen (Component) oluşturma.</h2>
            <pre><code class="language-php">php artisan make:livewire counter</code></pre>
        </div>
        <div class="container">
            <h3 class="text-primary mt-5">app/http/Livewire/Counter.php</h3>
            <pre>
                <code class="language-php">
namespace App\Http\Livewire;
use Livewire\Component;

class Counter extends Component
{
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
            <pre><code class="language-markup"><script type="prism-html-markup">
<div>
    <h1>Hello World!</h1>
</div>
            </script></code></pre>

        </div>
        <div class="container">
            <h3 class="text-primary mt-5">Bileşeni (Component) Dahil Etme</h3>
            <pre><code class="language-markup"><script type="prism-html-markup">
<head>
    ...
    @livewireStyles
</head>
<body>
    <livewire:counter />

    ...

    @livewireScripts
</body>
</html>
            </script></code></pre>

        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
@endsection


@section('js')
@endsection
