<header>
    <h1 class="headerTitle">
        (HoHo
        <a href="{{ route('home') }}"> <img src="{{ config('images.xmasTree')}}" alt="Christmas Tree"></a>
        Toys)
    </h1>
    <nav class="headerNav">
        <div class="headerNavContainer">
            <a href="{{route('santa')}}" id="childrenLink" class="headerNavLink">Children</a>
            <a href="{{route('elf')}}" id="toysLink" class="headerNavLink">Toys</a>
        </div>
    </nav>
</header>
