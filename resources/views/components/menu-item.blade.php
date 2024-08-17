@props([
    'text' => '',
    'link' => '',
])
<li class="nav-item">
    <a class="nav-link {{ $link === url()->current() ? 'active' : '' }}" aria-current="page" href="#">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.33334 5.9895C7.90626 5.9895 7.55209 5.63533 7.55209 5.20825V2.08325C7.55209 1.65617 7.90626 1.302 8.33334 1.302C8.76043 1.302 9.11459 1.65617 9.11459 2.08325V5.20825C9.11459 5.63533 8.76043 5.9895 8.33334 5.9895Z" fill="white"/>
            <path d="M16.6667 5.9895C16.2396 5.9895 15.8854 5.63533 15.8854 5.20825V2.08325C15.8854 1.65617 16.2396 1.302 16.6667 1.302C17.0937 1.302 17.4479 1.65617 17.4479 2.08325V5.20825C17.4479 5.63533 17.0937 5.9895 16.6667 5.9895Z" fill="white"/>
            <path d="M16.6667 23.6978H8.33333C4.53125 23.6978 2.34375 21.5103 2.34375 17.7083V8.85408C2.34375 5.052 4.53125 2.8645 8.33333 2.8645H16.6667C20.4688 2.8645 22.6562 5.052 22.6562 8.85408V17.7083C22.6562 21.5103 20.4688 23.6978 16.6667 23.6978ZM8.33333 4.427C5.35417 4.427 3.90625 5.87492 3.90625 8.85408V17.7083C3.90625 20.6874 5.35417 22.1353 8.33333 22.1353H16.6667C19.6458 22.1353 21.0938 20.6874 21.0938 17.7083V8.85408C21.0938 5.87492 19.6458 4.427 16.6667 4.427H8.33333Z" fill="white"/>
            <path d="M16.6667 12.2395H8.33334C7.90626 12.2395 7.55209 11.8853 7.55209 11.4583C7.55209 11.0312 7.90626 10.677 8.33334 10.677H16.6667C17.0938 10.677 17.4479 11.0312 17.4479 11.4583C17.4479 11.8853 17.0938 12.2395 16.6667 12.2395Z" fill="white"/>
            <path d="M12.5 17.448H8.33334C7.90626 17.448 7.55209 17.0938 7.55209 16.6667C7.55209 16.2397 7.90626 15.8855 8.33334 15.8855H12.5C12.9271 15.8855 13.2813 16.2397 13.2813 16.6667C13.2813 17.0938 12.9271 17.448 12.5 17.448Z" fill="white"/>
        </svg>
        {{ $text }}
    </a>
</li>
