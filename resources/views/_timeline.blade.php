<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
    	@include('_tweet')
    @empty
    	<p class="p-4">No tweets yet. Share what's on your mind!</p>
    @endforelse
    {{ $tweets->links() }}
</div>