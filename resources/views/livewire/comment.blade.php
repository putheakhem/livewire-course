<div>
    <h1 class="text-3xl"> Comments </h1>

    <form class="my-4 flex" wire:submit.prevent="AddComment">
        <input type="text" wire:model.lazy="newContent" class="w-full rounded border shadow p-2 mr-2 my-2">
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-800 w-20 rounded shadow text-white">
                Add
            </button>
        </div>
    </form>


        @foreach($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-between my-2">
                <div class="flex">
                    <p class="font-bold text-lg">{{ $comment['author'] }}</p>
                    <p class="mx-3 py-1 text-xl text-gray-200">{{ $comment['created_at'] }}</p>
                </div>
            </div>
            <p class="text-gray-800"> {{ $comment['content'] }}</p>
        </div>

        @endforeach
</div>
