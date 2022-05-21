<div>
    @forelse($feedBacks as $feedBack)
    {{$feedBack->name}}
    @empty <h1>NO Result Found</h1>
    @endforelse
</div>
