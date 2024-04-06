@if(!isset($_COOKIE["notificationClosed"]))
<div class="bg-primary-dark text-white fw-bold fs-15" id="notification">
    <div class="container py-3 d-flex justify-content-center">
        <div class="d-flex flex-row align-items-center ms-auto">
            <p class="mb-0"><span class="link-white hover" style="font-weight: 400;"> {{ $notification->description }} </span></p>
        </div>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item d-none d-md-block">
                <i id="close-icon" class="fa-regular fa-circle-xmark" style="cursor: pointer;" onclick="closeTop()"></i>
            </li>
        </ul>
    </div><!-- /.container -->
</div>
@endif