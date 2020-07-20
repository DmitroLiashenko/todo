<div>
    <div class="flex justify-center pb-4 px-4">
	    <h2 class="text-lg pb-4">Add steps for task</h2>
	    <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"></span>
	</div>

    @foreach($steps as $step)
    <div class="fex justify-center py-2" wire:key="{{$step}}">
    	<input type="text" name="step[]" class="px-2 py-1 border rounded" placeholder="{{'Describe step '.($step+1)}}">
    	<span class="fas fa-times text-red-400 p-2" wire:click="remove({{$step}})"></span>
    </div>
	@endforeach
</div>
