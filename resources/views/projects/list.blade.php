<div class="field">
	<h1 class="title">My Projects</h1>
	@foreach ($projects as $project)
	
		<div class="field">
	        <h1 class="subtitle">{{ $project->name }}</h1>
		</div>

    @endforeach
</div>
