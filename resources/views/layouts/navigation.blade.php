@if(auth()->check() && auth()->user()->isAdmin())
@include('admin.navbar')
@else
@include('customer.navbar')
@endif