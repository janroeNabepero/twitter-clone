<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="tweets" method="POST">
        @csrf
        <textarea 
        name="body"
        class="w-full" 
        placeholder="What's up doc?"
        required 
        autofocus 
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img 
                src="{{ $user->avatar }}"  
                alt="your avatar" 
                class="rounded-full mr-2"
                width="55"
                height="40" 
            >
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-5 py-2 text-sm text-white">
        Publish
        </button>

        </footer>

    </form>
        @error('body')
            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
        @enderror
</div>