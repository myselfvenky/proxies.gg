<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
    <ul class="dropdown-menu ">
        @foreach($headerData as $fieldName => $fieldValue)
        <li class="nav-item"><a class="dropdown-item" class="navbar-dark-blue" href="{{ $fieldValue->url }}"
                target="{{ $fieldValue->rules }}">{{ $fieldValue->name }}</a></li>
        @endforeach

    </ul>
</li>