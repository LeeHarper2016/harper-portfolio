<div>
    <form action="/login" method="POST" class="flex flex-col items-center space-y-6 font-normal">
        @csrf
        <label for="name">
            Username:
            <input type="text" name="name" id="name" class="border rounded-md block p-1.5" placeholder="User">
        </label>
        <label for="password">
            Password:
            <input type="password" name="password" id="password" class="border rounded-md block p-1.5" placeholder="Password">
        </label>
        <button type="submit" class="border border-purple-800 rounded-lg p-3 bg-purple-300">
            Log In
        </button>
    </form>
</div>