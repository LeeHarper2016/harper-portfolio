<div class="mr-auto ml-auto w-1/2 border border-purple-800 rounded-lg flex justify-around p-5 mb-10">
    <modal button_classes="rounded-full border-2 border-purple-800 font-bold p-2 w-10 text-center cursor-pointer">
        <template #button_text>
            +
        </template> 
        <template #header>
            Add A Section
        </template>
        <template #content><div>
            <form action="/component/text" method="POST" class="flex flex-col items-center space-y-6 font-normal" enctype="multipart/form-data">
                @csrf
                <label for="anchor">
                    Anchor Tag:
                    <input type="text" name="anchor" id="anchor" class="border rounded-md block">
                </label>
                <label for="title">
                    Section Title:
                    <input type="text" name="title" id="title" class="border rounded-md block">
                </label>
                <label for="body">
                    Section Body:
                    <textarea cols="50" rows="5" id="body" name="body" class="border rounded-md block">
                        
                    </textarea>
                </label>
                <label for="image">
                    Section Image:
                    <input type="file" name="image" id="image" class="border rounded-md block">
                </label>
                <button type="submit" class="border border-purple-800 rounded-lg p-3 bg-purple-300">
                    Submit
                </button>
            </form>
        </template>
    </modal>
</div>