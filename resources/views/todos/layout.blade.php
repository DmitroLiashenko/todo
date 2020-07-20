<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
	@livewireStyles
	<title>Todo</title>
</head>
<body>
<div class="text-center flex justify-center pt-10">
	<div class="w-1/3 border border-gray-500 rounded py-4">
		@yield('content')
	</div>
</div>

@livewireScripts
</body>
</html>